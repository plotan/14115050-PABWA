<?php
class Home extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
        $this->load->library('form_validation');
    }
	public function index()
    {
		$data['judul'] = "halaman home";
        $data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view("templates/header", $data);
		$this->load->view("home/index", $data);
		$this->load->view("templates/footer");
    }
}
