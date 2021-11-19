
<?php session_start();




/*
// PARA HACER PRUEBAS EN LOS DIFERENTES CASOS ELIMINANDO LAS VARIABLES DE SESSION
session_destroy();
*/

if (isset($_SESSION['contadorAlumnos'])) //si existix $name si es la primera vegada no ixira ESTE MENSAJE ES EL QUE RETORNA CUAN NO ES CORRECTA LA INFO
{
    $alumnosAñadidos = $_SESSION['contadorAlumnos'];
    echo "Alumos añadidos".$alumnosAñadidos;
 
}else{
    $_SESSION['contadorAlumnos'] = 0;
}
echo '
<form action="controller.php" method="post">
        Name: <input type="text" name="name"><br>
        License Number: <input type="text" name="licenseNumber"><br>
        Mark 1 Tri: <input type="text" name="mark1"><br>
        Mark 2 Tri: <input type="text" name="mark2"><br>
        Mark 3 Tri: <input type="text" name="mark3"><br>
        <input type="submit" value="Enviar" name="evento_send">
        <input type="submit" value="Revisar Alumnos" name="evento_revisar" />
       
    </form>
';

 ?>
       
