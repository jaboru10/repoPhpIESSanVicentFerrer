<html>

<head>
    <title>Unit 4</title>
</head>

<body>
    <h1>ejercise 3</h1>
    <?php
    $dias = array("Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres","Dissabte");
    $mesos = array("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost","Setembre", "Octubre", "Novembre", "Desembre");
    echo("Avui es " . $dias[date('w')] . ", " . date('d') . " de " . $mesos[date('n') - 1] . " de " . date('Y'));
    ?>
</body>

</html>