<div class="container flex justify-center mt-8">
    <div class="card w-5/6 bg-base-100 border border-neutral shadow-xl">
        <div class="card-body items-center text-center">
            <h2 class="card-title">
                <?= $params['post']->title; ?>
            </h2>
            <span class="text-xs italic">
                <?= $params['post']->created_at; ?>
            </span>
            <p>
                <?= $params['post']->content; ?>
            </p>
            <div class="card-actions justify-end">
                <a href="/php/blog_php_poo/posts" class="btn btn-primary">Retourner aux articles</a>
            </div>
        </div>
    </div>
</div>