<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jurusan');
    }

    function index()
    {
        $data['hasil'] = $this->M_jurusan->TampilJurusan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_jurusan', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambah_jurusan');
        $this->load->view('template/footer');
    }

    function simpan_jurusan()
    {
        $data = array(
            'id_jurusan' => $this->input->post('id_jurusan'),
            'kode_jurusan' => $this->input->post('kode_jurusan'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'kaprodi' => $this->input->post('kaprodi')
        );
        $this->db->insert('jurusan', $data);
        redirect('index.php/jurusan/index');
    }

    function update($id_jurusan)
    {
        $data['ambil'] = $this->M_jurusan->GetId_jurusan($id_jurusan);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_update_jurusan', $data);
        $this->load->view('template/footer');
    }

    function simpan_update()
    {
        $data = array(

            'kode_jurusan' => $this->input->post('kode_jurusan'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'kaprodi' => $this->input->post('kaprodi')
        );
        $id_jurusan = $this->input->post('id_jurusan');
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('jurusan', $data);
        redirect('index.php/jurusan');
    }

    function hapus($id_jurusan)
    {
        $this->M_jurusan->HapusJurusan($id_jurusan);
        redirect('index.php/jurusan');
    }
}
