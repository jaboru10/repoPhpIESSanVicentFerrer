<?php
require_once("factorial.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Práctica factorial</title>
</head>
<body>
<?php
// input number
$fac=6;
//Creamos una instancia de la clase Factorial
$num = new Factorial($fac);
echo $fac;
echo $num->factorial();
?>
</body>
</html>