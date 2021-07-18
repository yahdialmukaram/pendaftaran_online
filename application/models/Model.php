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

    public function get_pendaftaran_siswa()
    {
        $this->db->select('*');
        $this->db->from('table_sekolah');
        $this->db->order_by('id_sekolah', 'desc');
        $this->db->join('table_siswa', 'table_sekolah.id_user = table_siswa.id_user', 'left');
        // $this->db->where('table_sekolah.id_user',$this->session->userdata('id_user'));
    
        return $this->db->get()->result_array();        
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
    public function check_kuata(Type $var = null)
    {
        $this->db->from('table_jadwal');
        // $this->db->where('kouta', $Value);
        
        return $this->db->get()->result_array();
        
    }
    public function update_jadwal($id_jadwal,$object)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update('table_jadwal', $object);
        
    }
    public function ambil_jadwal($id_jadwal)
    {
        $this->db->from('table_jadwal');
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->limit(1);
        return $this->db->get()->row_array();
        
    }
    public function ambil_nama($id)
    {
        // $this->db->select('id_siswa');
        $this->db->from('table_siswa');
        $this->db->where('id_siswa', $id);
        $this->db->limit(1);
        return $this->db->get()->row_array();
        
    }
        
    public function check_user($id_user)
    {
        $this->db->select('id_user');
        $this->db->from('table_sekolah');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->num_rows();
        
    }

    public function check_number($id_user)
    {
        $this->db->from('table_siswa');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->row_array();
        
    }
    public function get_jadwal(Type $var = null)
    {
        $this->db->from('table_jadwal');
        $this->db->order_by('id_jadwal', 'asc');
        return $this->db->get()->result_array();
        
    }
    public function get_nilai(Type $var = null)
    {
        $this->db->from('table_nilai');
        $this->db->order_by('nilai_akhir', 'desc');
        $this->db->join('table_siswa', 'table_siswa.id_user = table_nilai.id_user', 'left');  
         
        return $this->db->get()->result_array();
        
        
    }
    public function save_nilai($table, $object)
    {
        $this->db->insert($table, $object);
        
    }

    public function check_id_user($id_user)
    {
        $this->db->select('id_user');
        $this->db->from('table_nilai');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->num_rows();
        
    }
    public function get_saran(Type $var = null)
    {
        $this->db->from('table_saran');
        $this->db->order_by('id_saran', 'desc');
      return  $this->db->get()->result_array();
        
    }
    public function delete_saran($id)
    {
        $this->db->where('id_saran', $id);
        $this->db->delete('table_saran');
        
    }

  
}
    
  

/* End of file ModelName.php */


?>