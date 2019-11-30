<?php
$mysqli = new mysqli("localhost", "root", "", "data_mahasiswa");

class siswa
{
    public $koneksi;
    function __construct($mysqli)
    {
        $this->koneksi = $mysqli;
    }
    function tampil_data()
    {
        $ambildata = $this->koneksi->query("select * from mahasiswa");
        while ($pecah = $ambildata->fetch_assoc()) {
            $data[] = $pecah;
        }
        return $data;
    }
    function tambah_data($nrp, $nama, $jurusan, $foto)
    {
        // INSERT INTO mahasiswa(id_mhs, NRP, nama, id_jurusan, foto) VALUES (' ','$nrp','$nama','$jurusan','$namafoto')
        // insert into siswa (nama,alamat,foto) values ('$nama','$alamat','$namafoto')
        $namafoto = $foto['name'];
        $lokasifoto = $foto['tmp_name'];
        move_uploaded_file($lokasifoto, "img/$namafoto");
        $this->koneksi->query("INSERT INTO `mahasiswa`(`id_mhs`, `NRP`, `nama`, `nama_jurusan`, `foto`) VALUES (' ','$nrp','$nama','$jurusan','$namafoto')");
    }
    function hapus($id)
    {
        $hapus = $this->koneksi->query("DELETE FROM mahasiswa WHERE mahasiswa.NRP = $id");
        return $hapus;
    }

    function search($query)
    {
        $ambildata = $this->koneksi->query("SELECT * FROM `mahasiswa` WHERE NRP LIKE '%$query%'");
        while ($pecah = $ambildata->fetch_assoc()) {
            $data[] = $pecah;
        }
        return $data;
    }
    function update($nrp, $nama, $jurusan, $foto, $id)
    {
        $namafoto = $foto['name'];
        $lokasifoto = $foto['tmp_name'];
        move_uploaded_file($lokasifoto, "pertemuan-9/tugas/img/$namafoto");

        $this->koneksi->query("UPDATE mahasiswa SET id_mhs = '$id', NRP='$nrp' ,nama= '$nama',jurusan='$jurusan',foto='$namafoto' WHERE id_siswa = '$id'");
    }
    function jurusan()
    {
        $ambildata = $this->koneksi->query("select * from jurusan");
        while ($pecah = $ambildata->fetch_assoc()) {
            $data[] = $pecah;
        }
        return $data;
    }
}
$siswa = new siswa($mysqli);
