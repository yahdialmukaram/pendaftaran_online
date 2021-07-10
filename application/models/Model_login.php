<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model 
{	
	// public function cek_login($table,$where)
	// {		
	// 	return $this->db->get_where($table,$where);
	// }	

	public function cek_login($email,$password)
    {
        $this->db->from('table_user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get();
    }

    // public function registrasi($data)
    // {
    //     $this->db->insert('table_user', $data);
    // }

    public function registrasi_user($data)
	{
		$this->db->insert('table_user',$data);
	}
    public function check_email($email)
    {
        $this->db->select('email');
        $this->db->from('table_user');
        $this->db->where('email', $email);
        return $this->db->get()->num_rows();    
    }
    
}

/* End of file ModelName.php */
