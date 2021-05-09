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
		$this->load->model('M_mahasiswa');
	}

	function index()
	{
		$data['hasil'] = $this->M_mahasiswa->TampilMahasiswa();
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
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tanggal_lhr' => $this->input->post('tanggal_lhr'),
			'jurusan' => $this->input->post('jurusan'),
			'umur' => $this->input->post('umur')
		);
		$this->db->insert('mahasiswa', $data);
		redirect('index.php/mahasiswa/index');
	}

	function update($nim)
	{
		$data['ambil'] = $this->M_mahasiswa->GetNim($nim);
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
		$nim = $this->input->post('nim');
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
		redirect('index.php/mahasiswa');
	}

	function hapus($nim)
	{
		$this->M_mahasiswa->HapusMahasiswa($nim);
		redirect('index.php/mahasiswa');
	}
}
