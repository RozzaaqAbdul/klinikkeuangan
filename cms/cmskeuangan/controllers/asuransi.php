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
		$this->load->model(array('m_asuransi'));
		$this->load->library('pagination');
		$this->load->config('pagination');

		$this->data["total"] = $this->m_asuransi->total(array('count'=>1,'search'=>$this->input->get('search')));	
		$config['total_rows'] = $this->data["total"];
		$config['page_query_string'] = TRUE;

		$config['base_url'] = site_url('asuransi/index/?search='.$this->input->get('search'));
		$config["uri_segment"] = 3;
		$page = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		$this->pagination->initialize($config); 


		if ($this->input->get('search')) {
			$this->data['asuransi'] = $this->m_asuransi->get(array('search'=>$this->input->get('search')));
		}else{
			$this->data['asuransi'] = $this->m_asuransi->get(array('limit'=>$this->config->item('per_page'),'offset'=>$page));
		}

        $this->data['include'] = "v_asuransi_list.php";
        $this->data['detailPage'] = 'Asuransi';
        $this->data['titlePage'] = 'Kecukupan Asuransi Jiwa';
		$this->load->view('v_index',$this->data);
	}

	public function adddata()
	{	
		$this->load->model(array('m_paket'));
		if ($this->input->post('paknama')) {
			
			$admin = array(
				'pak_name' => $this->input->post('paknama'),
				'pak_keterangan' => $this->input->post('pakket')
			);
			$uid = $this->m_paket->add($admin);
	
			redirect(site_url('paket'), 'location');
			die();
		}

        $this->data['include'] = "v_paket_add.php";
        $this->data['detailPage'] = '';
		$this->load->view('v_index',$this->data);
	}

	public function editdata($id="")	{
		$this->load->model(array('m_paket'));
		if ($this->input->post('paknama')) {
			
			$admin = array(
				'pak_name' => $this->input->post('paknama'),
				'pak_keterangan' => $this->input->post('pakket')
			);
			$this->m_paket->update(array('pak_id'=>$id),$admin);
	
			redirect(site_url('paket'), 'location');
			die();
		}

		$this->data['paket'] = $this->m_paket->get(array('pak_id'=>$id));
        $this->data['detailPage'] = '';
        $this->data['include'] = "v_paket_edit.php";
		$this->load->view('v_index',$this->data);
	}	
	
	public function deldata($id="")	{	
		$this->load->model(array('m_paket'));

		$this->m_paket->delete(array('pak_id'=>$id));
		redirect(site_url('paket'), 'location');
	}		
}
