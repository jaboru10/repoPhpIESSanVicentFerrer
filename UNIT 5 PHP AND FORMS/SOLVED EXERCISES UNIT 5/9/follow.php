<html>

<head>
    <title>MY FORM</title>
</head>

<body>
    <h1>FORM</h1><br>
    <br>
    <h1>My 4t FORM</h1>
    <?php
    echo "<b> Your name is {$_REQUEST['lastname']}</b>";
    $cars = $_REQUEST['cars'];
    echo "<br/>You have these cars: <br/>";
    foreach ($cars as $car)
        echo " $car<BR>\n";
    ?>
</body>

</html>