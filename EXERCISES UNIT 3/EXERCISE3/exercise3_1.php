<html>

<head>
    <title>Unit 3</title>
</head>

<body>
    <h1>ejercise 3.1</h1>
    <h2>Euro dollar converter</h2>
    <?php

    $equivalenciaAdollar = 1.18;
    for ($i=0; $i < 10; $i++) { 
        $multiplicador=$i+1;
        echo($multiplicador." € = $".$multiplicador*$equivalenciaAdollar." <br>");
    }
    
   
    ?>
</body>

</html>