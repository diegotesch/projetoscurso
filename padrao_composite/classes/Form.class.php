<?php
require 'RenderableInterface.class.php';

class Form implements RenderableInterface{
  private $elements;
  private $method;
  private $action;

  public function __construct($method = 'post', $action = '')
  {
    $this->method = $method;
    $this->action = $action;
  }

  public function addElement(RenderableInterface $element)
  {
    $this->elements[] = $element;
  }

  public function render()
  {
    $html = "<form method='{$this->method}' action='{$this->action}'>";

    foreach($this->elements as $element){
      $html .= $element->render();
    }

    $html .= '</form>';

    return $html;
  }
}