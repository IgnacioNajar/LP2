<?php
function listarChoferes($vConexion)
{
  $choferes = [];

  $check = $vConexion->query(
    "SELECT
          u.id as id,
          u.nombre as nombre,
          u.apellido as apellido,
          u.dni as dni,
          u.usuario as usuario,
          u.sexo as sexo,
          u.activo as activo,
          n.denominacion as denominacionNivel,
          u.fechaCreacion as fechaCreacion,
          u.imagen as imagen
    FROM usuario u
    JOIN nivel n ON u.nivelId = n.id
    WHERE nivelId = 3
    ORDER BY u.apellido, u.nombre"
  );

  if ($check && $check->num_rows > 0) {
    while ($fila = $check->fetch_assoc()) {
      $choferes[] = [
        'id'                => $fila['id'],
        'nombre'            => $fila['nombre'],
        'apellido'          => $fila['apellido'],
        'dni'               => $fila['dni'],
        'usuario'           => $fila['usuario'],
        'sexo'              => $fila['sexo'],
        'activo'            => $fila['activo'],
        'denominacionNivel' => $fila['denominacionNivel'],
        'fecha'             => $fila['fechaCreacion'],
        'imagen'            => $fila['imagen'] ?: 'profile-img.jpg'
      ];
    }
  }

  $check->free();
  return $choferes;
}
?>
