<?php session_start();



session_destroy();
/*
// PARA HACER PRUEBAS EN LOS DIFERENTES CASOS ELIMINANDO LAS VARIABLES DE SESSION
session_destroy();
*/

if (isset($_SESSION['dniCalculado'])) //si existix $name si es la primera vegada no ixira ESTE MENSAJE ES EL QUE RETORNA CUAN NO ES CORRECTA LA INFO
{
    $dni = $_SESSION['dniCalculado'];
 
}
if (isset($_SESSION['mensajeError'])) //si existix $name si es la primera vegada no ixira ESTE MENSAJE ES EL QUE RETORNA CUAN NO ES CORRECTA LA INFO
{
    $mensajeError = $_SESSION['mensajeError'];
    echo $mensajeError;
}
 ?>
    <form action="follow.php" method="post">
        nombre<input type="text" name="nombre"><br>
        telefono<input type="text" name="telefono"><br>
        dni<input type="text" name="dni" value="<?php if (isset($dni)) echo $dni; ?>" /><!-- si la variable existix la fica !-->
        <input type="submit" value="Enviar">
    </form>
