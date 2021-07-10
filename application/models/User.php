<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User extends CI_Model {
	public $table="table_berita";
	var $column_order=[null,'id_berita','judul','isi','image','kategori','tanggal'];
	var $column_search=['id_berita','judul','isi','image','kategori','tanggal'];
	var $order=['id_berita'=>'desc'];
	public $id='id_berita';             
						
	public function get_datatables_query($post)
	{
        $this->db->from($this->table);
		
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($post['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $post['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $post['search']['value']);
				}
				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($post['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$post['order']['0']['column']], $post['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables($post)
	{
		$this->get_datatables_query($post);
		if($post['length'] != -1)
		$this->db->limit($post['length'], $post['start']);
		$query = $this->db->get();
		return $query->result();
	}
	function count_filtered($post)
	{
		$this->get_datatables_query($post);
		return $this->db->get()->num_rows();
	}

	public function count_all($post)
	{
		
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}
                        
/* End of file User.php */
    
                        