<form action="follow.php" method="POST">
Name: <input type="text" name="name" value="<?php if(isset($_POST["name"])) echo
$_POST["name"];?>"/>
Surname: <input type="text" name="surname" value="<?php if(isset($_POST["surname"]))
echo $_POST["surname"];?>"/>
<input type="submit" name="boto" value="Send"/>
</form>