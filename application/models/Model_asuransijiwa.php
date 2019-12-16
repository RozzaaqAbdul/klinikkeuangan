<?php
class Model_asuransijiwa extends CI_Model{

	public function inputDataAsuransi($data,$table) {
	    $this->db->insert($table, $data);
	  }

	public function tampilDataAsuransiJiwa() {
		$email=$this->input->get('email');
    	$query=$this->db->query("SELECT * FROM asuransi_jiwa ORDER BY id DESC LIMIT 1");
    	return $query->result();

	}

}
?>