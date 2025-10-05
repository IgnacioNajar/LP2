<?php 
function ValidarControles(){
    //esta funcion retorna un mensaje, 
    //que puede estar vacio si todo se cumple
    //o puede contener las indicaciones para que se ingresen los datos correctamente


    //recuerden el signo ! indica negacion

    $Mensaje="";

    //validaciones 1er control
    if (strlen($_POST['Numero1']) == 0) {
        //si la longitud de caracteres del control Numero1 es 0...
        //es decir esta vacio de contenido
        $Mensaje.="Debe ingresar el primer valor. <br />";

    }else {
        //sino, si tiene valor , pero NO es un numero... 
        if (!is_numeric($_POST['Numero1'])) {
            $Mensaje.="El primer valor debe ser un número. <br />";
        }
    }

    //validaciones 2do control
    if (strlen($_POST['Numero2']) == 0) {
        //si la longitud de caracteres del control Numero2 es 0...
        //es decir esta vacio de contenido
        $Mensaje.="Debe ingresar el segundo valor. <br />";
    }else {
        //sino, si tiene valor pero no es un numero... 
        if (!is_numeric($_POST['Numero2'])) {
            $Mensaje.="El segundo valor debe ser un número. <br />";
        }
    }
    
    //validacion para saber que operacion desea hacer:
    if (empty($_POST['Operacion'])) {
        //si esta vacia la seleccion de la operacion
            $Mensaje.="Debe elegir la operación.<br />";
    }
    
    return $Mensaje;
}







?>