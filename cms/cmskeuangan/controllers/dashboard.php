<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) redirect(site_url(), 'location');
        $this->clear_cache();
	}

	public function index()
	{	
		$this->load->model(array('m_user'));

		$this->data['include'] = "v_dashboard.php";
		$this->data['detailPage'] = 'Dashboard';
		$this->data['titlePage'] = 'Dashboard';
		$this->load->view('v_index', $this->data);
	}
	
	function clear_cache()
	{
	    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	    $this->output->set_header("Pragma: no-cache");
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(site_url(), 'location');
	}
}
