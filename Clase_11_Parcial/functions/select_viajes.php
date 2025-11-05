<?php
function listarViajes($vConexion)
{
  $viajes = [];

  $check = $vConexion->query(
    "SELECT
          v.id AS id,
          v.fecha AS fechaViaje,
          v.costoViaje AS costoViaje,
          v.montoChofer AS montoChofer,
          v.porcentaje as porcentaje,
          CONCAT(c.apellido, ', ', c.nombre) as nombreChofer,
          d.denominacion as destino,
          CONCAT(m.denominacion, ' - ', t.modelo, ' -', t.patente) as transporte
      FROM viaje v
      JOIN usuario c ON v.choferId = c.id
      JOIN transporte t ON v.transporteId = t.id
      JOIN destino d ON v.destinoId = d.id
      JOIN marca m ON t.marcaId = m.id
      ORDER BY v.id"
  );

  if ($check && $check->num_rows > 0) {
    while ($fila = $check->fetch_assoc()) {
      $viajes[] = [
        'id'           => $fila['id'],
        'fechaViaje'   => date('d/m/Y', strtotime($fila['fechaViaje'])),
        'costoViaje'   => number_format($fila['costoViaje'], 2, ',', '.'),
        'montoChofer'  => number_format($fila['montoChofer'], 2, ',', '.'),
        'porcentaje'   => $fila['porcentaje'],
        'nombreChofer' => $fila['nombreChofer'],
        'destino'      => $fila['destino'],
        'transporte'   => $fila['transporte'],
      ];
    }
  }

  $check->free();
  return $viajes;
}
