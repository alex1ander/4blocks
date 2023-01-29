<?php
$n = rand(0,3);
$arrayColor = ['red','yellow','green','blue'];
$_SESSION[turn]++;
$title = "turn : $_SESSION[turn]";

include 'blocks/template.php';


$turnSession = $_SESSION[turn] . 'color';
$_SESSION[$turnSession] = $arrayColor[$n];

echo '<pre>';
print_r($_SESSION);

header("Refresh:1; url=playGame");
