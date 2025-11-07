<?php
include_once('log.php');

function conexionBd($host = 'db', $user = 'nacho', $password = '1234', $database = 'tdcsa')
{
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  try {
    $linkConexion = mysqli_connect($host, $user, $password, $database);
    $linkConexion->set_charset('utf8mb4');
    registrarLog("Conexión DB exitosa: $database en host $host", 'INFO');
    return $linkConexion;
  } catch (mysqli_sql_exception $e) {
    registrarLog('Conexión DB fallida: ' . $e->getMessage(), 'ERROR');

    return null;
  }
}

//$vConexion->query("ALTER TABLE usuario AUTO_INCREMENT = 1");
