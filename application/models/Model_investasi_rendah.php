<?php
class Model_investasi_rendah extends CI_Model{

	public function inputInvestasiRendah($data,$table) {
	  $this->db->insert($table, $data);
	}

	public function tampilInvestasi($age) {
    	$query=$this->db->query("SELECT * FROM investasi_pensiun_rendah WHERE age = ".$age);
    	return $query->result();
	}

}
?>