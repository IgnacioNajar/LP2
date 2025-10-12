<?php
$Listado = array();
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

    // Limpiar tabla pais
    try {
        mysqli_query($linkConexion, 'DELETE FROM pais');
        mysqli_query($linkConexion, 'ALTER TABLE pais AUTO_INCREMENT = 1');
        echo '<p>Se ha limpiado la tabla de Paises</p>';
    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al limpiar tabla</h3><p>' . $e->getMessage() . '</p>';
    }

    // Insertar países
    $Paises = [
        // América del Norte
        'Canadá',
        'Estados Unidos',
        'México',
        // América Central
        'Belice',
        'Costa Rica',
        'El Salvador',
        'Guatemala',
        'Honduras',
        'Nicaragua',
        'Panamá',
        // Caribe
        'Antigua y Barbuda',
        'Bahamas',
        'Barbados',
        'Cuba',
        'Dominica',
        'República Dominicana',
        'Granada',
        'Haití',
        'Jamaica',
        'San Cristóbal y Nieves',
        'Santa Lucía',
        'San Vicente y las Granadinas',
        'Trinidad y Tobago',
        // América del Sur
        'Argentina',
        'Bolivia',
        'Brasil',
        'Chile',
        'Colombia',
        'Ecuador',
        'Guyana',
        'Paraguay',
        'Perú',
        'Surinam',
        'Uruguay',
        'Venezuela'
    ];


    try {
        foreach ($Paises as $Nombre) {
            $SQL_Insert = "INSERT INTO pais (nombre) VALUES ('$Nombre')";
            mysqli_query($linkConexion, $SQL_Insert);
            echo "Se agrega el Pais <strong>$Nombre</strong><br/>";
        }
    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al insertar países</h3><p>' . $e->getMessage() . '</p>';
    }

    // Consultar y mostrar listado
    try {
        $rs = mysqli_query($linkConexion, 'SELECT * FROM pais ORDER BY nombre');
        while ($fila = mysqli_fetch_assoc($rs)) {
            $Listado[] = $fila;
        }

        if (!empty($Listado)) {
            echo '<h3>Listado de Paises</h3>';
            foreach ($Listado as $indice => $fila) {
                echo "El elemento $indice de mi listado contiene:<br/>
                    ID --> {$fila['id']}<br/>
                    Nombre --> {$fila['nombre']}<br/>
                    <hr/>";
            }
        } else {
            echo '<p>No hay países cargados en la base de datos.</p>';
        }
    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al consultar listado</h3><p>' . $e->getMessage() . '</p>';
    }

} catch (mysqli_sql_exception $e) {
    echo '<h3>Error de conexión</h3><p>' . $e->getMessage() . '</p>';
}
?>
