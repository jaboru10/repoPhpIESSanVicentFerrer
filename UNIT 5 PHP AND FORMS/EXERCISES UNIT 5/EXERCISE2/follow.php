<html>

<head>
    <title>Ejercise 2</title>
</head>

<body>
    <h1>Ejercise 2 </h1>
    <?php
    $mesos = array("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");
    $monthSelect;
    $year;
    $comprobacion=false;
    $mensajeMes="";
    $mensajeAño="";
   if(is_null ($_POST['month'])){
        echo("is null  month");
        $mensajeMes="is null  month";
    }elseif (empty($_POST['month'])) {
        $mensajeMes="empty month";
    }elseif (isset($_POST['month'])) {
        $number = $_POST['month'];
        
        if(is_numeric($number)){

            if($number<1 || $number>12){
                $mensajeMes="number no valid";
            }else{
                $mensajeMes=$number;
            }
        }else{
            $mensajeMes="don't is a number";
        }
        
    }



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