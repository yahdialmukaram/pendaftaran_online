<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

   public function save_saran($table, $insert)
   {
       $this->db->insert('table_saran', $insert);
       
   }
    

}

/* End of file ModelName.php */


?>