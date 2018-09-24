<?php require "app/views/partials/header.view.php" ?>
    <div class="container">
    <?php foreach ($posts as $post ) : ?>
        <h1><?= $post->title ?></h1>
        <p><?= $post->body?></p>
        <hr>
    <?php endforeach; ?>
    </div>
<?php require "app/views/partials/footer.view.php" ?>