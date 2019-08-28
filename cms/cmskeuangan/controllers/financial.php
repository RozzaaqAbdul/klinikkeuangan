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
		$this->data['per_page'] = $page;
        $this->data['titlePage'] = 'Quick Financial Health Check';
		$this->load->view('v_index',$this->data);
	}

	public function adddata()
	{	
		$this->load->model(array('m_financial'));
		if ($this->input->post('add_question')) {
			
			$admin = array(
				'question' => $this->input->post('add_question'),
				'variable_1' => $this->input->post('add_variable_1'),
				'variable_2' => $this->input->post('add_variable_2'),
				'variable_3' => $this->input->post('add_variable_3'),
				'variable_4' => $this->input->post('add_variable_4'),
				'value_1' => $this->input->post('add_value_1'),
				'value_2' => $this->input->post('add_value_2'),
				'value_3' => $this->input->post('add_value_3'),
				'value_4' => $this->input->post('add_value_4')
			);
			$uid = $this->m_financial->add($admin);
	
			redirect(site_url('financial'), 'location');
			die();
		}

        $this->data['include'] = "v_financial_adddata.php";
        $this->data['detailPage'] = 'Add Financial';
        $this->data['titlePage'] = 'Financial Health Check';
		$this->load->view('v_index',$this->data);
	}

	public function editdata($id="")	{
		$this->load->model(array('m_financial'));
		if ($this->input->post('edit_question')) {
			
			$admin = array(
				'question' => $this->input->post('edit_question'),
				'variable_1' => $this->input->post('edit_variable_1'),
				'variable_2' => $this->input->post('edit_variable_2'),
				'variable_3' => $this->input->post('edit_variable_3'),
				'variable_4' => $this->input->post('edit_variable_4'),
				'value_1' => $this->input->post('edit_value_1'),
				'value_2' => $this->input->post('edit_value_2'),
				'value_3' => $this->input->post('edit_value_3'),
				'value_4' => $this->input->post('edit_value_4')
			);
			$this->m_financial->update(array('id'=>$id),$admin);
	
			redirect(site_url('financial'), 'location');
			die();
		}

		$this->data['financial'] = $this->m_financial->get(array('id'=>$id));
        $this->data['detailPage'] = '';
        $this->data['titlePage'] = 'Edit Financial Health Check';
        $this->data['include'] = "v_financial_edit.php";
		$this->load->view('v_index',$this->data);
	}	
	
	public function deldata($id="")	{	
		$this->load->model(array('m_financial'));

		$this->m_financial->delete(array('id'=>$id));
		redirect(site_url('financial'), 'location');
	}		
}
