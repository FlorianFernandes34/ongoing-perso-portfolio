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
        <span class="text-sm font-medium"><a href="<?= base_url()?>">Florian Fernandes</a></span>
        <nav class="flex gap-8 text-sm text-muted">
            <a href="<?= base_url('course')?>" class="hover:text-text">Parcours</a>
            <a href="<?= base_url('skills')?>" class="hover:text-text">Compétences</a>
            <a href="<?= base_url('projects')?>" class="hover:text-text">Projets</a>
            <a href="<?= base_url('internships')?>" class="hover:text-text">Stages</a>
            <a href="<?= base_url('tech')?>" class="hover:text-text">Veille Technologique</a>
            <a href="<?= base_url('contact')?>" class="hover:text-text">Contact</a>
        </nav>
    </div>
</header>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="border-t border-gray-200 mt-32 bg-white">
    <div class="max-w-6xl mx-auto px-6 py-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-sm text-gray-600">

            <!-- Marque / infos -->
            <div class="space-y-3">
                <h3 class="font-semibold text-gray-900">Florian Fernandes</h3>
                <p>
                    Portfolio développé avec CodeIgniter 4 et Tailwind CSS.
                </p>
            </div>

            <!-- Liens utiles -->
            <div class="space-y-3">
                <h3 class="font-semibold text-gray-900">Liens utiles</h3>
                <ul class="space-y-2">
                    <li><a href="https://www.linkedin.com/in/florian-fernandes-5176b428b/" class="hover:text-gray-900 transition">LinkedIn</a></li>
                    <li><a href="vhttps://github.com/FlorianFernandes34" class="hover:text-gray-900 transition">Github</a></li>
                    <li><a href="https://trello.com/invite/b/68d131353b8a26820ce2878d/ATTI24ffd064e230af07d37f878d1ac44b6f2D72BB8A/1ere-situation-pro-fernandes-florian" class="hover:text-gray-900 transition">Trello : Situ. Pro.  1</a></li>
                    <li><a href="https://trello.com/invite/b/6909ce27dfef0b8256586baf/ATTI9bba32e8f820ae1ee95abfd615616050BD63404D/situ-pro-erdem-clement-florian" class="hover:text-gray-900 transition">Trello : Situ. Pro.  2</a></li>
                </ul>
            </div>

            <!-- Tech / infos -->
            <div class="space-y-3">
                <h3 class="font-semibold text-gray-900">Technologies</h3>
                <p>
                    CodeIgniter 4 · PHP · Tailwind CSS · MySQL
                </p>
            </div>

        </div>

        <!-- Barre du bas -->
        <div class="border-t border-gray-200 mt-10 pt-6 text-center text-xs text-gray-500">
            © <?= date('Y') ?> Florian Fernandes — Tous droits réservés
        </div>

    </div>
</footer>


</body>
</html>
