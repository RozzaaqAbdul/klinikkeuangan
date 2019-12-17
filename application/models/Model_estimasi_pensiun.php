<?php
class Model_estimasi_pensiun extends CI_Model{

	public function inputEstimasiPensiun($data,$table) {
	  $this->db->insert($table, $data);
	}

	public function tampilEstimasi($age) {
    	$query=$this->db->query("SELECT * FROM estimasi_pensiun WHERE age = ".$age);
    	return $query->result();
	}

}
?>