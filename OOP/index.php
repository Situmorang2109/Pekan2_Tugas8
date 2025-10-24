<?php
// Import semua class
require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

// Release 0
echo "<h3>Release 0</h3>";
$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "<br>";          // "shaun"
echo "Legs: " . $sheep->legs . "<br>";          // 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"

// Release 1
echo "<h3>Release 1</h3>";

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";      // "kera sakti"
echo "Legs: " . $sungokong->legs . "<br>";      // 2
echo "Yell: ";
$sungokong->yell();                             // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>";          // "buduk"
echo "Legs: " . $kodok->legs . "<br>";          // 4
echo "Jump: ";
$kodok->jump();                                 // "hop hop"
?>
