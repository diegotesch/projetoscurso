<?php
class Pessoa{

  private $name;
  private $lastName;
  private $age;

  public function setName($n)
  {
    $this->name = $n;
    return $this;
  }

  public function setLastName($n)
  {
    $this->lastName = $n;
    return $this;
  }

  public function setAge($n)
  {
    $this->age = $n;
    return $this;
  }

  public function getFullName()
  {
    return $this->name. ' '.$this->lastName . ' = '.$this->age;
  }
}

$pessoa = new Pessoa();
$pessoa->setName('Diego')->setLastName('Tesch')->setAge(33);
echo $pessoa->getFullName();