<html>

<head>
    <title>Ejercise 4</title>
</head>

<body>
    <h1>Ejercise 4 </h1>
    <?php
    $euros = $_POST['euros'];
    $cambio = $_POST['cambio'];
    $mensaje="";

    
 





    if(is_null ($_POST['euros'])){
        $mensaje="is null value";
    }elseif (empty($_POST['euros'])) {
        $mensaje="empty value euros";
    }elseif (isset($_POST['euros'])) {
        $number = $_POST['euros'];

        if(is_numeric($number)){

            if($number<0 || $number>9999){
                $mensaje="number no valid";
            }else{
              //si todo es correcto
              if($cambio=01){
                $resultado=1.325*$euros;
            }elseif($cambio=02){
                $resultado=118.232*$euros;
            }elseif($cambio=02){
                $resultado=1.515*$euros;
            }
            
            

            }
        }else{
            $mensaje="don't is a number";
        }

    }

    if($mensaje==""){
        echo("€ = ".$resultado." ");
    }else{
        echo($mensaje);
    }
    ?>
    </p>
</body>

</html>