<?php

require_once("animal.php");

class Ape extends Animal {

  protected int $legs = 2;

  public function __construct(string $name) {
    parent::__construct($name);
  }

  function yell() {
    return "Auooo";
  }
}

?>