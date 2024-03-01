<div class="hero min-h-screen bg-base-100">
    <div class="hero-content w-full flex-col gap-12">
        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Se connecter</h1>
        </div>
        <div class="card w-full max-w-xl border border-neutral shadow-2xl bg-base-100">
            <form action="/php/blog_php_poo/login" method="POST" class="card-body">

                <div class="form-control">
                    <label class="label" for="username">
                        <span class="label-text">Utilisateurs</span>
                    </label>
                    <input type="text" name="username" id="username" placeholder="pseudo" class="input input-bordered"
                        required />
                </div>

                <div class="form-control">
                    <label class="label" for="password">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" id="password" placeholder="**********"
                        class="input input-bordered" required />
                    <label class="label" for="password">
                        <a href="#" class="label-text-alt link link-hover">Mot de passe oublié ?</a>
                    </label>
                </div>

                <div class="form-control mt-6">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>