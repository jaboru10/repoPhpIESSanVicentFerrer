<html>
<head>
<title></title>
</head>
<body>
<?php
class Menu {
private $links=array();
private $titles=array();
// Function to save links and options
public function loadOption($li,$tit)
{
$this->links[]=$li;
$this->titles[]=$tit;
}
//Show horizontally the menu
public function showHorizontally()
{
for($f=0;$f<count($this->links);$f++)
{
echo '<a href="'.$this->links[$f].'">'.$this->titles[$f].'</a>';
echo "-";
}
}
//Show vertically the menu
public function showVertically()
{
for($f=0;$f<count($this->links);$f++)
{
echo '<a href="'.$this->links[$f].'">'.$this->titles[$f].'</a>';
echo "<br>";
}
}
}
//create menu
$menu1=new Menu();
$menu1->loadOption('http://entreunosyceros.hol.es','entreunosyceros');
$menu1->loadOption('http://about.me/sapoclay','About SapoClay');
$menu1->loadOption('http://sapobuskedas.hol.es','SapoBuskedas');
//Show the menus
$menu1->showVertically();
echo "<hr>";
$menu1->showHorizontally();
?>
</body>
</html>