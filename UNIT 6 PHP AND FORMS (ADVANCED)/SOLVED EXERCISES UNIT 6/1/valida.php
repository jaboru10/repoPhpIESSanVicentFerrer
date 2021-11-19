<!--ESTA PAGINA ES TRANSPARENTE AL USUARIO NO UTILIZAR ECHOS NI NADA -->
<?php
$name = $_POST['name'];
//SI EL NOMBRE ES NULO O ESTA VACIO VUELVO AL FORMULARIO
if (is_null($name) || empty($name)) {
    header("Location:form.html");
//SI ESTA TODO OK VOY AL ARCHIVO FOLLOW.PHP PASANDOLE LA VARIABLE
} else {
    header("Location:follow.php?name=$name");
}
