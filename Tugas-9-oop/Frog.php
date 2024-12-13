<?php

require_once("animal.php");

class Frog extends Animal {

  protected bool $cold_blooded = true; // I think frogs are cold blooded

  public function __construct(string $name) {
    parent::__construct($name);
  }

  function jump() {
    return "hop hop";
  }
}

?>