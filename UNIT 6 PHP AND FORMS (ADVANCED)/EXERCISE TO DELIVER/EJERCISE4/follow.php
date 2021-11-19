<html>

<head>
    <title>Ejercise 5</title>
</head>

<body>
    <h1>Ejercise 5 </h1>
    <?php session_start();

    //valores fake db
    $correctUser="javi10";
    $correctPass="1234";

    //valores recibidos en el formulario
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $intentos;
    
    //variables para tratamiento de errores
    $error = true;
    $mensajeDeError = "";


    //Control de errores 
    //controlamos que venga del formulario
    if (isset($user) || isset($pass)) {
        //comprobamos que no estan nullos
        if (is_null($user) || is_null($pass)) {
            $mensajeDeError = "valor nulo para alguno de los siguientes campos obligatorios!(user,pass)";
        } else {
            //comprobamos que no estan vacios 
            if (empty($user) || empty($pass)) {

                $mensajeDeError = "valores vacios para los campos requeridos!(user,pass)";

                //todo OK!
            } else {
                $error = false;
            }
        }
    } else {
        header("Location:form.php");
    }

    if (empty($mensajeDeError)) {
        if($correctUser==$user && $correctPass==$pass){
            echo ("<h1>Validacion de usuario correcta, bienvenido al sistema!</h1>");
        }else{
           
            //$_SESSION['intentos']++;
            header("Location:form.php");
        }
        

    } else {
       echo($mensajeDeError);
    }



    ?>
    </p>
</body>

</html>