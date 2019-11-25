<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asuransi_jiwa extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('model_asuransijiwa');
  }
	
	public function index()
	{
		
		$this->load->view('asuransi_jiwa');
	}

	public function insert(){
    $email		= $this->input->post('email');
    $value1     = $this->input->post('value1');
    $value2  	= $this->input->post('value2');
    $value3     = $this->input->post('value3');
    $total		= $this->input->post('total');

    $data = array(
     'email'	=> $email,
     'value1'   => $value1,
     'value2'   => $value2,
     'value3'   => $value3,
     'total'   => $total
   );

    $this->model_asuransijiwa->inputDataAsuransi($data,'asuransi_jiwa');

    $this->session->set_flashdata('msg', 
      '
      <div class="alert alert-info alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data sedang di proses, silahkan cek email anda untuk melihat hasil.
      </div>
      
      ');

    redirect('asuransi_jiwa');
  }
}