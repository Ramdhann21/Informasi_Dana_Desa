<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "danadesa";
// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Fungsi untuk menjalankan query dan mengembalikan hasil
function query($sql) {
    global $conn;
    $result = $conn->query($sql);
    $rows = [];
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
?>
