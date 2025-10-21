<?php
function Listar_Usuarios($vConexion) {
    $SQL = "SELECT
                u.id AS id,
                u.apellido AS apellido,
                u.nombre AS nombre,
                u.email AS email,
                p.nombre AS pais,
                n.denominacion AS nivel,
                u.sexo AS sexo
            FROM usuario u
            JOIN pais p ON u.paisId = p.id
            JOIN nivel n ON u.nivelId = n.id
            ORDER BY u.id";

    $rs = mysqli_query($vConexion, $SQL);

    $Listado = [];
    while ($fila = mysqli_fetch_assoc($rs)) {
        $Listado[] = $fila;
    }

    return $Listado;
}

?>
