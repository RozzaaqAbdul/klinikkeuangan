<?php
class Model_investasi_sedang extends CI_Model{

	public function inputInvestasiSedang($data,$table) {
	  $this->db->insert($table, $data);
	}

	public function tampilInvestasi($age) {
    	$query=$this->db->query("SELECT * FROM investasi_pensiun_sedang WHERE age = ".$age);
    	return $query->result();
	}

}
?>