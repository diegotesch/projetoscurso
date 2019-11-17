<?php

class Button implements RenderableInterface{
  private $text;
  private $type;

  public function __construct($text, $type = 'submit')
  {
    $this->text = $text;
    $this->type = $type;
  }

  public function render()
  {
    return "<button type='{$this->type}'>{$this->text}</button>";
  }
}