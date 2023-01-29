<?php
session_start();
session_destroy();
setcookie('PHPSESSID',null,-1);
echo '<h1>Lose</h1>';
header("Refresh:2; url=/");