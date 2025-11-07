<?php
function listarMarcas($vConexion)
{
  $marcas = [];

  $check = $vConexion->query(
    "SELECT
          id,
          denominacion
    FROM marca
    ORDER BY denominacion"
  );

  if ($check && $check->num_rows > 0) {
    while ($fila = $check->fetch_assoc()) {
      $marcas[] = [
        'id' => $fila['id'],
        'denominacion' => $fila['denominacion']
      ];
    }
  }

  $check->free();
  return $marcas;
}
?>
