<?php
$servername = "localhost"; // Ganti sesuai dengan konfigurasi server Anda
$username = "root";
$password = "root";
$dbname = "film";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
