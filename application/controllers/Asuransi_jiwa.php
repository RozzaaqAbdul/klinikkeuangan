<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asuransi_jiwa extends CI_Controller {
	public function __construct()
  	{
    parent::__construct();

	}
	
	public function index()
	{
		
		$this->load->view('asuransi_jiwa');
	}
}