<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query untuk menghapus data berdasarkan ID
    $stmt = $conn->prepare("DELETE FROM data WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header('Location: tabel.php'); // Redirect ke halaman tabel setelah menghapus data
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    header('Location: tabel.php'); // Redirect jika tidak ada ID yang diterima
}
?>
