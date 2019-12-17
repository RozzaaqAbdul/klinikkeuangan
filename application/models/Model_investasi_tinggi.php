<?php
class Model_investasi_tinggi extends CI_Model{

	public function inputInvestasiTinggi($data,$table) {
	  $this->db->insert($table, $data);
	}

	public function tampilInvestasi($age) {
    	$query=$this->db->query("SELECT * FROM investasi_pensiun_tinggi WHERE age = ".$age);
    	return $query->result();
	}

}
?>