<?php
function DatosLogin($vUsuario, $vClave, $vConexion)
{
    $Usuario = [];

    // Preparar la consulta
    $stmt = $vConexion->prepare(
        "SELECT
            u.id AS id,
            u.nombre AS nombre,
            u.apellido AS apellido,
            u.email AS email,
            u.nivelId AS nivelId,
            u.imagen AS imagen,
            u.sexo AS sexo,
            u.activo AS activo,
            u.clave AS clave_hash,
            n.denominacion AS nombreNivel
         FROM usuario u
         JOIN nivel n ON u.nivelId = n.id
         WHERE u.email = ?"
    );
    $stmt->bind_param("s", $vUsuario);
    $stmt->execute();
    $rs = $stmt->get_result();
    $data = $rs->fetch_assoc();
    $stmt->close();

    // Verificar que el usuario existe y la contraseña es correcta
    if ($data && password_verify($vClave, $data['clave_hash'])) {
        $Usuario = [
            'ID'           => $data['id'],
            'NOMBRE'       => $data['nombre'],
            'APELLIDO'     => $data['apellido'],
            'EMAIL'        => $data['email'],
            'NIVEL'        => $data['nivelId'],
            'NIVEL_NOMBRE' => $data['nombreNivel'],
            'ACTIVO'       => $data['activo'],
            'IMG'          => $data['imagen'] ?: 'user.png'
        ];

        // Saludo según el sexo
        switch ($data['sexo']) {
            case 'F':
                $Usuario['SALUDO'] = 'Bienvenida';
                break;
            case 'M':
                $Usuario['SALUDO'] = 'Bienvenido';
                break;
            default:
                $Usuario['SALUDO'] = 'Hola';
                break;
        }
    }

    return $Usuario;
}
