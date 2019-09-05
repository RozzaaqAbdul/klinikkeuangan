<?php
class M_financial extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'financial_health';
    }

	function get($options = array())
	{
		$qualificationArray = array('id','question','variable_1','variable_2','variable_3','variable_4','value_1','value_2','value_3','value_4');
		if (isset($options['search'])) {
			$this->db->where("(question like '%".$options['search']."%')" );
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
		
		if(isset($options['id']) ){
			return $query->row(0);
		}else{
			return $query->result();
		}
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

	//Datatable function fetch_array data
	function filter($search, $limit, $start, $order_field, $order_ascdesc){
		$this->db->or_like('question', $search);
		$this->db->or_like('variable_1', $search);
		$this->db->or_like('variable_2', $search);
		$this->db->or_like('variable_3', $search);
		$this->db->or_like('variable_4', $search);
		$this->db->or_like('value_1', $search);
		$this->db->or_like('value_2', $search);
		$this->db->or_like('value_3', $search);
		$this->db->or_like('value_4', $search);
		$this->db->order_by($order_field, $order_ascdesc);
		$this->db->limit($limit, $start);
		return $this->db->get('financial_health')->result_array();
	}
	
	function count_all(){
		return $this->db->count_all('financial_health');
	}

	public function count_filter($search){
		$this->db->or_like('question', $search);
		$this->db->or_like('variable_1', $search);
		$this->db->or_like('variable_2', $search);
		$this->db->or_like('variable_3', $search);
		$this->db->or_like('variable_4', $search);
		$this->db->or_like('value_1', $search);
		$this->db->or_like('value_2', $search);
		$this->db->or_like('value_3', $search);
		$this->db->or_like('value_4', $search); 
		return $this->db->get('financial_health')->num_rows(); 
	}
}