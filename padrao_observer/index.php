<?php
require 'classes.php';

$olheiro = new UsuarioObserver();

$user = new Usuario("Diego");
$user->attach($olheiro);

echo "Meu nome é: ".$user->getName();
echo "<hr>";

$user->setName("Diego Tesch");

echo "Meu nome é: ".$user->getName();
echo "<hr>";

$user->detach($olheiro);
$user->setName("Diego Tesch Gramelich");

echo "Meu nome é: ".$user->getName();
echo "<hr>";