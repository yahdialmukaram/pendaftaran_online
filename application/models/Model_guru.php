<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_guru extends CI_Model {

    public function save_siswa($table, $insert)
    {
        $this->db->insert($table, $insert);     
    }
    public function find_data($table,$reference,$id)
    {
        return $this->db->from($table)->where($reference,$id)->get();
        
    }
    public function update_data($table,$reference,$id,$object)
    {
        $this->db->where($reference, $id)->update($table,$object);
    }

}

/* End of file ModelName.php */


?>