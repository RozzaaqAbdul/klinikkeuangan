<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dana_pendidikan extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('model_asuransijiwa');
    }
	
    public function index()
    {
        
        $this->load->view('dana_pendidikan');
    }
}