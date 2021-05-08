<?php
class M_matkul extends CI_Model
{
  function TampilMatkul()
  {
    $query = $this->db->query('SELECT matkul.*, dosen.nama_dosen FROM matkul as matkul INNER JOIN dosen AS dosen ON matkul.id_dosen = dosen.id_dosen ORDER BY matkul.id_matkul ASC');
    return $query->result();
  }

  function GetID_matkul($id_matkul = '')
  {
    return $this->db->get_where('matkul', array('id_matkul' => $id_matkul))->row();
  }
  function HapusMatkul($id_matkul)
  {
    $this->db->delete('matkul', array('id_matkul' => $id_matkul));
  }
}
