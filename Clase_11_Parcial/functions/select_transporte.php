<?php
function listarTransportes($vConexion)
{
    $transportes = [];

    $check = $vConexion->query(
        "SELECT
            t.id as id,
            m.denominacion as marca,
            t.modelo as modelo,
            t.anio as anio,
            t.patente as patente,
            t.disponible as disponible
        FROM transporte t
        JOIN marca m ON t.marcaId = m.id
        ORDER BY t.id"
    );

    if ($check && $check->num_rows > 0) {
        while ($fila = $check->fetch_assoc()) {
            $transportes[] = [
                'id'           => $fila['id'],
                'marca' => $fila['marca'],
                'modelo'       => $fila['modelo'],
                'anio'         => $fila['anio'],
                'patente'      => $fila['patente'],
                'disponible'   => $fila['disponible']
            ];
        }
    }

    $check->free();
    return $transportes;
}
?>
