<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>ZMA <span>.</span></h1>
  <nav>
    <?php foreach ($links as $link): ?>
        <a href="<?= htmlspecialchars($link['url']) ?>">
            <?= htmlspecialchars($link['label']) ?>
        </a>
    <?php endforeach; ?>
</nav>
</header>

<section class="hero">
    <h1>ZAZ MOHAMED AMINE</h1>
    <h2>Développeur web junior</h2>
    <p>Bienvenue sur mon portfolio. Découvrez mes projets et mon travail.</p>
    <br>
    <a class="btn" href="#project">mes projets</a>
</section>

<main>

<section id="about">
    <h1>Qui je suis ?</h1>
    <h2>À propos de moi !</h2>
    <br>
    <p>Je suis un développeur web junior passionné par la création de sites web.</p>
    <br><br>
    <p class="skills">HTML - CSS - JavaScript - Git - GitHub</p>
    <br>
    <h1>MON TRAVAIL</h1>
</section>

<section id="project">

    <?php foreach ($projets as $projet): ?>

    <article class="card">
        <h1><?= htmlspecialchars($projet['titre']) ?></h1>

        <p><?= htmlspecialchars($projet['description']) ?></p>

        <?php if ($projet['statut'] === 'termine'): ?>
            <p>Projet terminé</p>
        <?php else: ?>
            <p>Projet en cours</p>
        <?php endif; ?>

        <a href="#">explore</a>
    </article>

    <?php endforeach; ?>

</section>

<section id="contact">
    <h1>contact :</h1>
   <ul>
    <?php foreach ($contacts as $contact): ?>
        <li>
            <a href="<?= htmlspecialchars($contact['url']) ?>">
                <?= htmlspecialchars($contact['label']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</section>

</main>

<footer>
    <h1>&copy; ZAZ MOHAMED AMINE 2026</h1>
</footer>

</body>
</html>
