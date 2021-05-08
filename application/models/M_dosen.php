<?php
class M_Dosen extends CI_Model
{
  function TampilDosen()
  {
    $this->db->order_by('id_dosen', 'ASC');
    return $this->db->from('dosen')
      ->get()
      ->result();
  }

  function GetId_dosen($id_dosen = '')
  {
    return $this->db->get_where('dosen', array('id_dosen' => $id_dosen))->row();
  }
  function HapusDosen($id_dosen)
  {
    $this->db->delete('dosen', array('id_dosen' => $id_dosen));
  }
}
