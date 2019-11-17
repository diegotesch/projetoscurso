<?php
require 'OutputInterface.php';

class Produtos{

  private $array;
  private $output;

  public function getLista()
  {
    $this->array = array(
      array("id" => 1, "nome" => "Notebook Dell"),
      array("id" => 2, "nome" => "Fonde de ouvido Bluetooth"),
      array("id" => 3, "nome" => "Nobreak"),
      array("id" => 4, "nome" => "Computador Desktop"),
      array("id" => 5, "nome" => "Kit mouse e teclado Wireless"),
    );
  }

  public function setOutput(OutputInterface $outputType)
  {
    $this->output = $outputType;
  }

  public function getOutput()
  {
    return $this->output->load($this->array);
  }
}