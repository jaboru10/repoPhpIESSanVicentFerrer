<h1>Resultado de la multiplicacion</h1>
<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];

echo $num1." * ".$num2." = ".($num1*$num2);
echo "<br/><a href='form.php'>Realiza otra operacion</a>";
?>