<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_dosen');
    }

    function index()
    {
        $data['hasil'] = $this->M_dosen->TampilDosen();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_dosen', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambah_dosen');
        $this->load->view('template/footer');
    }

    function simpan_dosen()
    {
        $data = array(
            'id_dosen' => $this->input->post('id_dosen'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'tlp' => $this->input->post('tlp'),
            'jabatan' => $this->input->post('jabatan')
        );
        $this->db->insert('dosen', $data);
        redirect('index.php/dosen/index');
    }

    function update($id_dosen)
    {
        $data['ambil'] = $this->M_dosen->GetID_dosen($id_dosen);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_update_dosen', $data);
        $this->load->view('template/footer');
    }

    function simpan_update()
    {
        $data = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'tlp' => $this->input->post('tlp'),
            'jabatan' => $this->input->post('jabatan')
        );
        $id_dosen = $this->input->post('id_dosen');
        $this->db->where('id_dosen', $id_dosen);
        $this->db->update('dosen', $data);
        redirect('index.php/dosen');
    }

    function hapus($id_dosen)
    {
        $this->M_dosen->HapusDosen($id_dosen);
        redirect('index.php/dosen');
    }
}
