<section class="admin-panel w-3/4 mx-auto">
    <h1 class="text-3xl font-bold text-center">Administration des articles</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success my-4">Vous êtes connecté !</div>
    <?php endif ?>

    <a href="/php/blog_php_poo/admin/posts/create" class="btn btn-success my-8">Créer un nouvel article</a>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Publié le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['posts'] as $post): ?>
                    <tr>
                        <th>
                            <?= $post->id ?>
                        </th>
                        <td>
                            <?= $post->title ?>
                        </td>
                        <td>
                            <?= $post->created_at ?>
                        </td>
                        <td class="flex gap-4">
                            <a href="/php/blog_php_poo/admin/posts/edit/<?= $post->id ?>"
                                class="btn btn-warning">Modifier</a>
                            <form action="/php/blog_php_poo/admin/posts/delete/<?= $post->id ?>" method="POST">
                                <button class="btn btn-error">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>