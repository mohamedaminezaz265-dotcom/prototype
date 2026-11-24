<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
<h1>ZMA <span>.</span></h1>
<nav>
<?php foreach($links as $link):?>
<a href="<?= $link['lein'] ?>">
<?= $link['titre'] ?>
</a>
<?php endforeach; ?>
</nav>
</header>

<section id="about" >

<h1>ZAZ MOHAMED AMINE</h1>
<h2>QUI JE SUIS ?</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi in qui saepe debitis omnis sit praesentium quo repellendus doloremque atque. Aspernatur maxime libero, aut vero ab totam sed ipsa voluptatem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae alias incidunt, reprehenderit non, illo dicta ipsa vitae tempore officia voluptates consequuntur pariatur et sunt accusantium obcaecati. Ea quaerat eaque suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium aut fugit inventore. Ut soluta est autem voluptatibus, facilis ullam hic quaerat, accusamus laboriosam rerum error cumque nisi pariatur temporibus at.</p>
<br><br>
<h1 id="titre_projets">mes projects</h1>

</section>
<section id="projects">
<?php foreach ($projects as $project):?>
<article  class="card" >
<h3 id="walo"><?= $project['titre'] ?></h3>
<?= $project['description'] ?><br><br>
<a href="#">explore</a>
<br>
<br></article><br>
<?php endforeach;?>

</section>
<section id="contact" >
<h1>contact :</h1>
<?php foreach($contacts as $contact):?>
<ul>
<li>
<a href="<?= $contact['lein'] ?>"><?= $contact['titre'] ?></a>

</li>
<?php endforeach; ?></ul>

</section>
<footer>
<h1>&copy; ZAZ MOHAMED AMINE 2026</h1>
</footer>
</body>
</html>
