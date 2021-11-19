<h1>The cities of the Cominitat Valenciana</h1>
<h2>Select a city</h2>


<?php
$province=$_POST['province'];

$ciudadesAlicante= array("Alacant","Benidorm","Elda");
$ciudadesCastellon=array("Calix","Villareal","Morella");
$ciudadesValencia=["Aldaia","Picasent","Alzira"];
$arrayCiti;

//asignem a una variable el que em rebut per POST DEL ANTERIOR FORMULARI
if($province==0){
    
    $nombreProvincia="Alacant";
    $arrayCiti=$ciudadesAlicante;
    
}elseif($province==1){
    
    $nombreProvincia="Castello";
    $arrayCiti=$ciudadesCastellon;
}elseif($province==2){
    
    $nombreProvincia="Valencia";
    $arrayCiti=$ciudadesValencia;
}

echo '

<form action="third.php" method="post">
Cities:<input type="radio" name="cities" value="'. $arrayCiti[0].'">'. $arrayCiti[0].'
    <input type="radio" name="cities" value="'. $arrayCiti[1].'">'. $arrayCiti[1].'
    <input type="radio" name="cities" value="'. $arrayCiti[2].'">'. $arrayCiti[2].'
    <input type="hidden" name="province" value="'. $nombreProvincia.'"><br><br>
    <input type="submit" value="send">
</form>';

?>