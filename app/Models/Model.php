<?php

namespace App\Models;

use Database\DBConnection;

use PDO;

abstract class Model
{
    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        $stmt = $this->db->getPDO()->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public function findById(int $id)
    {
        $stmt = $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create(array $data)
    {
        return $this->query("INSERT INTO {$this->table} (title, content) VALUES (:title,:content)", $data);
    }

    public function update(int $id, array $data)
    {
        $data['id'] = $id;

        return $this->query("UPDATE {$this->table} SET title = :title, content = :content WHERE id = :id", $data);
    }

    public function destroy(int $id): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function query(string $sql, array $param, bool $single = null)
    {
        $method = is_null($param) ? "query" : "prepare";

        if (
            strpos($sql, 'DELETE') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'CREATE') === 0
        ) {
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}