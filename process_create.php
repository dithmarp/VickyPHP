<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_connection.php';

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $cell = $_POST["cell"];

    $conn = establecer_conexion();
    // Realiza la inserción en la base de datos
    $sql = "EXEC pa_registrar @name=?, @lastname=?, @address=?, @cell=?";
    $params = array($name, $lastname, $address, $cell);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "Registro creado con éxito.";
    } else {
        echo "Error al crear el registro.";
    }

    sqlsrv_close($conn);
}
?>
