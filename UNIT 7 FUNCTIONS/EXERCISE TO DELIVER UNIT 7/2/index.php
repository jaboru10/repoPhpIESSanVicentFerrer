<!-- 
2.Hacer otra función sum () para que también incluya la presentación de los resultados, para que desde el
programa principal solo tengamos que hacer:
suma (1,2,3);
y muéstranos;
"La suma de 1 2 3 es 6"
El número de argumentos será variable.
-->


<?php
function sum(){

$totalSuma=0;    
if(func_num_args()==0){
echo "sin argumentos de entrada";
}else{
    
    for ($i=0; $i < func_num_args(); $i++) { 
        $numDelParametro=func_get_arg($i);
        if(is_numeric($numDelParametro)){
            $totalSuma+=$numDelParametro;
        }else{
           
            return "imposible retornar la suma valor no numerico";
        }
       
    }
    return $totalSuma;
}

}


    echo "La suma de argumentos de 6,2,3 es ".sum(6,2,3);
 





?>