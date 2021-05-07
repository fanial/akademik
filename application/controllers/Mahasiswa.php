<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	function index()
	{
		$data['hasil'] = $this->m_mahasiswa->TampilMahasiswa();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_tambah_mahasiswa');
		$this->load->view('template/footer');
	}

	function simpan_mahasiswa()
	{
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tanggal_lhr' => $this->input->post('tanggal_lhr'),
			'jurusan' => $this->input->post('jurusan'),
			'umur' => $this->input->post('umur')
		);
		$this->db->insert('mahasiswa', $data);
		redirect('index.php/mahasiswa/index');
	}

	function update($nik)
	{
		$data['ambil'] = $this->m_mahasiswa->GetNik($nik);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_update_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	function simpan_update()
	{
		$data = array(

			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tanggal_lhr' => $this->input->post('tanggal_lhr'),
			'jurusan' => $this->input->post('jurusan'),
			'umur' => $this->input->post('umur')
		);
		$nik = $this->input->post('nik');
		$this->db->where('nik', $nik);
		$this->db->update('mahasiswa', $data);
		redirect('index.php/mahasiswa');
	}

	function hapus($nik)
	{
		$this->m_mahasiswa->HapusMahasiswa($nik);
		redirect('index.php/mahasiswa');
	}

	function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}
}
