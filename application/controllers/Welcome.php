<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$data['total_mhs'] = $this->M_dashboard->hitungMahasiswa();
		$data['total_dosen'] = $this->M_dashboard->hitungDosen();
		$data['total_jurusan'] = $this->M_dashboard->hitungJurusan();
		$data['total_matkul'] = $this->M_dashboard->hitungMatkul();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}
