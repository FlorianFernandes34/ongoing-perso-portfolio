<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- HERO -->
<!-- HERO -->
<section class="max-w-5xl mx-auto px-6 mt-32">
    <div class="max-w-2xl mx-auto text-center">

        <h1 class="text-4xl font-semibold leading-tight mb-8">
            Florian Fernandes<br>
            Étudiant Développeur
        </h1>

        <p class="text-muted text-lg mb-10">
            Étudiant en BTS SIO, je conçois et développe des applications robustes et maintenables.
        </p>

        <p class="text-muted">
            Ce portfolio présente mon profil, mon parcours, ma veille technologique ainsi que mes expériences professionnelles.
        </p>

    </div>
</section>

<!-- PROFIL -->
<section class="max-w-5xl mx-auto px-6 mt-40 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    <!-- IMAGE -->
    <div class="order-2 md:order-1">
        <img src="<?= base_url('public/images/workspace.jpg') ?>" alt="Espace de travail développeur" class="w-full h-auto rounded-md object-cover">
    </div>

    <!-- TEXTE -->
    <div class="order-1 md:order-2">
        <h2 class="text-2xl font-medium mb-6">Profil</h2>

        <p class="text-muted leading-relaxed mb-6">
            Passionné de développement depuis le lycée, ma nature curieuse me pousse à vouloir comprendre le fonctionnement des technologies qui régissent
            le monde de l'informatique.
        </p>
        <a target="_blank" href="<?= base_url('public/documents/cv_fernandes_florian.pdf')?>"
           class="inline-block mt-6 px-6 py-3 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white transition">
            Télécharger le CV
        </a>
    </div>

</section>

<!-- QUALITÉS -->
<section class="max-w-5xl mx-auto px-6 mt-40">

    <h2 class="text-2xl font-medium mb-16">Qualités</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-16">

        <div>
            <h3 class="font-medium mb-3">Rigueur</h3>
            <p class="text-muted">
                Très rigoureux, je porte beaucoup d'attention aux détails, à la qualité du code, ainsi qu'aux bonnes pratiques.
            </p>
        </div>

        <div>
            <h3 class="font-medium mb-3">Autonomie</h3>
            <p class="text-muted">
                J'aime apprendre en autodidacte, et j'aime également résoudre des problèmes techniques.
            </p>
        </div>

        <div>
            <h3 class="font-medium mb-3">Curiosité</h3>
            <p class="text-muted">
                J'ai constamment envie d'apprendre/découvrir de nouvelles technologies.
            </p>
        </div>

    </div>

</section>

<?= $this->endSection() ?>
