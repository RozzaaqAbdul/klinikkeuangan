<?php
class Model_danapendidikan extends CI_Model{

	public function inputDataPendidikan($data,$table) {
	    $this->db->insert($table, $data);
	  }

	public function tampilDataPendidikan() {
    	$query=$this->db->query("SELECT * FROM dana_pendidikan_result ORDER BY id DESC LIMIT 1");
    	return $query->result();

	}

}
?>