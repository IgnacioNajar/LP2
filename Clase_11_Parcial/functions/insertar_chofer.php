<?php
include_once('log.php');

function insertarChofer($vConexion, $apellido, $nombre, $dni, $usuario, $clave)
{
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  date_default_timezone_set('America/Argentina/Buenos_Aires');

  $vConexion->query("SET time_zone = '-3:00'");

  try {
    $activo = 1;
    $nivelId = 3;
    $sexo = 'M';
    $imagen = 'profile-img.jpg';
    $claveHash = password_hash($clave, PASSWORD_DEFAULT);

    $existe = 0;

    $check = $vConexion->prepare("SELECT COUNT(*) FROM usuario WHERE usuario = ?");
    $check->bind_param("s", $usuario);
    $check->execute();
    $check->bind_result($existe);
    $check->fetch();
    $check->close();

    if ($existe > 0) {
      return null;
    }

    $stmt = $vConexion->prepare(
      "INSERT INTO usuario (nombre, apellido, dni, usuario, clave, sexo, activo, nivelId, fechaCreacion, imagen)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)"
    );
    $stmt->bind_param("ssssssiis", $nombre, $apellido, $dni, $usuario, $claveHash, $sexo, $activo, $nivelId, $imagen);
    $stmt->execute();

    registrarLog("Chofer insertado correctamente: $usuario", 'INFO');

    $stmt->close();
    return true;
  } catch (mysqli_sql_exception $e) {
    registrarLog("Intento de insertar chofer fallido" . $e->getMessage(), 'ERROR');
    return false;
  }
}
?>
