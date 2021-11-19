<?php session_start();
if (isset($_SESSION['name'])) //si existix $name si es la primera vegada no ixira ESTE MENSAJE ES EL QUE RETORNA CUAN NO ES CORRECTA LA INFO
{
    echo 'Name too short';
    $name = $_SESSION['name'];
} ?>
<form action="valida.php" method="POST">
    Name: <input type="text" name="name" value="<?php if (isset($name)) echo $name; ?>" /><!-- si la variable existix la fica !-->
    <input type="submit" name="boto" value="Send" />
</form>