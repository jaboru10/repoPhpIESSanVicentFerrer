<?php
$name=$_POST['name'];
$surname=$_POST['surname'];
if (is_null($name) || empty($name)||is_null($surname) || empty($surname))
{
?>
<form action="form.php" method="post">
You have left blank values
<?php
echo "<INPUT TYPE='hidden' NAME='name' VALUE='$name'>";
echo "<INPUT TYPE='hidden' NAME='surname' VALUE='$surname'>";
?>
<INPUT TYPE='submit' VALUE='Go back'>
</form>
<?php
} else
{
echo "Hello , $name $surname";
?>
<form action="form.php">
<INPUT TYPE='submit' VALUE='Go Back'>
</form>
<?php
} ?>