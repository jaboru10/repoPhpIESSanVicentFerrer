<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 4</h1>
    <?php
    $diaAleatorio = rand(1,7);
    $diasSemana=["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
        echo($diasSemana[$diaAleatorio-1]);
    ?>
</body>

</html>