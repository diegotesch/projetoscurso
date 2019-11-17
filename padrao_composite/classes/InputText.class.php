<?php

class InputText implements RenderableInterface{
  private $name;
  private $type;

  public function __construct($name, $type = 'text')
  {
    $this->name = $name;
    $this->type = $type;
  }

  public function render()
  {
    return "<input type='{$this->type}' name='{$this->name}' /><br>";
  }
}