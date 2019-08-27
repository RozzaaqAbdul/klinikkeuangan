<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) redirect(site_url(), 'location');
	}


	public function index()
	{	
		$this->load->model(array('m_financial'));
		$this->load->library('pagination');
		$this->load->config('pagination');

		$this->data["totalFinancial"] = $this->m_financial->total(array('count'=>1,'search'=>$this->input->get('search')));	
		$config['total_rows'] = $this->data["totalFinancial"];
		$config['page_query_string'] = TRUE;

		$config['base_url'] = site_url('financial/index/?search='.$this->input->get('search'));
		$config["uri_segment"] = 3;
		$page = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		$this->pagination->initialize($config); 


		if ($this->input->get('search')) {
			$this->data['financial'] = $this->m_financial->get(array('search'=>$this->input->get('search')));
		}else{
			$this->data['financial'] = $this->m_financial->get(array('limit'=>$this->config->item('per_page'),'offset'=>$page));
		}

        $this->data['include'] = "v_financial_list.php";
        $this->data['detailPage'] = 'Financial';
        $this->data['titlePage'] = 'Quick Financial Health Check';
		$this->load->view('v_index',$this->data);
	}

	public function adddata()
	{	
		$this->load->model(array('m_asuransi'));
		if ($this->input->post('edit_question')) {
			
			$admin = array(
				'question' => $this->input->post('edit_question'),
				'variable' => $this->input->post('edit_variable')
			);
			$uid = $this->m_asuransi->add($admin);
	
			redirect(site_url('asuransi'), 'location');
			die();
		}

        $this->data['include'] = "v_asuransi_adddata.php";
        $this->data['detailPage'] = 'Add Asuransi';
        $this->data['titlePage'] = 'Kecukupan Asuransi Jiwa';
		$this->load->view('v_index',$this->data);
	}

	public function editdata($id="")	{
		$this->load->model(array('m_asuransi'));
		if ($this->input->post('edit_question')) {
			
			$admin = array(
				'question' => $this->input->post('edit_question'),
				'variable' => $this->input->post('edit_variable')
			);
			$this->m_asuransi->update(array('id'=>$id),$admin);
	
			redirect(site_url('asuransi'), 'location');
			die();
		}

		$this->data['asuransi'] = $this->m_asuransi->get(array('id'=>$id));
        $this->data['detailPage'] = '';
        $this->data['titlePage'] = 'Edit Kecukupan Asuransi Jiwa';
        $this->data['include'] = "v_asuransi_edit.php";
		$this->load->view('v_index',$this->data);
	}	
	
	public function deldata($id="")	{	
		$this->load->model(array('m_paket'));

		$this->m_paket->delete(array('pak_id'=>$id));
		redirect(site_url('paket'), 'location');
	}		
}
