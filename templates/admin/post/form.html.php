<section class="edit-form w-full grid justify-items-center gap-8 mb-8">
    <h1 class="text-3xl font-bold text-center">
        <?= $params['post']->title ?? 'Créer un nouvel article' ?>
    </h1>

    <div class="card shrink-0 w-9/12 shadow-2xl bg-base-100 border border-neutral">
        <form class="card-body"
            action="<?= isset($params['post']) ? "/php/blog_php_poo/admin/posts/edit/{$params['post']->id}" : "/php/blog_php_poo/admin/posts/create" ?>"
            method="POST">

            <h2 class="text-xl font-bold text-center">Formulaire</h2>

            <div class="form-control">
                <label class="label" for="title">
                    <span class="label-text">Titre de l'article</span>
                </label>
                <input type="text" class="input input-bordered" name="title" id="title"
                    value="<?= $params['post']->title ?? '' ?>" />
            </div>

            <div class="form-control">
                <label class="label" for="content">
                    <span class="label-text">Contenu de l'article</span>
                </label>
                <textarea class="textarea textarea-bordered" name="content" id="content"
                    rows="8"><?= $params['post']->content ?? '' ?></textarea>
            </div>

            <div class="form-control mt-6 flex gap-4">
                <button class="btn btn-primary">
                    <?= isset($params['post']) ? 'Enregistrer les modifications' : 'Enregistrer mon article' ?>
                </button>
                <a href="/php/blog_php_poo/admin/posts" class="btn btn-neutral">Retourner au tableau</a>
            </div>

        </form>
    </div>
</section>