<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>CRUD en PHP</title>
</head>
<body>

    <div class="container">
        <h2>Resultados de la Base de Datos:</h2>

        <?php
        // Crear un registro en la base de datos
        if (isset($_POST['submit'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];

            $sql = "INSERT INTO usuarios (nombre, apellido, direccion, dni, telefono) 
                    VALUES ('$nombre', '$apellido', '$direccion', '$dni', '$telefono')";

            if ($mysqli->query($sql) === TRUE) {
                echo "Registro creado con éxito";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        }

        // Leer registros de la base de datos
        $sql = "SELECT id, nombre, apellido, direccion, dni, telefono FROM usuarios";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="result-container">';
            while ($row = $result->fetch_assoc()) {
                echo "<p>id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " " . $row["apellido"] . " - Dirección: " . $row["direccion"] . " - DNI: " . $row["dni"] . " - Teléfono: " . $row["telefono"] . "</p>";
            }
            echo '</div>';
        } else {
            echo "0 resultados";
        }

        // Eliminar un registro de la base de datos
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM usuarios WHERE id=$id";

            if ($mysqli->query($sql) === TRUE) {
                echo "Registro eliminado con éxito";
            } else {
                echo "Error al eliminar el registro: " . $mysqli->error;
            }
        }

        // Actualizar un registro en la base de datos
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];

            $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', direccion='$direccion', dni='$dni', telefono='$telefono' WHERE id=$id";

            if ($mysqli->query($sql) === TRUE) {
                echo "Registro actualizado con éxito";
            } else {
                echo "Error actualizando el registro: " . $mysqli->error;
            }
        }

        // Consultar un registro en la base de datos por DNI
        
        if (isset($_POST['consultar'])) {
            $dni_consulta = $_POST['dni_consulta'];
    
            $sql = "SELECT * FROM usuarios WHERE dni='$dni_consulta'";
            $result = $mysqli->query($sql);
    
            if ($result->num_rows > 0) {
                echo "<h2>Resultados de la búsqueda por DNI:</h2>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='result-container'>";
                    echo "<p>Nombre: " . $row["nombre"] . "</p>";
                    echo "<p>Apellido: " . $row["apellido"] . "</p>";
                    echo "<p>Dirección: " . $row["direccion"] . "</p>";
                    echo "<p>DNI: " . $row["dni"] . "</p>";
                    echo "<p>Teléfono: " . $row["telefono"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<div class='result-container'>No se encontraron resultados para el DNI especificado.</div>";
            }
        }

        $mysqli->close();
        ?>
    </div>
    <div class="container">
    <a href="index.php" class="back-button">Volver</a>
    </div>
</body>
</html>
