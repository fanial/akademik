<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{

  function __construct()
  {
      parent::__construct();
      $this->load->model('M_matkul');
  }

  function index()
  {
      $data['hasil'] = $this->M_matkul->TampilMatkul();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('v_matkul', $data);
      $this->load->view('template/footer');
  }

  function tambah()
  {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('v_tambah_matkul');
      $this->load->view('template/footer');
  }

  function simpan_matkul()
  {
      $data = array(
          'id_matkul' => $this->input->post('id_matkul'),
          'matkul' => $this->input->post('matkul'),
          'waktu' => $this->input->post('waktu'),
          'id_dosen' => $this->input->post('id_dosen'),
          'jurusan' => $this->input->post('jurusan')
      );

      $this->db->insert('matkul', $data);
      redirect('index.php/matkul/index');
  }

    function update($id_matkul)
	{
		$data['ambil'] = $this->M_matkul->GetID_matkul($id_matkul);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_update_matkul', $data);
		$this->load->view('template/footer');
	}

	function simpan_update()
	{
		$data = array(
			'matkul' => $this->input->post('matkul'),
			'waktu' => $this->input->post('waktu'),
			'id_dosen' => $this->input->post('id_dosen'),
			'jurusan' => $this->input->post('jurusan'),
		);
		$id_matkul = $this->input->post('id_matkul');
		$this->db->where('id_matkul', $id_matkul);
		$this->db->update('matkul', $data);
		redirect('index.php/matkul');
	}

	function hapus($id_matkul)
	{
		$this->M_matkul->HapusMatkul($id_matkul);
		redirect('index.php/matkul');
	}

  }
