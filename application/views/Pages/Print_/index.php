<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan obat</title>
</head>
<body>
    <h3><center>obat</center></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Kategori Obat</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data as $value) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $value['nama_obat'] ?></td>
                        <td><?= $value['jenis_obat'] ?></td>
                        <td><?= $value['kategori_obat'] ?></td>
                        <td><?= $value['harga'] ?></td>
                        <td><?= $value['stok'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>