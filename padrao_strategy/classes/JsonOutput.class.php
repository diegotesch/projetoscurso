<?php

class JsonOutput implements OutputInterface{

  public function load($data){
    return json_encode($data);
  }
}