<?php
$host = "localhost"; 
$username = "username_db"; 
$password = "password_db"; 
$database = "nama_prakwebdb"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil"; 
}
?>
