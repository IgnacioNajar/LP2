<?php 
function InsertarUsuarios($vConexion) {
        
    $SQL_Insert="INSERT INTO Usuarios (Nombre, Apellido, Email, Clave, IdNivel, IdPais, FechaCreacion, Sexo)
    VALUES ('".$_POST['Nombre']."' , '".$_POST['Apellido']."' , '".$_POST['Email']."', '".$_POST['Clave']."' , 2, ".$_POST['Pais']." , NOW(), '".$_POST['Sexo']."')";


    if (!mysqli_query($vConexion, $SQL_Insert)) {
        //si surge un error, finalizo la ejecucion del script con un mensaje
        die ('<h4>Consulta: '. $SQL_Insert.'</h4> <p style="color: #ff0000">'.mysqli_error($vConexion) .'</p>'  ) ;
    }

    return true;
}
?>