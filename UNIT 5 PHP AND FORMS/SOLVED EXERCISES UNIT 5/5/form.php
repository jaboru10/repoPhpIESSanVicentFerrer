<html>
<head>
<title>MY FORM</title>
</head>
<body>
<h1>All in one</h1><br>
<br>
<h1>Fills in the data (form.html)</h1>
<form action="form.php" method="post">
<input type="radio" name="gender" value="0"> Mr.
<input type="radio" name="gender" value="1"> Mrs.<br>
Your surname:<br>
<input type="text" name="lastname">
<input type="submit" name="submitbutton" value="Send!">
</form>
<?php
if (isset($_POST['gender']) && isset($_POST['lastname']) && $_POST['lastname'] != "") {
if($_POST['gender'] == 0) {
echo "Hello Mr. ";
} else {
echo "Hello Mrs. ";
} echo "<b>{$_POST['lastname']}</b>, nice to meet you.\n";
} else {
if (isset($_POST['submitbutton'])) {
echo "Please fill all the fields" ;
}}
?>
</body>
</html>