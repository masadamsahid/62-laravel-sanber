<?php

class Animal {
  private string $name;
  protected int $legs = 4;
  protected bool $cold_blooded = false;

  function __construct (string $name) {
    $this->name = $name;
  }

  public function get_name () : string {
    return $this->name;
  }

  public function get_legs () : int {
    return $this->legs;
  }

  public function get_cold_blooded () : string {
    return $this->cold_blooded ? "yes" : "no";
  }


}

?>