<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 6</h1>
    <?php
    $n = rand(1,10);
    $stringDeLaOperacion="";
    $resultadoDeLaOperacion=0;
    
    for ($i = 1; $i < $n+1; $i++) {
        //$stringDeLaOperacion=$stringDeLaOperacion.$i."";
        if($i%2==0){
            $resultadoDeLaOperacion+=$i;
            $stringDeLaOperacion=$stringDeLaOperacion.$i."+";
        }else{
            $resultadoDeLaOperacion-=$i;
            $stringDeLaOperacion=$stringDeLaOperacion.$i."-";
        }
        
    }
    substr($stringDeLaOperacion, 0, -1);
    echo($stringDeLaOperacion." = ".$resultadoDeLaOperacion);
    ?>
</body>

</html>