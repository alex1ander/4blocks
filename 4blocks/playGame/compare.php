<?php
print_r($_SESSION);
$_SESSION[step]++;
$stepColor = $_SESSION[step] . 'color';
if($_SESSION[color] == $_SESSION[$stepColor])
{
    
    if($_SESSION[step] == $_SESSION[turn])
    {
        $_SESSION[step] = 0;
        header("Location: /repeat");
    }else{
        header("Location: /playGame");
    }
}else{
    header("Location: /endBad.php");
}