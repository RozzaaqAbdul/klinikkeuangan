<?php
class Model_danapensiun extends CI_Model{

	public function inputDataPensiun($data,$table) {
	    $this->db->insert($table, $data);
	  }

	public function tampilDataPensiun() {
    	$query=$this->db->query("SELECT * FROM dana_pensiun_result ORDER BY id DESC LIMIT 1");
    	return $query->result();

	}

}
?>