<?php

namespace App\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function home()
    {
        return $this->view('blog.home');
    }

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();

        return $this->view('blog.index', compact('posts'));
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('blog.show', compact('post'));
    }
}