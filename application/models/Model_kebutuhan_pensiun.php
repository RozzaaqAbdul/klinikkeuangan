<?php
class Model_kebutuhan_pensiun extends CI_Model{

	public function inputKebutuhanPensiun($data,$table) {
	  $this->db->insert($table, $data);
	}

	public function tampilKebutuhan($age) {
    	$query=$this->db->query("SELECT * FROM kebutuhan_pensiun WHERE age = ".$age);
    	return $query->result();
	}

}
?>