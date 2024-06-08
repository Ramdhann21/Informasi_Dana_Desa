<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $total = htmlspecialchars($_POST['total']);

    // Query untuk memasukkan data menggunakan prepared statements
    $stmt = $conn->prepare("INSERT INTO data (Nama, Keperluan, Tanggal, Dana_Masuk, Dana_Keluar, Total, Tujuan) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiis", $nama, $keperluan, $tanggal, $dana_masuk, $dana_keluar, $total, $tujuan);

    if ($stmt->execute()) {
        header('Location: Laporan.php'); // Redirect ke halaman tabel
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
