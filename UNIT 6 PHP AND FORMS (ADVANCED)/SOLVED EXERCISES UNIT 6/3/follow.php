<?php
session_start();
$name=$_SESSION['name'];
echo "Hello, $name";
session_destroy();
echo "<br/><a href='form.php'>Go back </a>";
?>