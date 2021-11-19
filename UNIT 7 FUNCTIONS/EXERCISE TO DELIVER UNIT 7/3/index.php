<?php

function foo(&$x, &$y)
{
    $temporal=$x;
    $x=$y;
    $y=$temporal;
}

$a=1;
$b=2;
//antes metodo
echo "antes del metodo: a-->".$a." b-->".$b;
//ejecutamos metodo
foo($a,$b);
// $a aqui ya es 2 y $b 1
echo "antes del metodo: a-->".$a." b-->".$b;
?>