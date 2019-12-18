<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_pensiun extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('model_asuransijiwa');
    }
	
    public function index()
    {
        
        $this->load->view('dana_pensiun');
    }
}