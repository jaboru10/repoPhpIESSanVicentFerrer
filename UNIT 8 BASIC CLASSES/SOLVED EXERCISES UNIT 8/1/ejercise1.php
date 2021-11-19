<?php
class Person
{
private $name;
public function initialize($name){
$this->name=$name;
}
public function print(){
echo $this->name;
echo "<br>";
}
}
$per1=new Person();
$per1->initialize("Peter");
$per1->print();
$per2=new Person();
$per2->initialize("Anthony");
$per2->print();
?>