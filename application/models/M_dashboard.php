<?php
class M_dashboard extends CI_Model
{
    function hitungMahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function hitungDosen()
    {
        $query = $this->db->get('dosen');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function hitungJurusan()
    {
        $query = $this->db->get('jurusan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function hitungMatkul()
    {
        $query = $this->db->get('matkul');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
