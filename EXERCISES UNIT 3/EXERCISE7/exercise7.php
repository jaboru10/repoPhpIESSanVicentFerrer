<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 7</h1>
    <?php
    $matriz = [5, 8, 9, 12, 10, 56, 89, 4, 1, 6];
    $contadorAltos=0;
    $contadorBajos=0;
    $contadorIguales=0;
    $promedio = array_sum($matriz) / count($matriz);
    echo ("promedio de la matriz: " . $promedio . "<br>");
    foreach ($matriz as $key => $value) {
        switch ($value) {
            case $value > $promedio:
                $contadorAltos++;
                break;
            case $value < $promedio:
                $contadorBajos++;
                break;
            case $value == $promedio:
                $contadorIguales++;
                break;
        }
    }
    echo("<br>Numeros mas altos que la media: ".$contadorAltos."<br>");
    echo("<br>Numeros mas bajos que la media: ".$contadorBajos."<br>");
    echo("<br>Numeros mas iguales a la media: ".$contadorIguales."<br>");
    /*
    for ($i = 0; $i < $matriz; $i++) {
       
    }
    */
    ?>
</body>

</html>