<?php
require "animal.php";
require "Ape.php";
require "Frog.php";

echo "<pre>\n\n";
$sheep = new Animal("shaun");
echo "Name : ". $sheep->get_name() . "\n"; // "shaun"
echo "legs : ". $sheep->get_legs() . "\n"; // 4
echo "cool blooded : ". $sheep->get_cold_blooded() . "\n"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
echo "\n";


$kodok = new Frog("buduk");
echo "Name : ". $kodok->get_name() . "\n";
echo "legs : ". $kodok->get_legs() . "\n";
echo "cool blooded : ". $kodok->get_cold_blooded() . "\n";
echo "Jump : ". $kodok->jump() . "\n"; // "hop hop"

echo "\n";


$sungokong = new Ape("kera sakti");
echo "Name : ". $sungokong->get_name() . "\n";
echo "legs : ". $sungokong->get_legs() . "\n";
echo "cool blooded : ". $sungokong->get_cold_blooded() . "\n";
echo "Yell : ". $sungokong->yell() . "\n"; // "Auooo"


echo "\n</pre>";
?>