<html>

<head>
    <title></title>
</head>

<body>
    <h1>While loop</h1>
    <form action="index.php" method="post">
        Write a title:<input type="text" name="title"><br>
        <label for="cars">select option:</label><br>
        <input type="radio" name="orientation" value="0"> centered<br>
        <input type="radio" name="orientation" value="1"> right<br>
        <input type="radio" name="orientation" value="2"> left<br>
        <input type="submit" value="Send">
    </form>
    <p>
        <?php
         require_once("HeaderPage.php");
        if (isset($_POST['title']) && isset($_POST['orientation'])) {
            $title = $_POST['title'];
            $orientation=$_POST['orientation'];
            $object=new HeaderPage();
            $object->inicialize($title,$orientation);
            echo $object->returnHeader();
            
        }
        ?>
    </p>
</body>

</html>