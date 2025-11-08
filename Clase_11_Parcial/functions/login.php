<?php
function datosLogin($vUsuario, $vClave, $vConexion)
{
    $usuario = [];

    $stmt = $vConexion->prepare(
        "SELECT
            u.id AS id,
            u.nombre AS nombre,
            u.apellido AS apellido,
            u.dni AS dni,
            u.usuario AS usuario,
            u.clave AS clave_hash,
            u.sexo AS sexo,
            u.activo AS activo,
            u.fechaCreacion as fechaCreacion,
            u.nivelId AS nivelId,
            u.imagen AS imagen,
            u.nivelId as nivelId,
            n.denominacion AS nivelDenominacion
        FROM usuario u
        JOIN nivel n ON u.nivelId = n.id
        WHERE u.usuario = ?"
    );

    $stmt->bind_param("s", $vUsuario);
    $stmt->execute();
    $rs = $stmt->get_result();
    $data = $rs->fetch_assoc();
    $stmt->close();

    if ($data && password_verify($vClave, $data['clave_hash'])) {
        $usuario = [
            'id'                => $data['id'],
            'nombre'            => $data['nombre'],
            'apellido'          => $data['apellido'],
            'dni'               => $data['dni'],
            'userName'          => $data['usuario'],
            'nivel'             => $data['nivelId'],
            'fechaCreacion'     => date('d/m/Y', strtotime($data['fechaCreacion'])),
            'nivelDenominacion' => $data['nivelDenominacion'],
            'nivelId'           => $data['nivelId'],
            'sexo'              => $data['sexo'],
            'activo'            => $data['activo'],
            'imagen'            => $data['imagen'] ?: 'profile-img.jpg'
        ];

        switch ($data['sexo']) {
            case 'F':
                $usuario['saludo'] = 'Bienvenida';
                break;
            case 'M':
                $usuario['saludo'] = 'Bienvenido';
                break;
            default:
                $usuario['saludo'] = 'Bienvenid@';
                break;
        }
    }

    return $usuario;
}
?>
