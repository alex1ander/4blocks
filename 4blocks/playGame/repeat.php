<?php
$_SESSION[step]++; 
$title = "turn : $_SESSION[step]";
$arrayColor = ['red','yellow','green','blue'];
$key = $_SESSION[step] . 'color';

$n = array_search($_SESSION[$key],$arrayColor);

include (__DIR__  . '/../blocks/template.php');



if($_SESSION[step] > $_SESSION[turn])
{
    $_SESSION[step] = 0;
    header("Location: /start");
}
header("Refresh:1");


