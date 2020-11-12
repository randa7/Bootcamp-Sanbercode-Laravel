<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';


$sheep = new Animal("shaun");
echo 'Animal : '.$sheep->get_name(); // "shaun"
echo '<br>';
echo 'Legs : '.$sheep->get_legs(); // 2
echo '<br>';
echo 'Cold Blooded : '.$sheep->get_cold_blooded(); // false
echo '<br><br>';
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


$sungokong = new Ape("kera sakti");
echo 'Nama Ape : '.$sungokong->get_name(); // "kera sakti"
echo '<br>';
echo 'Legs : '.$sungokong->get_legs(); // 2
echo '<br>';
echo 'Cold Blooded : '.$sungokong->get_cold_blooded(); // false
echo '<br>';
echo 'Yell : ';
$sungokong->yell(); // "Auooo"
echo '<br><br>';

$kodok = new Frog("buduk");
echo 'Animal : '.$kodok->get_name(); // "buduk"
echo '<br>';
echo 'Legs : '.$kodok->get_legs(); // 4
echo '<br>';
echo 'Cold Blooded : '.$kodok->get_cold_blooded(); // false
echo '<br>';
echo 'Jump' ;
$kodok->jump(); // "hop hop"
echo '<br><br>';