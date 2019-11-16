<?php
class Mahasiswa extends CI_Controller{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->database();
	// } jika satu satu bisa juga di load di autoload libraries

	public function index(){
		$this->load->model("Mahasiswa_model");
		$data['judul'] = "Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view("templates/header", $data);
		$this->load->view("mahasiswa/index");
		$this->load->view("templates/footer");
	}
}
 ?>
