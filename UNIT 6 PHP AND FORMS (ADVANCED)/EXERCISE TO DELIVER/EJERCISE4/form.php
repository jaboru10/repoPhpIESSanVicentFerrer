<h1>Login</h1>




<?php session_start();
if (!isset($_SESSION["intentos"])){
    $_SESSION["intentos"] = 0;
}else{
    $_SESSION["intentos"]++;
    if($_SESSION["intentos"]==3){
        header("Location:perdidaAcceso.php");
    }else{
        echo 'Numero de intentos: <p>' . $_SESSION['intentos'] . '</p><br>';
    }
    
}

?>
<form action="follow.php" method="post">
User: <input type="text" name="user" value=></input><br>
Pass: <input type="text" name="pass" value=></input><br><br>
<input type="submit" value="Login">


