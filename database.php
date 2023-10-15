<?php
$host = 'databasecrud.mysql.database.azure.com';
$username = 'Administrador';
$password = 'Virtual23';
$dbname = 'databasecrud';

$mysqli = mysqli_init();
$ssl_ca = 'DigiCertGlobalRootCA.crt.pem'; // Ruta al certificado SSL que descargaste desde Azure

$mysqli->ssl_set(NULL, NULL, $ssl_ca, NULL, NULL);
$mysqli->real_connect($host, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

if ($mysqli->connect_errno) {
    die("Error en la conexión: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
} else {
    
}
?>