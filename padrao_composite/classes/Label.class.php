<?php

class Label implements RenderableInterface {
  private $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function render(){
    return "<label>{$this->text}</label><br>";
  }
}