<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function get_user()
    {
        $this->db->from('table_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result_array();
        
	}
    public function delete_admin($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('table_user');
           
    }
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('table_siswa');
    }

    public function add_admin($data)
    {
        $this->db->insert('table_user', $data);
    }
    public function get_siswa()
    {
        $this->db->from('table_siswa');
        $this->db->order_by('id_siswa', 'desc');
        // $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get()->result_array();
    }
    
    public function details_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get('table_siswa')->row_array();
    }

    public function save_jadwal($table, $data)
    {
        $this->db->insert($table, $data);
        
    }
}
    
  

/* End of file ModelName.php */


?>