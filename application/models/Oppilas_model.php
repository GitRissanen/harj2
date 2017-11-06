<?php

class Oppilas_model extends CI_Model{

  public function hae_oppilaat(){
    $this->db->select('*');
    $this->db->from('opiskelija');

    return $this->db->get()->result_array();

  }
  public function poista_valittu($id){
    $this->db->where('idOpiskelija',$id);
    $this->db->delete('opiskelija');
  }
  public function lisaa_tietokantaan($data){
    $this->db->set($data);
    $this->db->insert('opiskelija');
  }
}
