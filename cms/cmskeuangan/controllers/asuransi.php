<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asuransi extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) redirect(site_url(), 'location');
	}


	public function index()
	{	
        $this->data['include'] = "v_asuransi_list.php";
        $this->data['detailPage'] = 'Asuransi';
        $this->data['titlePage'] = 'Kecukupan Asuransi Jiwa';
		$this->load->view('v_index',$this->data);
	}

	public function viewAsuransi()
	{
		$this->load->model(array('m_asuransi'));
		$search = $_POST['search']['value']; 
		$limit = $_POST['length']; 
		$start = $_POST['start']; 
		$order_index = $_POST['order'][0]['column']; 
		$order_field = $_POST['columns'][$order_index]['data']; 
		$order_ascdesc = $_POST['order'][0]['dir']; 
		$sql_total = $this->m_asuransi->count_all(); 
		$sql_data = $this->m_asuransi->filter($search, $limit, $start, $order_field, $order_ascdesc); 
		$sql_filter = $this->m_asuransi->count_filter($search); 
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
		$this->load->model(array('m_asuransi'));

		$this->m_asuransi->delete(array('id'=>$id));
		redirect(site_url('asuransi'), 'location');
	}		
}
