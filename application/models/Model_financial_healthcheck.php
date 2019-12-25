<?php
class Model_financial_healthcheck extends CI_Model{

	public function inputDataFinancialHealthCheck($data,$table) 
	  {
	    $this->db->insert($table, $data);
	  }

	public function queryDataFinancial() 
	  {
	  	$query=$this->db->get('financial_health');
       	return $query->result();
	  }

	public function queryDataFinancialResult() 
	  {
	  	$query=$this->db->query("SELECT * FROM financial_health_result ORDER BY id DESC LIMIT 1");
    	return $query->result();
	  }

	public function queryDataKeterangan() 
	  {
	  	$query=$this->db->get('keterangan');
       	return $query->result();
	  }

}
?>