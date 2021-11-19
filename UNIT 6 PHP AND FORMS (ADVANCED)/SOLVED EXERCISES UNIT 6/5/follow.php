<?php
session_start();
if (!isset($_SESSION['counter']))
{ echo "Wellcome, it's your first time here";
$_SESSION['counter']=1; }
else
{ $_SESSION['counter']++; echo "
You have been here ". $_SESSION['counter'] ." times."; }
?>