<?php
$Listado = array();

// Datos de conexión
$Host = 'db';
$User = 'nacho';
$Password = '1234';
$BaseDeDatos = 'panel';

// Activar que mysqli lance excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Conexión
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
    echo '<h3>Conexión correcta a la base de datos</h3>';

    try {
        /*****************************************************/
        // Eliminación si viene código por URL
        if (!empty($_GET['codigo'])) {
            $codigo = intval($_GET['codigo']);
            $SQL_Delete = "DELETE FROM pais WHERE id = $codigo";
            mysqli_query($linkConexion, $SQL_Delete);
            echo "Se ha borrado el código $codigo<br />";
        }
    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al querer eliminar</h3>';
        echo '<p>' . $e->getMessage() . '</p>';
    }

    try {
        /*****************************************************/
        // Consulta de países
        $SQL = "SELECT * FROM pais ORDER BY id";
        $rs = mysqli_query($linkConexion, $SQL);

        // Recorrer resultados con while
        while ($fila = mysqli_fetch_assoc($rs)) {
            $Listado[] = $fila; // guardo cada fila como array asociativo
        }

        /*****************************************************/
        // Mostrar listado con link de eliminar
        if (!empty($Listado)) {
            echo '<h3>Listado de Paises</h3>';
            foreach ($Listado as $pais) { ?>
                <p>
                    ID: <?= $pais['id']; ?> |
                    NOMBRE: <?= $pais['nombre']; ?> |
                    <a href="delete_paises.php?codigo=<?= $pais['id']; ?>"
                    onclick="return confirm('¿Está seguro de eliminar este país?');">
                        &#10132; Eliminar
                    </a>
                </p>
            <?php }
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
