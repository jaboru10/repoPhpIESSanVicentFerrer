<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 1</h1>
    <?php

    $n = rand(1,99);
    if($n>50){
        echo("el numero ".$n." es mayor que 50");
    }elseif($n<50){
        echo("el numero ".$n." es menor que 50");
    }elseif ($n==50) {
        echo("el numero ".$n." es 50");
    }
    
   
    ?>
</body>

</html>