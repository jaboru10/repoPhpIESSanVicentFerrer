<html>

<head>
    <title>Ejercise 3</title>
</head>

<body>
    <h1>Ejercise 3 </h1>
    <?php
    
    $mesos = array("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");
    $monthSelect;
    $year;
    $comprobacion=false;
    $mensajeMes="";
    $mensajeAño="";

    //MES
    $mensajeMes=$mesos[$month=$_POST['month']-1];

    //AÑO
    if(is_null ($_POST['year'])){
        $mensajeAño="is null  year";
    }elseif (empty($_POST['year'])) {
        $mensajeAño="empty year";
    }elseif (isset($_POST['year'])) {
        $number = $_POST['year'];

        if(is_numeric($number)){

            if($number<0 || $number>9999){
                $mensajeAño="number no valid";
            }else{
                $mensajeAño=$number;
            }
        }else{
            $mensajeAño="don't is a number";
        }

    }
   
    echo("Is ".$mensajeMes." ".$mensajeAño);
    ?>
    </p>
</body>

</html>