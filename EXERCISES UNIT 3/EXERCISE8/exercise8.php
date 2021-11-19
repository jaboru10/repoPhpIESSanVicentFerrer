<html>

<head>
    <title>Unit 3</title>
    <link rel="stylesheet" href="CSS2/main.css" type="text/css">
</head>

<body>
    <h1>ejercise 8</h1>
    <?php
    $dias = array("lunes","martes","miércoles","jueves","viernes","sábado","domingo");
    echo("<table border = '1'><tr><th>Lun</th><th>Mar</th><th>Mier</th><th>Juev</th><th>Vier</th><th>Sab</th><th>Domi</th></tr><tr>");
    foreach ($dias as $key => $value) {
        echo("<td>".$value." </td>");
    }
    echo("</tr></table>");
    ?>
</body>

</html>