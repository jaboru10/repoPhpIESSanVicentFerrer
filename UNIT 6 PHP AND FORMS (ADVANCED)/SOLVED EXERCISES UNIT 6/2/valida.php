<?php
session_start();
$name=$_POST['name'];
if (is_null($name) || empty($name))
{
header("Location:form.html");
} else
{$_SESSION['name']=$name;
header("Location:follow.php");
} ?>