<?php
// factorial.php class
/**
method to calculate the factorial
*/
class Factorial {
private $num;
/**
* Constructor with the number in the index.php
*/
public function __construct($numb) {
$this->num = $numb;
}
public function factorial() {
//save the number from index.php
$numb = $this->num;
// We calculate the factorial
for ($fact = 1; $numb > 1; $numb--) {
$fact = $fact*$numero;
}
return $fact;
}
}