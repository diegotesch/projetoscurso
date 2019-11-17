<?php
require 'Facebook.php';

$fb = new Facebook();
$post = $fb->createPost();
$post->setAuthor("Diego");
$post->setMessage("Exemplo de postagem");

echo "<h1>Autor: {$post->getAuthor()}</h1>";
echo "<p>Mensagem: {$post->getMessage()}</p>";
var_dump($post);