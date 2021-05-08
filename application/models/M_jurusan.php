<?php
class M_jurusan extends CI_Model
{
  function TampilJurusan()
  {
    $this->db->order_by('id_jurusan', 'ASC');
    return $this->db->from('jurusan')
      ->get()
      ->result();
  }

  function GetId_jurusan($id_jurusan = '')
  {
    return $this->db->get_where('jurusan', array('id_jurusan' => $id_jurusan))->row();
  }
  function HapusJurusan($id_jurusan)
  {
    $this->db->delete('jurusan', array('id_jurusan' => $id_jurusan));
  }
}
