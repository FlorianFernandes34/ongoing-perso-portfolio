<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('public/images/favicon/favicon.jpeg') ?>" type="image/png">


    <!-- Tailwind (usage sobre) -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white text-text antialiased">

<header class="border-b border-border">
    <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">

        <!-- Logo -->
        <span class="text-sm font-medium">
            <a href="<?= base_url() ?>">Florian Fernandes</a>
        </span>

        <!-- Menu desktop -->
        <nav class="hidden md:flex gap-8 text-sm text-muted">
            <a href="<?= base_url('course')?>" class="hover:text-text">Parcours</a>
            <a href="<?= base_url('skills')?>" class="hover:text-text">Compétences</a>
            <a href="<?= base_url('projects')?>" class="hover:text-text">Projets</a>
            <a href="<?= base_url('internships')?>" class="hover:text-text">Stages</a>
            <a href="<?= base_url('tech')?>" class="hover:text-text">Veille</a>
            <a href="<?= base_url('contact')?>" class="hover:text-text">Contact</a>
        </nav>

        <!-- Burger -->
        <button id="burgerBtn" class="md:hidden flex flex-col gap-1">
            <span class="w-5 h-[2px] bg-black"></span>
            <span class="w-5 h-[2px] bg-black"></span>
            <span class="w-5 h-[2px] bg-black"></span>
        </button>

    </div>

    <!-- Menu mobile -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-border px-6 py-4">
        <nav class="flex flex-col gap-4 text-sm text-muted">
            <a href="<?= base_url('course')?>">Parcours</a>
            <a href="<?= base_url('skills')?>">Compétences</a>
            <a href="<?= base_url('projects')?>">Projets</a>
            <a href="<?= base_url('internships')?>">Stages</a>
            <a href="<?= base_url('tech')?>">Veille</a>
            <a href="<?= base_url('contact')?>">Contact</a>
        </nav>
    </div>
</header>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="border-t border-gray-200 mt-32 bg-white">
    <div class="max-w-6xl mx-auto px-6 py-12 text-sm text-gray-600 text-center">

        <!-- Liens -->
        <div class="flex flex-col items-center space-y-3">
            <h3 class="font-semibold text-gray-900">Liens</h3>
            <ul class="space-y-2">
                <li>
                    <a href="https://www.linkedin.com/in/florian-fernandes-5176b428b/" target="_blank" rel="noopener" class="hover:text-gray-900 transition">LinkedIn</a>
                </li>
                <li>
                    <a href="https://github.com/FlorianFernandes34" target="_blank" rel="noopener" class="hover:text-gray-900 transition">GitHub</a>
                </li>
                <li>
                    <a href="https://trello.com/invite/b/68d131353b8a26820ce2878d/ATTI24ffd064e230af07d37f878d1ac44b6f2D72BB8A/1ere-situation-pro-fernandes-florian" target="_blank" rel="noopener" class="hover:text-gray-900 transition">Trello — Situation pro 1</a>
                </li>
                <li>
                    <a href="https://trello.com/invite/b/6909ce27dfef0b8256586baf/ATTI9bba32e8f820ae1ee95abfd615616050BD63404D/situ-pro-erdem-clement-florian" target="_blank" rel="noopener" class="hover:text-gray-900 transition">Trello — Situation pro 2</a>
                </li>
            </ul>
        </div>

        <!-- Bas -->
        <div class="border-t border-gray-200 mt-10 pt-6 text-xs text-gray-500">
            © <?= date('Y') ?> Florian Fernandes — Tous droits réservés
        </div>

    </div>
</footer>

<script>
    const btn = document.getElementById('burgerBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
