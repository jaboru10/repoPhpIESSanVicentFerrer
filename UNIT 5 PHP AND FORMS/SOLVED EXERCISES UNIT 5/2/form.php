<html>
   <head>
      <title></title>
   </head>
   <body>
      <h1>While loop</h1>
      <form action="form.php" method="post">
         How many times?
         <input type="text" name="number">
         <input type="submit" value="Send">
      </form>
      <p>
         <?php
         if ( isset( $_POST['number'] )) {
         $number = $_POST['number'];
         $counter = 1;
         while ($counter <= $number) {
         echo "Loops are easy!<br>\n";
         $counter++;
         } echo "
         Finished.\n";
         }
         ?>
      </p>
   </body>
</html>