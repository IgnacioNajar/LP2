<?php
function listarDestinos($vConexion)
{
    $destinos = [];

    $check = $vConexion->query(
        "SELECT
            id,
            denominacion
        FROM destino
        ORDER BY denominacion"
    );

    if ($check && $check->num_rows > 0) {
        while ($fila = $check->fetch_assoc()) {
            $destinos[] = [
                'id'           => $fila['id'],
                'denominacion' => $fila['denominacion']
            ];
        }
    }

    $check->free();
    return $destinos;
}
?>
