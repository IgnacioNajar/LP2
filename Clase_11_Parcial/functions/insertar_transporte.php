<?php
include_once('log.php');
require_once('select_marca.php');

function insertarTransporte($vConexion, $marca, $modelo, $anio, $patente, $habilitado)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $vConexion->query("SET time_zone = '-3:00'");

    $marcas = listarMarcas($vConexion);

    foreach ($marcas as $elemento) {
        if ($marca == $elemento['denominacion']) {
            $marcaId = $elemento['id'];
            break;
        }
    }

    try {
        $existe = 0;

        $check = $vConexion->prepare("SELECT COUNT(*) FROM transporte WHERE patente = ?");
        $check->bind_param("s", $patente);
        $check->execute();
        $check->bind_result($existe);
        $check->fetch();
        $check->close();

        if ($existe > 0) {
            return null;
        }

        $stmt = $vConexion->prepare(
            "INSERT INTO transporte (marcaId, modelo, anio, patente, disponible)
            VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("isisi", $marcaId, $modelo, $anio, $patente, $habilitado);
        $stmt->execute();

        registrarLog("Transporte insertado correctamente: $marcaId - $modelo - $patente", 'INFO');

        $stmt->close();
        return true;
    } catch (mysqli_sql_exception $e) {
        registrarLog("Intento de insertar transporte fallido" . $e->getMessage(), 'ERROR');
        return false;
    }
}
?>
