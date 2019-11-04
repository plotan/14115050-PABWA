<?php 
include 'class.php';

$action = $_GET['action'];
if($action == "update"){
    $siswa->update_siswa($_POST['nama'],$_POST['alamat'],$_FILES['foto']);
	header('location:tampilsiswa.php');
} elseif($action == "delete"){
    $siswa->del_siswa($_GET['nama']);
    header('location:tampilsiswa.php');
}
?>