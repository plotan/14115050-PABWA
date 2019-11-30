<?php
require 'functions.php';
$mahasiswa = $siswa->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($mahasiswa as $key) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $key["NRP"] ?></td>
                    <td><?= $key["nama"] ?></td>
                    <td><?= $key["nama_jurusan"] ?></td>
                    <td><img src="img/<?= $key["foto"] ?>" alt="" width="50px"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>

</html>