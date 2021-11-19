<html>

<head>
    <title>Unit 3</title>
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
</head>

<body>
    <h1>ejercise 3.3</h1>
    <h2>Euro dollar converter</h2>
    <?php
    $equivalenciaAdollar = 1.18;
    echo("<table border = '1'><tr><th>Euros</th><th>Dollars</th></tr>");
    for ($i=0; $i < 10; $i++) { 
        $multiplicador=$i+1;
        echo("<tr><td>".$multiplicador." € </td><td>$".$multiplicador*$equivalenciaAdollar." </td></tr>");
    }
    echo("</table>");
    ?>
</body>

</html>