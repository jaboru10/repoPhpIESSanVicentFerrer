<html>
<head>
<title>MY FORM</title>
</head>
<body>
<h1>FORM</h1><br>
<br>
<h1>My 4t FORM</h1>
<?php
echo "<b> Your name is ".$_REQUEST['lastname']."</b><br>";
echo "You play ";
if (isset($_POST['basketball'])) echo 'basketball<br>';
if (isset($_POST['baseball'])) echo 'baseball';
?>
</body>
</html>