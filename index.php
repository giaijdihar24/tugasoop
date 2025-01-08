<?php

require_once "Frog.php";
require_once "Ape.php";
require_once "frog.php";


$sheep = new Animal("shaun");

echo "Name: " . $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold Blooded: " . $sheep->get_cold_blooded() . "<br>" . "<br>";


$kodok = new Frog("buduk");

echo "Name: " . $kodok->get_name() . "<br>";
echo "Legs: " . $kodok->get_legs() . "<br>";
echo "Cold Blooded: " . $kodok->get_cold_blooded() . "<br>";
echo "Jump: ";
$kodok->jump();

echo "<br>" . "<br>";


$sungokong = new Ape("kera sakti");

echo "Name: " . $sungokong->get_name() . "<br>";
echo "Legs: " . $sungokong->get_legs() . "<br>";
echo "Cold Blooded: " . $sungokong->get_cold_blooded() . "<br>";
echo "Yell: ";
$sungokong->yell();
?>
