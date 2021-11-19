<head>
    <title>Ejercise 3</title>
</head>

<body>
    <form action="form.php" method="post">
        Numero 1<input type="text" name="num1"><br>
        Numero 2<input type="text" name="num2"><br><br>
        
        <button class="btn" name="operacion" value="0" type="submit">Suma</button>
        <button class="btn" name="operacion" value="1" type="submit">Resta</button>
        <button class="btn" name="operacion" value="2" type="submit">Multiplicaion</button>

    </form>
</body>
<?php

if(isset($_POST['num1']) || isset($_POST['num1'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $value = $_POST['operacion'];
    switch ($value) {
        case 0:
           header("Location:suma.php?num1=$num1&num2=$num2"); 
            break;
        case 1:
            header("Location:resta.php?num1=$num1&num2=$num2"); 
            break;
        case 2:
            header("Location:multiplicacion.php?num1=$num1&num2=$num2"); 
            break;

    }
    echo $num1." ".$num2." ---> ".$value;
}

?>
</html>