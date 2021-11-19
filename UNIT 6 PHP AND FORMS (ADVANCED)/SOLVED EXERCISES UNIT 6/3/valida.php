<?php
session_start();
$name=$_POST['name'];
$_SESSION['name']=$name;
if (strlen($name)<8){
    header("Location:form.php");
}else{
    header("Location:follow.php");
}
?>