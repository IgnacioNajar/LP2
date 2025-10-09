<?php
// Array donde guardaremos los registros
$Listado = [];

// Datos de conexión
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'panel';

try {
    // Activar que mysqli lance excepciones
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Intento de conexión
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
    echo '<h3>Conexión correcta a la base de datos</h3>';

    // Consulta de países
    $SQL = "SELECT * FROM pais ORDER BY id"; // mejor usar columna explícita en lugar de ORDER BY 1
    $rs = mysqli_query($linkConexion, $SQL);

    // Recorrer resultados con while y agregar al listado
    while ($fila = mysqli_fetch_assoc($rs)) {
        $Listado[] = $fila; // cada fila es un array asociativo
    }

    // Mostrar listado con link de eliminación
    if (!empty($Listado)) {
        echo '<h3>Listado de Países</h3>';
        foreach ($Listado as $indice => $fila): ?>
            <p>
                El elemento <?= $indice; ?> de mi listado contiene: <br />
                El ID &#10132; <?= $fila['id']; ?> <br />
                Nombre &#10132; <?= $fila['nombre']; ?> <br />
                <a href='listado_paises_link.php?codigo=<?= $fila['id']; ?>'>
                    Eliminar
                </a>
            </p>
            <hr />
        <?php endforeach;
    } else {
        echo 'No hay países cargados en la base de datos.';
    }
} catch (mysqli_sql_exception $e) {
    echo '<h3>Error en la base de datos</h3>';
    echo '<p>' . $e->getMessage() . '</p>';
}
?>
