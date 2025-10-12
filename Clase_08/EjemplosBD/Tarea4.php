<?php
$Listado = [];
$accion = ''; // Acción a ejecutar

// Datos de conexión
$Host = 'db';
$User = 'nacho';
$Password = '1234';
$BaseDeDatos = 'Tareas';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

    // Array de personas
    $Personas = [
        ['nombre' => 'Ignacio', 'apellido' => 'Najar', 'correo' => 'ignacio.najar2310@gmail.com'],
        ['nombre' => 'Naara', 'apellido' => 'Larcher', 'correo' => 'naara.lar@gmail.com'],
        ['nombre' => 'Raul', 'apellido' => 'Najar', 'correo' => 'joseraulnajar@gmail.com'],
        ['nombre' => 'Lucrecia', 'apellido' => 'Fernandez', 'correo' => 'lucrefg@gmail.com'],
        ['nombre' => 'Santiago', 'apellido' => 'Najar', 'correo' => 'santiago.najar@gmail.com'],
        ['nombre' => 'Luis', 'apellido' => 'Garcia', 'correo' => 'luis.garcia@gmail.com'],

    ];

    // ACCIONES DE BOTONES
    if (!empty($_POST['accion'])) {
        $accion = $_POST['accion'];

        switch ($accion) {
            case 'insertar':
                foreach ($Personas as $Persona) {
                    $SQL_Insert = "INSERT INTO persona (nombre, apellido, correo)
                                   VALUES ('{$Persona['nombre']}', '{$Persona['apellido']}','{$Persona['correo']}')";
                    mysqli_query($linkConexion, $SQL_Insert);
                }
                echo '<p>Se han insertado las personas correctamente.</p>';
                break;

            case 'eliminar_todo':
                mysqli_query($linkConexion, 'DELETE FROM persona');
                mysqli_query($linkConexion, 'ALTER TABLE persona AUTO_INCREMENT = 1');
                echo '<p>Se ha eliminado todo el contenido de la tabla persona.</p>';
                break;

            case 'listado_general':
                $rs = mysqli_query($linkConexion, "SELECT * FROM persona ORDER BY id");
                while ($fila = mysqli_fetch_assoc($rs)) {
                    $Listado[] = $fila;
                }
                break;

            case 'apellido_g':
                $rs = mysqli_query($linkConexion, "SELECT * FROM persona WHERE apellido LIKE 'G%' ORDER BY UPPER(apellido), nombre ASC");
                while ($fila = mysqli_fetch_assoc($rs)) {
                    $Listado[] = $fila;
                }
                break;

            case 'nombre_a':
                $rs = mysqli_query($linkConexion, "SELECT * FROM persona WHERE UPPER(nombre) LIKE '%A%' ORDER BY id");
                while ($fila = mysqli_fetch_assoc($rs)) {
                    $Listado[] = $fila;
                }
                break;
        }
    }

    // Eliminación individual por GET
    if (!empty($_GET['codigo'])) {
        $codigo = intval($_GET['codigo']);
        mysqli_query($linkConexion, "DELETE FROM persona WHERE id = $codigo");
        echo "<p>Se ha borrado la persona con ID $codigo</p>";
    }
} catch (mysqli_sql_exception $e) {
    echo '<h3>Error en la base de datos</h3><p>' . $e->getMessage() . '</p>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Personas</title>
</head>

<body>
    <h2>Gestión de Personas</h2>

    <!-- BOTONES DE ACCIÓN -->
    <form method="post">
        <button type="submit" name="accion" value="insertar">Insertar todas las personas</button>
        <button type="submit" name="accion" value="eliminar_todo" onclick="return confirm('¿Está seguro que desea eliminar todo?');">Eliminar todo</button>
        <button type="submit" name="accion" value="listado_general">Listado general</button>
        <button type="submit" name="accion" value="apellido_g">Apellidos que empiezan con "G"</button>
        <button type="submit" name="accion" value="nombre_a">Nombres que contienen "A"</button>
    </form>

    <hr>

    <!-- LISTADO DE PERSONAS -->
    <?php if (!empty($Listado)): ?>
        <h3>Listado de personas</h3>
        <?php foreach ($Listado as $persona): ?>
            <p>
                ID: <?= $persona['id']; ?> |
                Nombre: <?= $persona['nombre']; ?> |
                Apellido: <?= $persona['apellido']; ?> |
                Correo: <?= $persona['correo']; ?> |
                <a href="?codigo=<?= $persona['id']; ?>" onclick="return confirm('¿Está seguro de eliminar esta persona?');">&#10132; Eliminar</a>
            </p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay personas que mostrar.</p>
    <?php endif; ?>

</body>

</html>
