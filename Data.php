<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $keperluan = htmlspecialchars($_POST['keperluan']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $dana_masuk = htmlspecialchars($_POST['dana_masuk']);
    $dana_keluar = htmlspecialchars($_POST['dana_keluar']);
    $total = htmlspecialchars($_POST['total']);
    $tujuan = htmlspecialchars($_POST['tujuan']);

    // Query untuk memasukkan data menggunakan prepared statements
    $stmt = $conn->prepare("INSERT INTO data (Nama, Keperluan, Tanggal, Dana_Masuk, Dana_Keluar, Total, Tujuan) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiis", $nama, $keperluan, $tanggal, $dana_masuk, $dana_keluar, $total, $tujuan);

    if ($stmt->execute()) {
        header('Location: tabel.php'); // Redirect ke halaman tabel
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
