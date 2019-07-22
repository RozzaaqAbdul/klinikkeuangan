<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model(array('m_asuransi'));

		$this->data["total"] = $this->m_asuransi->total(array('count'=>1,'search'=>$this->input->get('search')));
		$this->data['asuransi'] = $this->m_asuransi->get(array('limit'=>$this->config->item('per_page')));

		//check input data
		if ($this->input->post('var_a')) {
			$var_a = $this->input->post('var_a');
			$var_b = $this->input->post('var_b');
			$var_c = $this->input->post('var_c');
			$var_a_c = (int)$var_a + (int)$var_c;
			$var_x = (int)$var_b/(float)0.005;
			$total = $var_x - $var_a_c;
			$newdata = array(
				'A'  	=> $var_a,
				'B'  	=> $var_b,
				'C'  	=> $var_c,
				'total'		=> $total
			);
			$this->session->set_userdata($newdata);	
			redirect(site_url('result'), 'location');
		}
		$this->load->view('welcome_message', $this->data);
	}
}
