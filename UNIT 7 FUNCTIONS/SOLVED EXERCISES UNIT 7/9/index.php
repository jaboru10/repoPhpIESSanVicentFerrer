<?php
function operations($n1, $n2, $operation) {
$result = 0;
if($operation == "Add") {
$result = $n1 + $n2;
}else if($operation == "Substract") {
$result = $n1 - $n2;
}else if($operation == "Multiplicate") {
$result = $n1 * $n2;
}
return $result; // Devolver el resultado
}
//Calling functions
$r = operations(5, 7, "Add");
echo $r . "<br>";
// Or print directly
echo operaciones(15, 8, "Substract");
?>