<?php
require './classes/Form.class.php';
require './classes/InputText.class.php';
require './classes/Label.class.php';
require './classes/Button.class.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  var_dump($_POST);
}


$form = new Form();

$form->addElement(new Label('Usuário:'));
$form->addElement(new InputText('usuario'));

$form->addElement(new Label('Senha:'));
$form->addElement(new InputText('senha', 'password'));

$form->addElement(new Button('Enviar'));

echo $form->render();