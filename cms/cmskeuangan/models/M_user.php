<?php 
class M_user extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->table = 'user';
    }

    function get($options = array())
	{
		$qualificationArray = array('id','status','email', 'nama','password','tipe');
		if (isset($options['search'])) {
			$this->db->where("(email like '%".$options['search']."%' or nama like '%".$options['search']."%')" );
		}else{
			foreach($qualificationArray as $qualifier){
				if(isset($options[$qualifier])) $this->db->where($qualifier, $options[$qualifier]);
			}
		}
	
		if(isset($options['limit']) && isset($options['offset'])) $this->db->limit($options['limit'], $options['offset']);
		else if(isset($options['limit'])) $this->db->limit($options['limit']);
	
		
		if(isset($options['sortBy'])) $this->db->order_by($options['sortBy']);
	
		$query = $this->db->get($this->table);
		if($query->num_rows() == 0) return false;
		
		if(isset($options['user']) || isset($options['id']) ){
			return $query->row(0);
		}else{
			return $query->result();
		}
    }
    
    function total($options = array()){
		$this->db->select('count(*) as total', FALSE);
		$qualificationArray = array('id','status','email', 'nama','password','tipe');
		if(isset($options['search']) && !empty($options['search'])) {
			foreach($qualificationArray as $qualifier){
				$this->db->or_like($this->table.'.'.$qualifier, $options['search']);
			}
		}
		
		if(isset($options['count']) && !empty($options['count'])) {
			foreach($qualificationArray as $qualifier){
				if(isset($options[$qualifier])) $this->db->where($qualifier, $options[$qualifier]);
			}
		}
		$query = $this->db->get($this->table);
		$tot = $query->row(0);
		return $tot->total;
    }

    function count(){
        return $this->db->count_all_results($this->table);
    }
    
	function add($input=array()){
		if(empty($input)) return;
		$this->db->insert($this->table, $input); 
		return $this->db->insert_id();
	}

	function update($id=array(), $input=array()){
		if(empty($id)) return;
		if(empty($input)) return;
		
		foreach($id as $key => $value){
			$this->db->where($key, $value);
		}
		$this->db->update($this->table, $input); 
		return $this->db->affected_rows();
	}

	function delete($id=array()){
		if(empty($id)) return;
		$this->db->delete($this->table, $id); 
	}
}
?>