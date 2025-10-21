<?php 
function DatosLogin($vUsuario, $vClave, $vConexion){
    $Usuario=array();
         
    $SQL="SELECT U.Id, U.Nombre, U.Apellido, U.IdNivel, U.Imagen, U.Sexo, U.Activo, U.Imagen,
    N.Denominacion as NombreNivel
     FROM Usuarios U, Niveles N
     WHERE U.IdNivel = N.Id
     AND  Email='$vUsuario' AND Clave='$vClave'   ";

    $rs = mysqli_query($vConexion, $SQL);
        
    $data = mysqli_fetch_array($rs) ;
    if (!empty($data)) {
        $Usuario['ID'] = $data['Id'];
        $Usuario['NOMBRE'] = $data['Nombre'];
        $Usuario['APELLIDO'] = $data['Apellido'];
        $Usuario['NIVEL'] = $data['IdNivel'];
        $Usuario['NIVEL_NOMBRE'] = $data['NombreNivel'];
        
        switch ($data['Sexo']) {
            case 'F':
                $Usuario['SALUDO'] = 'Bienvenida';
                break;
            case 'M':
                $Usuario['SALUDO'] = 'Bienvenido';
                break;
            case 'O':
                $Usuario['SALUDO'] = 'Hola ';
                break;
        }
        

        if (empty( $data['Imagen'])) {
            $data['Imagen'] = 'user.png'; 
        }
        $Usuario['IMG'] = $data['Imagen'];
        $Usuario['ACTIVO'] = $data['Activo'];
        
    }
    return $Usuario;
}

?>