<!DOCTYPE html>
<html lang="fr" data-theme="sunset">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de veille technologique</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col justify-between">
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="/php/blog_php_poo/">Accueil</a></li>
                    <li><a href="/php/blog_php_poo/posts">Articles</a></li>
                    <li><a href="/php/blog_php_poo/admin/posts">Administration</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a href="/php/blog_php_poo/" class="btn btn-ghost text-xl">Blog</a>
        </div>
        <div class="navbar-end">
            <?php if (isset($_SESSION['auth'])): ?>
                <a href="/php/blog_php_poo/logout" class="btn btn-primary"><svg width="24" height="24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 2.25c.41 0 .75.34.75.75v9a.75.75 0 0 1-1.5 0V3c0-.41.34-.75.75-.75ZM6.17 5.11c.29.29.29.76 0 1.06a8.25 8.25 0 1 0 11.66 0A.75.75 0 1 1 18.9 5.1a9.75 9.75 0 1 1-13.78 0c.29-.3.76-.3 1.06 0Z"
                            fill="#0F172A" />
                    </svg>
                    Se déconnecter
                </a>
            <?php endif ?>
        </div>
    </div>

    <div class="container w-full mb-8 mx-auto flex">
        <?= $content ?>
    </div>


    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded bottom-0 mt-auto">
        <nav class="grid grid-flow-col gap-4">
            <a href="/php/blog_php_poo/" class="link link-hover">Accueil</a>
            <a href="/php/blog_php_poo/posts" class="link link-hover">Articles</a>
        </nav>
        <aside>
            <p>Copyright © 2024 - Tous droits réservé.</p>
        </aside>
    </footer>
</body>

</html>