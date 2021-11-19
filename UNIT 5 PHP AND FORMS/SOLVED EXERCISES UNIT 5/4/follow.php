<html>
<head>
<title>MY FORM</title>
</head>
<body>
<h1>FORM</h1><br>
<br>
<h1>My 3r FORM</h1>
<?php
if($_POST['gender'] == 0) {
echo "Hello Mr. ";
} else {
echo "Hello Mrs. ";
} echo "<b>{$_POST['lastname']}</b>, nice to meet you.";
?>
</body>
</html>