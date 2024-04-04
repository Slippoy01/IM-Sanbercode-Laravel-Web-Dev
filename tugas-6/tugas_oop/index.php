<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");
echo "Name : " . $sheep->get_name() . PHP_EOL;
echo "<br>";
echo "legs : " . $sheep->get_legs() . PHP_EOL;
echo "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded() . PHP_EOL;
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name() . PHP_EOL;
echo "<br>";
echo "legs : " . $kodok->get_legs() . PHP_EOL;
echo "<br>";
echo "cold blooded : " . $kodok->get_cold_blooded() . PHP_EOL;
echo "<br>";
$kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->get_name() . PHP_EOL;
echo "<br>";
echo "legs : " . $sungokong->get_legs() . PHP_EOL;
echo "<br>";
echo "cold blooded : " . $sungokong->get_cold_blooded() . PHP_EOL;
echo "<br>";
$sungokong->yell();

?>
