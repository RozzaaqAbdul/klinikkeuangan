<?php
class Model_asuransijiwa extends CI_Model{

	public function inputDataAsuransi($data,$table) 
	  {
	    $this->db->insert($table, $data);
	  }

}
?>