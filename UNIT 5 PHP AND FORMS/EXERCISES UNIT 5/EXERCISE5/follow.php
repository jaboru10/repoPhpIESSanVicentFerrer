<html>

<head>
    <title>Ejercise 5</title>
</head>

<body>
    <h1>Ejercise 5 </h1>
    <?php
    $vivienda = $_POST['vivienda'];
    $zona = $_POST['zona'];
    $dirrecion = $_POST['direccion'];
    //$dormitorios = $_POST['dormitorios'];
    $dormitorios=$_POST['dormitorios'] = isset($_POST['dormitorios']) ? $_POST['dormitorios'] : 0;
    /*
    if (isset($_POST['dormitorios'])){
        $dormitorios = $_POST['dormitorios']; 
    }
    */
    
    $precio = $_POST['precio'];
    $tamaño = $_POST['tamaño'];
    $mensaje = $_POST["textarea"];

    $error = true;
    $mensajeDeError = "";


    //Control de errores 
    //posibles errores son la ausencia de dirección o que el precio o el tamaño contengan valores no numéricos

    //controlamos que venga del formulario
    if (isset($dirrecion) || isset($precio) || isset($tamaño)) {
        //comprobamos que no estan nullos
        if (is_null($dirrecion) || is_null($precio) || is_null($tamaño)) {
            $mensajeDeError = "valor nulo para alguno de los siguientes campos obligatorios!(direccion,precio,tamaño)";
        } else {
            //comprobamos que no estan vacios 
            if (empty($dirrecion) || empty($precio) || empty($tamaño)) {
                $mensajeDeError = "alguno de los siguientes campos obligatorios se encuentra vacio!(direccion,precio,tamaño)";
                //todo OK!
            } else {
                $error = false;
            }
        }
    } else {
        $mensajeDeError = "debe pasar por el formulario primero!";
    }

    if (empty($mensajeDeError)) {
        echo ("<h1>Inserción de vivienda</h1>");
        
            echo ("<h2>Estos son los datos introducidos: </h2><br>");
            echo ("<ul><li>Tipo: " . $vivienda . "</li><br>");
            echo ("<li>Zona: " . $zona . "</li><br>");
            echo ("<li>Dirrecion: " . $dirrecion . "</li><br>");
            echo ("<li>Numero de dormitorios: " . $dormitorios . "</li><br>");
            echo ("<li>Precio: " . $precio . "</li><br>");
            echo ("<li>Tamaño: " . $zona . "</li><br>");
            echo ("<li>Extras: ");
            if (isset($_POST['piscina'])) echo 'piscina,';
            if (isset($_POST['jardin'])) echo 'jardin,';
            if (isset($_POST['garage'])) echo 'garage<br><br>';
            echo ("<li>Observaciones: " . $mensaje."</li>");
        
           
    } else {
        echo ("<h2>No se ha podido realizar la insercion debido a los siguientes errores:: </h2>");
        echo($mensajeDeError);
    }



    ?>
    </p>
</body>

</html>