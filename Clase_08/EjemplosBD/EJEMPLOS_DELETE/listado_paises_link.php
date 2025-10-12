<?php
// Array donde guardaremos los registros
$Listado = [];

// Datos de conexión
$Host = 'db';
$User = 'nacho';
$Password = '1234';
$BaseDeDatos = 'panel';

// Activar que mysqli lance excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    //Conexión
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
    echo '<h3>Conexión correcta a la base de datos</h3>';

    try {
        // Consulta de países
        $SQL = "SELECT * FROM pais ORDER BY id";
        $rs = mysqli_query($linkConexion, $SQL);

        // Recorrer resultados con while y agregar al listado
        while ($fila = mysqli_fetch_assoc($rs)) {
            $Listado[] = $fila; // cada fila es un array asociativo
        }

        // Mostrar listado con link de eliminación
        if (!empty($Listado)) {
            echo '<h3>Listado de Países</h3>';
            foreach ($Listado as $indice => $pais): ?>
                <p>
                    ID: <?= $pais['id']; ?> |
                    NOMBRE: <?= $pais['nombre']; ?> |
                    <a href="delete_paises.php?codigo=<?= $pais['id']; ?>">
                        &#10132; Eliminar
                    </a>
                </p>
                <hr />
            <?php endforeach;
        } else {
            echo 'No hay países cargados en la base de datos.';
        }
    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al consultar listado</h3>';
        echo '<p>' . $e->getMessage() . '</p>';
    }

} catch (mysqli_sql_exception $e) {
    echo '<h3>Error en la base de datos</h3>';
    echo '<p>' . $e->getMessage() . '</p>';
}
?>
