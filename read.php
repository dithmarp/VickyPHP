<!DOCTYPE html>
<html>
<head>
    <title>Leer Registros</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Leer Registros</h1>
    <?php
    require 'db_connection.php';
    $conn = establecer_conexion();
    // Realiza una consulta para obtener registros de la base de datos
    $sql = "EXEC pa_buscar";
    $stmt = sqlsrv_query($conn, $sql);

    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Celular</th></tr>";
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id_cliente'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['cell'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
