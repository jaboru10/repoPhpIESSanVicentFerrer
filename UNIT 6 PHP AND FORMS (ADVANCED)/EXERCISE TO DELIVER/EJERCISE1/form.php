<h1>Insercion de vivienda</h1>
<h2>Introduzca los datos de la venta</h2>





<form action="follow.php" method="post">
    Tipo de vivienda : <select name=vivienda value=''>Seleccione tipo</option>
        <option value='piso'>Piso</option>
        <option value='adosado'>Adosado</option>
        <option value='villa'>Villa</option>
    </select><br>

    Zona : <select name=zona value=''>Seleccione zona</option>
        <option value='centro'>Centro</option>
        <option value='afueras'>Afueras</option>
    </select><br>


    <!-- INSERTAMOS EL CODIGO PARA QUE CUANDO VOLVAMOS AL FORMULARIO LOS CAMPOS QUE EL USUARIO A RELLENADO QUEDEN REFLEJADOS-->
    <?php session_start();

    //DIRECCION
    if (isset($_SESSION['direccion'])) {
        echo 'DIRECCION<input type="text" name="direccion" value=' . $_SESSION['direccion'] . '></input><br>';
    } else {
        echo 'DIRECCION<input type="text" name="direccion" ></input><br>';
    }
    //PRECIO
    if (isset($_SESSION['precio'])) {
        echo 'PRECIO<input type="text" name="precio" value=' . $_SESSION['precio'] . '></input><br>';
    } else {
        echo 'PRECIO<input type="text" name="precio" ></input><br>';
    }

    //TAMAÑO
    if (isset($_SESSION['tamaño'])) {
        echo 'TAMAÑO<input type="text" name="tamaño" value=' . $_SESSION['tamaño'] . '></input><br>';
    } else {
        echo 'TAMAÑO<input type="text" name="tamaño" ></input><br>';
    }

    ?>
    <!--
      
        
        
        LA ETIQUETA NAME NOS PERMITE QUE SELECCIONESMOS UNO DE ELLOS
         EN EL PHHP ---- IF($POST['dormitorios']==0) el 0 sera el value-->
    Numero de dormitorios:
    <input type="radio" id="1" name="dormitorios" value="1">
    <label for="1">1</label>
    <input type="radio" id="2" name="dormitorios" value="2">
    <label for="2">2</label>
    <input type="radio" id="3" name="dormitorios" value="3">
    <label for="3">3</label><br>



    <label>
        Piscinaa
        <input type="checkbox" name="piscina">
    </label>
    <label>
        Jardin
        <input type="checkbox" name="jardin">
    </label>
    <label>
        Garage
        <input type="checkbox" name="garage"><br>
    </label>


    <textarea name="textarea" rows="10" cols="50"></textarea><br>


    <input type="submit" value="Insertar vivienda">
</form>