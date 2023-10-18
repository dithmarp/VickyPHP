<?php
$serverName = "tcp:softwarevil.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "sqldatabase",
    "Uid" => "Administrador",
    "PWD" => "Vilma23Patito24",
    "LoginTimeout" => 30,
    "Encrypt" => 1,
    "TrustServerCertificate" => 0,
    "CharacterSet" => 'UTF-8',
);

function establecer_conexion() {
    global $serverName, $connectionOptions;
    
    try {
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        return $conn;
    } catch (Exception $e) {
        return null;
    }
}
?>
