<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_connection.php';

    $id_cliente = $_POST["id_cliente"];

    $conn = establecer_conexion();
    // Consulta para obtener el registro con el ID proporcionado
    $sql = "EXEC pa_buscarid @id_cliente=?";
    $params = array($id_cliente);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        // Se encontró un registro, mostrar el formulario para actualizar
        echo "<h1>Actualizar Registro</h1>";
        echo "<form action='process_update_form.php' method='post'>";
        echo "ID del cliente: <input type='text' name='id_cliente' value='" . $row['id_cliente'] . "' readonly><br>";
        echo "Nombre: <input type='text' name='name' value='" . $row['name'] . "'><br>";
        echo "Apellido: <input type='text' name='lastname' value='" . $row['lastname'] . "'><br>";
        echo "Dirección: <input type='text' name='address' value='" . $row['address'] . "'><br>";
        echo "Celular: <input type='text' name='cell' value='" . $row['cell'] . "'><br>";
        echo "<input type='submit' value='Actualizar'>";
        echo "</form>";
    } else {
        echo "No se encontró un registro con el ID proporcionado.";
    }
    sqlsrv_close($conn);
}
?>
