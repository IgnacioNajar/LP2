<?php
include_once('log.php');
include_once('conexion.php');

function InsertarUsuarios($vConexion)
{
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  date_default_timezone_set('America/Argentina/Buenos_Aires');

  $vConexion->query("SET time_zone = '-3:00'");

  try {
    $nombre = strip_tags(trim($_POST['nombre'] ?? ''));
    $apellido = strip_tags(trim($_POST['apellido'] ?? ''));
    $usuario = strip_tags(trim($_POST['usuario'] ?? ''));
    $clave = $_POST['password'] ?? '';
    $activo = 1;
    $nivelId = 3;
    $imagen = 'bellota.jpg';

    // 🔹 (Opcional) Reiniciar el autoincrement si la tabla está vacía
    //$vConexion->query("ALTER TABLE usuario AUTO_INCREMENT = 1");

    $claveHash = password_hash($clave, PASSWORD_DEFAULT);

    $existe = 0;

    $check = $vConexion->prepare("SELECT COUNT(*) FROM usuario WHERE usuario = ?");
    $check->bind_param("s", $usuario);
    $check->execute();
    $check->bind_result($existe);
    $check->fetch();
    $check->close();

    if ($existe > 0) {
      echo "⚠️ El usuario '$usuario' ya existe.";
      return false;
    }

    $stmt = $vConexion->prepare(
      "INSERT INTO usuario (nombre, apellido, usuario, clave, activo, nivelId, fechaCreacion, imagen)
             VALUES (?, ?, ?, ?, ?, ?, NOW(), ?)"
    );
    $stmt->bind_param("ssssiis", $nombre, $apellido, $usuario, $claveHash, $activo, $nivelId, $imagen);
    $stmt->execute();

    registrarLog("Usuario insertado correctamente: $usuario", 'INFO');
    echo "✅ Usuario insertado correctamente: $usuario";

    $stmt->close();
    return true;
  } catch (mysqli_sql_exception $e) {
    registrarLog('❌ Error al insertar usuario: ' . $e->getMessage(), 'ERROR');
    echo "❌ Error al insertar usuario: " . $e->getMessage();
    return false;
  }
}

$conexion = conexionBd();

if ($conexion) {
  $conexion->query("SET time_zone = '-3:00'");
  InsertarUsuarios($conexion);
  $conexion->close();
} else {
  echo '❌ No se pudo establecer conexión con la base de datos.';
}
