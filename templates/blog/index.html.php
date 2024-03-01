<section class="article-container w-full mx-auto flex flex-col justify-center gap-12 mb-8">
    <h1 class="text-3xl font-bold text-center">Les derniers articles</h1>

    <div class="card-wrap flex flex-wrap justify-center gap-8">
        <?php foreach ($params['posts'] as $post): ?>
            <div class="card w-96 bg-base-100 border border-neutral shadow-xl">
                <div class="card-body items-center text-center">
                    <h2 class="card-title">
                        <?= $post->title; ?>
                    </h2>
                    <span class="text-xs italic">
                        <?= $post->created_at; ?>
                    </span>
                    <p>
                        <?= $post->content; ?>
                    </p>
                    <div class="card-actions justify-end">
                        <a href="/php/blog_php_poo/posts/<?= $post->id; ?>" class="btn btn-primary">Lire plus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>