<?php session_start();
include './funciones.php';

$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$dni=$_POST["dni"];
//validamos que viene del formulario
if(isset($nombre) && isset($telefono) && isset($dni)){

    validaTama├▒oCadena($dni);

}else{
    echo"nada que mostrar.";
}







?>