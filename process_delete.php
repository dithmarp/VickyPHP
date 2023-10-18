<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_connection.php';

    $id_cliente = $_POST["id_cliente"];

    $conn = establecer_conexion();
    // Realiza la eliminación en la base de datos
    $sql = "EXEC pa_borrar @id_cliente=?";
    $params = array($id_cliente);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro.";
    }

    sqlsrv_close($conn);
}
?>
