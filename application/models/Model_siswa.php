<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

    public function save_siswa($table, $insert)
    {
        $this->db->insert($table, $insert);     
    }

    public function check_data_diri()
    {
        return $this->db->from('table_siswa')->where('id_user', $this->session->userdata('id_user'))->get()->num_rows();   
    }

    public function no_registrasi()
    {
     $this->db->select('RIGHT(table_siswa.no_registrasi,2) as no_registrasi', FALSE);
     $this->db->order_by('no_registrasi','DESC');    
     $this->db->limit(1);    
     $query = $this->db->get('table_siswa');  //cek dulu apakah ada sudah ada kode di tabel.    
     if($query->num_rows() > 0){      
          //cek kode jika telah tersedia    
          $data = $query->row();      
          $kode = intval($data->no_registrasi) + 1; 
     }
     else{      
          $kode = 1;  //cek jika kode belum terdapat pada table
     }
         $tgl=date('dmY'); 
         $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
         $kodetampil = ""."5".$tgl.$batas;  //format kode
         return $kodetampil;  
    }
    public function details_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get('table_siswa')->row_array();
    }

    public function get_profil_siswa()
    {
        $this->db->from('table_siswa');
        $this->db->where('id_user',$this->session->userdata('id_user'));
        return $this->db->get()->row_array();
    }
    public function save_pendaftaran($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function check_nik($nik)
    {
        $this->db->select('nik');
        $this->db->from('table_siswa');
        $this->db->where('nik', $nik);
        return $this->db->get()->num_rows();
        
    }

    public function find_data($table, $referency, $id)
    {
        $this->db->from($table);
        $this->db->where($referency, $id);
        return $this->db->get();
        
        
        
    }
    

}

/* End of file ModelName.php */


?>