<?php 
function Sumar($Nro1 , $Nro2 ) {
    //la funcion toma dos parametros
    //aqui opera con ambos generando un resultado
    $ResultadoSuma=$Nro1 + $Nro2;
    //la funcion devuelve el resultado calculado
    return $ResultadoSuma;    
}


function Restar($Nro1 , $Nro2 ) {
    $ResultadoResta=$Nro1 - $Nro2;
    //la funcion devuelve el resultado calculado
    return $ResultadoResta;
}

function Operar($Nro1 , $Nro2 , $Operacion) {
    $Resultado=0;
    if ($Operacion==1) {
        //llega el valor 1 cuando se elige la Suma
        $Resultado  =   Sumar($Nro1, $Nro2);
        
    }else if ($Operacion==2) {
        //llega el valor 2 cuando se elige la Resta
        $Resultado  =   Restar($Nro1, $Nro2);
    
    }else if ($Operacion==3) {
        //llega el valor 3 cuando se elige la Multiplicacion
       
    }
    return $Resultado;
}







?>