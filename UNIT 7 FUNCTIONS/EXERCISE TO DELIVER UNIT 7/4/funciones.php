<?php session_start();

//FUNCION QUE COMPRUEBA SI LA CADENA RECIBIDA TIENE EL TAMAÑO CORRECTO INTENTA COMPLETAR EL DNI
function validaTamañoCadena($dni){
    if(strlen($dni)==9){
        validaPorPartes($dni);
    }else{
        if(strlen($dni)==8){
            //nos cercioramos que son numeros
            if(ctype_digit($dni)){
                $dni=$dni.calculaLetra($dni);
                echo $dni;
                $_SESSION["dniCalculado"] = $dni;
                header("Location:index.php");
            }
        }else{
            $_SESSION["mensajeError"] = "minimo 8 caracteres para calcular la letra";
            header("Location:index.php");
        }
    }
}


function validaPorPartes($dni){
    $letra=substr($dni, -1);
    $numeros=substr($dni, 0, -1);
    //comprobamos que es una letra
    if(ctype_alpha($letra)){
        if(ctype_digit($numeros)){
            
            $letraRecibida=calculaLetra($numeros);
            if($letraRecibida==$letra){
                header("Location:wellcome.html");
            }else{
                $_SESSION["mensajeError"] = "letra introducida no es correcta";
                header("Location:index.php");
            }
        }else{
            $_SESSION["mensajeError"] = "los 8 primeros digitos deben ser numericos.";
            header("Location:index.php");
        }
    }else{
        $_SESSION["mensajeError"] = "el ultimo caracter de un dni es una letra.";
        header("Location:index.php");
    }
}

function calculaLetra($cadena){
    
    $resto = $cadena%23;  
    $cadVal = 'TRWAGMYFPDXBNJZSQVHLCKE';  
    $res=$cadVal{$resto};
    return $res;  
}