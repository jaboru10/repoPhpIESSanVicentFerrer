<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 2</h1>
    <?php

    $numero1 = rand(1,9);
    $numero2 = rand(1,9);
    echo($numero1."-".$numero2)."<br>";
    if($numero1>$numero2){
        echo("los numeros no estan ordenados");
    }elseif($numero1<$numero2){
        echo("los numeros estan ordenados");
    }else if($numero1==$numero2){
        echo("los dos numeros son los mismos!");
    }
    
   
    ?>
</body>

</html>