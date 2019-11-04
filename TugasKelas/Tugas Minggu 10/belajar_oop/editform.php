<?php 
include 'class.php';
$nama = $_GET['nama'];
if(! is_null($nama)){
    $datanama = $siswa->getDataByNama($nama);
}else{
	echo "<script>alert('data tidak ada');</script>";
    header('location:tampil_data.php');
}
?>
<h2>Edit Siswa</h2>
<form method="POST" enctype=multipart/form-data>
	<label>Nama</label><br>
	<input type="text" name="nama" value="<?php echo $datanama['nama']?>"><br>
	<label>Alamat</label><br>
	<textarea name="alamat"><?php echo $datanama['alamat']?></textarea><br>
	<label>Foto</label><br>
	<input type="file" name="foto" value="<?php echo $datanama['foto']?>"><br>
	<button type="submit" name="Update">Simpan</button>
</form>
<?php
    if(isset($_POST['Update'])){
        $siswa -> update_siswa($_POST['nama'],$_POST['alamat'],$_FILES['foto']);
        echo "<script>alert('data tersimpan');</script>";
        echo "<script>location='tampilsiswa.php';</script>";
    }
?>