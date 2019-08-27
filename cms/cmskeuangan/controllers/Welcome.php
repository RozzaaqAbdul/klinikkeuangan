<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
    {
		parent::__construct();
		if ($this->session->userdata('email')) redirect(site_url('dashboard'), 'location');
	}

	public function index()
	{
		$this->load->model(array('m_user'));

		$this->data["error"] = "";
		if ($this->input->post('lgn_user')) {
			$is_permit = $this->m_user->get(array('status'=>'Y','email'=>$this->input->post('lgn_user'),'password'=>md5($this->input->post('lgn_pass'))));
			if ($is_permit) {				
				$newdata = array(
								   'email'  	=> $is_permit[0]->email,
								   'group'  	=> $is_permit[0]->tipe,
								   'uid'  		=> $is_permit[0]->id,
								   'username'  	=> $is_permit[0]->nama,
								   'avatar'  	=> USER_IMG.$is_permit[0]->foto
							   );
				$this->session->set_userdata($newdata);	
				redirect(site_url('dashboard'), 'location');
			}else{
				$this->data["error"] = "Incorrect Email or Password.";	
			}
		}

		$this->load->view('v_login',$this->data);
	}
}
