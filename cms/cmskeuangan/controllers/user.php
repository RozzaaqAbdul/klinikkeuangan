<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) redirect(site_url(), 'location');
	}


	public function index()
	{	
        $this->data['include'] = "v_user_list.php";
		$this->data['detailPage'] = 'User';
        $this->data['titlePage'] = 'User List';
		$this->load->view('v_index',$this->data);
	}

	public function viewUser()
	{
		$this->load->model(array('m_user'));
		$search = $_POST['search']['value']; 
		$limit = $_POST['length']; 
		$start = $_POST['start']; 
		$order_index = $_POST['order'][0]['column']; 
		$order_field = $_POST['columns'][$order_index]['data']; 
		$order_ascdesc = $_POST['order'][0]['dir']; 
		$sql_total = $this->m_user->count_all(); 
		$sql_data = $this->m_user->filter($search, $limit, $start, $order_field, $order_ascdesc); 
		$sql_filter = $this->m_user->count_filter($search); 
		$callback = array(
			'draw'=>$_POST['draw'], 
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback); 
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
		$this->load->model(array('m_user'));

		$this->m_user->delete(array('id'=>$id));
		redirect(site_url('user'), 'location');
	}		
}
