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

		$this->data["flash"] = "";
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
				$this->data["flash"] = "Incorrect Email or Password.";	
			}
		}

		$message = $this->session->flashdata('message');
		if ($message==1) {
			$this->data["flash"] = 'Account was Created, Please Login !!';
		}	
		$this->load->view('v_login',$this->data);
	}

	public function sign_up()
	{
		$this->load->model(array('m_user'));

		$this->data["flash"] = "";
		$is_name = $this->input->post('sign_up_nama');
		$is_email = $this->input->post('sign_up_email');
		$is_password = $this->input->post('sign_up_password');
		$is_retype_password = $this->input->post('sign_up_retype_password');
		
		if ($is_name && $is_email && $is_password && $is_retype_password) {
			$is_permit = $is_password == $is_retype_password;
			if ($is_permit) {
				$data = array(
					'email' => $is_email,
					'password' => md5($is_password),
					'nama' => $is_name,
					'status' => 'Y'
				);
				$this->session->set_flashdata('message',1);
				$this->m_user->add($data);
	
				redirect(site_url('welcome'), 'location');
				die();
			}else{
				$this->data["flash"] = "Password not match";	
			}
		}
		$this->load->view('v_sign_up',$this->data);
	}
}
