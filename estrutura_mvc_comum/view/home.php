<h3>Noticias</h3>

<?php foreach($posts as $post): ?>
    <h3><?= $post['titulo'] ?></h3>
    <p><?= $post['corpo'] ?></p>
    <hr>
<?php endforeach; ?>