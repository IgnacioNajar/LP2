<?php
function Listar_Niveles($vConexion) {
    $SQL = "SELECT * FROM nivel ORDER BY denominacion";
    $rs = mysqli_query($vConexion, $SQL);

    while ($fila = mysqli_fetch_assoc($rs)) {
        $Listado[] = $fila;
    }

    return $Listado;
}
?>
