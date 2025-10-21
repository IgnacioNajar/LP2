<?php
function Listar_Paises($vConexion) {
    // Consulta de países
    $SQL = "SELECT * FROM pais ORDER BY nombre";
    $rs = mysqli_query($vConexion, $SQL);

    while ($fila = mysqli_fetch_assoc($rs)) {
        $Listado[] = $fila;
    }

    return $Listado;
}
?>
