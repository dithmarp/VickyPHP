<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_connection.php';

    $id_cliente = $_POST["id_cliente"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $cell = $_POST["cell"];

    $conn = establecer_conexion();
    // Realiza la actualización en la base de datos
    $sql = "EXEC pa_actualizar @id_cliente=?, @name=?, @lastname=?, @address=?, @cell=?";
    $params = array($id_cliente, $name, $lastname, $address, $cell);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro.";
    }

    sqlsrv_close($conn);
}
?>
