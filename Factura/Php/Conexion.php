<?php
$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "facturacion"; 

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Cerrar la conexión (opcional, se cerrará automáticamente al final del script)
$conn->close();
?>
