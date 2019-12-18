<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_healthcheck extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('model_financial_healthcheck');
    $this->load->helper('url');
  }
	
	public function index()
	{
    	$isi['data']  = $this->model_financial_healthcheck->queryDataFinancial();
		
		$this->load->view('financial_healthcheck', $isi);
	}

}