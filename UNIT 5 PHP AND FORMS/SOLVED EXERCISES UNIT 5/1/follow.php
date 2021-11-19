<html>

<head>
    <title>While loop</title>
</head>

<body>
    <h1>While loop</h1>
    <?php
    if (isset($_POST['number'])) { //PARA SABER QUE VIENE DEL FORMULARIO I EXISTE
        $number = $_POST['number'];
        $counter = 1;
        while ($counter <= $number) {
            echo "Loops are easy!<br>\n";
            $counter++;
        }
        echo "Finished.\n";
    }
    ?>
    </p>
</body>

</html>