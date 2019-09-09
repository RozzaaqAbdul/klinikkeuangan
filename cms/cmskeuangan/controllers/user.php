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
		$this->load->model(array('m_user'));
		if ($this->input->post('add_username')) {
			
			$admin = array(
				'nama' => $this->input->post('add_username'),
				'email' => $this->input->post('add_email'),
				'password' => md5($this->input->post('add_password')),
				'status' => $this->input->post('add_status')
			);
			$uid = $this->m_user->add($admin);
	
			redirect(site_url('user'), 'location');
			die();
		}

        $this->data['include'] = "v_user_adddata.php";
        $this->data['detailPage'] = 'Add User';
        $this->data['titlePage'] = 'Display User Add Page';
		$this->load->view('v_index',$this->data);
	}

	public function editdata($id="")	{
		$this->load->model(array('m_user'));
		if ($this->input->post('edit_username')) {
			
			$admin = array(
				'nama' => $this->input->post('edit_username'),
				'email' => $this->input->post('edit_email'),
				'password' => md5($this->input->post('edit_password')),
				'status' => $this->input->post('edit_status')
			);
			$this->m_user->update(array('id'=>$id),$admin);
	
			redirect(site_url('user'), 'location');
			die();
		}

		$this->data['user'] = $this->m_user->get(array('id'=>$id));
        $this->data['detailPage'] = '';
        $this->data['titlePage'] = 'Edit User';
        $this->data['include'] = "v_user_edit.php";
		$this->load->view('v_index',$this->data);
	}	
	
	public function deldata($id="")	{	
		$this->load->model(array('m_user'));

		$this->m_user->delete(array('id'=>$id));
		redirect(site_url('user'), 'location');
	}		
}
