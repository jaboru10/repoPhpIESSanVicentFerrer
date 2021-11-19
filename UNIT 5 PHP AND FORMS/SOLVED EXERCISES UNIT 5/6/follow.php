<?php
    $name=$_POST['name'];
    echo "Hello, $name.<br/>";
    $phone = $_POST['phone'];
    if (preg_match('/^((1-)?\d{3})-\d{3}-\d{4}/', $phone))
    {
         echo "Valid phone $phone";

    } else {
        
        echo "Invalid phone $phone";    
    }
?>