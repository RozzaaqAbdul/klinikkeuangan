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

}
?>