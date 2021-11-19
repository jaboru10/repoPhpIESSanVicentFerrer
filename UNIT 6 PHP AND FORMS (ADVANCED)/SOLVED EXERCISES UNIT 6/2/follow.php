<?php
session_start();
$name=$_SESSION['name'];
echo "Hello, $name";
session_destroy();
?>