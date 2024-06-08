<?php
require 'koneksi.php';
// Mendapatkan ID dari URL
$id = $_GET['id'];
// Mendapatkan data berdasarkan ID
$data = query("SELECT * FROM data WHERE id = $id")[0];
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $keperluan = $_POST['keperluan'];
    $tanggal = $_POST['tanggal'];
    $dana_masuk = $_POST['dana_masuk'];
    $dana_keluar = $_POST['dana_keluar'];
    $total = $_POST['total'];
    $tujuan = $_POST['tujuan'];
    // Query untuk mengupdate data
    $sql = "UPDATE data SET
                Nama = '$nama',
                Keperluan = '$keperluan',
                Tanggal = '$tanggal',
                Dana_Masuk = '$dana_masuk',
                Dana_Keluar = '$dana_keluar',
                Total = '$total',
                Tujuan = '$tujuan'
            WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header('Location: tabel.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Konten head yang sesuai -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dana Masuk</title>
    <!-- Custom fonts for this template-->
    <link href="Data/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link   href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="Data/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="container">
        <h2>Edit Data</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['Nama'] ?>">
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan:</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $data['Keperluan'] ?>">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['Tanggal'] ?>">
            </div>
            <div class="form-group">
                <label for="dana_masuk">Dana Masuk:</label>
                <input type="number" class="form-control" id="dana_masuk" name="dana_masuk" value="<?= $data['Dana_Masuk'] ?>">
            </div>
            <div class="form-group">
                <label for="dana_keluar">Dana Keluar:</label>
                <input type="number" class="form-control" id="dana_keluar" name="dana_keluar" value="<?= $data['Dana_Keluar'] ?>">
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" class="form-control" id="total" name="total" value="<?= $data['Total'] ?>">
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan:</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?= $data['Tujuan'] ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
  </div>
</div>
</body>
</html>
