<?php
require 'functions.php';
$jurusan = $siswa->jurusan();
if (isset($_POST["submit"])) {
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $foto = $_FILES['foto'];
    $siswa->tambah_data($nrp, $nama, $jurusan, $foto);
    echo "<script>alert('Data berhasil ditambah !!');
        document.location.href = 'view.php';
        </script>";
}
if (isset($_POST["hapus"])) {
    $data = $_POST["nrp"];
    $siswa->hapus($data);
    echo "<script>alert('Data berhasil dihapus !!');
        document.location.href = 'view.php';
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <style>
        div {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h3>TAMBAH DATA</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">NRP : </label>
            <input type="text" name="nrp" id="nrp">
        </div>
        <div>
            <label for="">Nama : </label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="">Jurusan : </label>
            <select name="jurusan" id="jurusan">
                <?php
                foreach ($jurusan as $key => $value) {
                    ?>
                    <option value=<?= $value["nama_jurusan"]; ?>><?= $value["nama_jurusan"]; ?></option>
                <?php } ?>
            </select>
            <div>
                <label for="">Foto : </label>
                <input type="file" name="foto" id="foto">
            </div>
        </div>
        <button style="margin-top:30px;" type="submit" name="submit">Tambah</button>
    </form>
    ======================================
    <h3>SEARCH DATA</h3>
    <form action="search.php" method="POST">
        <div>
            <label for="">Nrp : </label>
            <input type="text" name="nrp" id="nrp">
            <button type="submit" name="cari" id="cari">Cari data</button>
        </div>
    </form>
    ======================================
    <h3>HAPUS DATA</h3>
    <form action="" method="POST">
        <div>
            <label for="">Nrp : </label>
            <input type="text" name="nrp" id="nrp">
            <button type="submit" name="hapus" id="hapus">Hapus data</button>
        </div>
    </form>
</body>

</html>