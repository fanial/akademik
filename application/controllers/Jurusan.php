<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('jurusan_model');

    }

	function index()
	{
		$data['hasil']=$this->jurusan_model->TampilJurusan();
			$this->load->view('v_jurusan',$data);
	}
	
	function tambah()
		{
			$this->load->view('v_tambah_jurusan'); 
		}
	
	function simpan_jurusan()
    {
        $data = array(
            'id_jurusan'=>$this->input->post('id_jurusan'),
			'kode_jurusan'=>$this->input->post('kode_jurusan'),
			'nama_jurusan'=>$this->input->post('nama_jurusan'),
            'kaprodi'=>$this->input->post('kaprodi')
        );
        $this->db->insert('jurusan',$data);
        redirect('jurusan/index');
	}

	function update($id_jurusan)
    {
        $data['ambil']=$this->jurusan_model->GetId_jurusan($id_jurusan);
        $this->load->view('v_update_jurusan',$data);
	}
	
    function simpan_update()
    {
        $data = array(
        
            'kode_jurusan'=>$this->input->post('kode_jurusan'),
			'nama_jurusan'=>$this->input->post('nama_jurusan'),
            'kaprodi'=>$this->input->post('kaprodi')
		);
		$id_jurusan = $this->input->post('id_jurusan');
		$this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('jurusan',$data);
        redirect('jurusan');
	}

	function hapus($id_jurusan)
    {
        $this->jurusan_model->HapusJurusan($id_jurusan);
        redirect('jurusan');
    }
}
?>