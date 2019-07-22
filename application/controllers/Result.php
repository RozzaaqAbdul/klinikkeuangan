<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {
	public function index()
	{
		$this->load->model(array('m_financial_health', 'm_keterangan'));

		$this->data["total_financial"] = $this->m_financial_health->total(array('count'=>1,'search'=>$this->input->get('search')));
		$this->data['financial_health'] = $this->m_financial_health->get(array('limit'=>$this->config->item('per_page')));
		$this->data["total_keterangan"] = $this->m_keterangan->total(array('count'=>1,'search'=>$this->input->get('search')));
		$this->data['keterangan'] = $this->m_keterangan->get(array('limit'=>$this->config->item('per_page')));
		$this->load->view('result', $this->data);
	}
}