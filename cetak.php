<?php

require_once __DIR__ . '/vendor/autoload.php';
// connention
require 'koneksi.php';
// Tabel
$transaction = query("SELECT * FROM data");

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage('L');
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi</title>
    <style>
    h1 {
        color: black; /* Warna hitam untuk kata "Klik" */
    }
    .orange-text {
        color: orange; /* Warna oranye untuk kata "Pajak" */
    }
        body {
            text-align: center;
        }
        table {
            margin: 0 auto;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color : #ddd;
        }
    </style>
</head>
<body>
<h1>Laporan Dana Desa</h1>
    <h2>Data </h2>
    <table border="1" cellpadding="3" cellspacing="0">
         <tr>
             <th>No</th>
             <th>Npwp</th>
             <th>Nama</th>
             <th>Jenis Usaha</th>
             <th>Jenis Pajak</th>
             <th>Alamat</th>
             <th>No Telpon</th>
             <th>Tanggal</th>
             <th>Total</th>
         </tr>';
         $no = 1;
         foreach($transaction as $row) {
            $html .='<tr>
                        <td>'.$no++.'</td>
                        <td>'.$row["Nama"].'</td>
                        <td>'.$row["Keperluan"].'</td>
                        <td>'.$row["Tanggal"].'</td>
                        <td>'.$row["Dana_masuk"].'</td>
                        <td>'.$row["Dana_Keluar"].'</td>
                        <td>Rp. '.number_format($row["total"]).'</td>
                        <td>'.$row["Tujuan"].'</td>
                        
                    </tr>';
;         }
    $html .='</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Laporan Dana Desa.pdf','D');
?>