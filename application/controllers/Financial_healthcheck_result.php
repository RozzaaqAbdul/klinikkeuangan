<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_healthcheck_result extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('model_financial_healthcheck');
    $this->load->helper('url');
  }
	
	public function index() {
    	$isi['data']  = $this->model_financial_healthcheck->queryDataFinancial();
		
		$this->load->view('financial_healthcheck', $isi);
	}

	public function get() {
		$email    = $this->input->post_get('email');
	    $value_1   = (int) $this->input->post_get('value_1');
	    $value_2   = (int) $this->input->post_get('value_2');
	    $value_3   = (int) $this->input->post_get('value_3');
	    $value_4   = (int) $this->input->post_get('value_4');
	    $value_5   = (int) $this->input->post_get('value_5');
	    $value_6   = (int) $this->input->post_get('value_6');
	    $value_7   = (int) $this->input->post_get('value_7');
	    $value_8   = (int) $this->input->post_get('value_8');
	    $value_9   = (int) $this->input->post_get('value_9');
	    $value_10   = (int) $this->input->post_get('value_10');
	    $value_11   = (int) $this->input->post_get('value_11');
	    $value_12   = (int) $this->input->post_get('value_12');

	    //calculation
	    $score = $value_1+$value_2+$value_3+$value_4+$value_5+$value_6+$value_7+$value_8+$value_9+$value_10+$value_11+$value_12;

	    //$this->load->model('model_financial_healthcheck');
        $keterangan = $this->model_financial_healthcheck->queryDataKeterangan();

        if($score >= 0 && $score <= 8){
        	$score_result = $keterangan[0]->interpretation;

        } else if($score >= 9 && $score <= 16){
        	$score_result = $keterangan[1]->interpretation;

        } else if($score >= 17 && $score <= 25){
        	$score_result = $keterangan[2]->interpretation;

        } else if($score >= 26 && $score <= 38){
        	$score_result = $keterangan[3]->interpretation;

        } else if($score >= 39 && $score <= 50){
        	$score_result = $keterangan[4]->interpretation;

        } else if($score >= 51 && $score <= 60){
        	$score_result = $keterangan[5]->interpretation;

        } else {
        	$score_result = 'error';
        }

	    $data = array(
            'email'   => $email,
            'value_1'   => $value_1,
            'value_2'   => $value_2,
            'value_3'   => $value_3,
            'value_4'   => $value_4,
            'value_5'   => $value_5,
            'value_6'   => $value_6,
            'value_7'   => $value_7,
            'value_8'   => $value_8,
            'value_9'   => $value_9,
            'value_10'   => $value_10,
            'value_11'   => $value_11,
            'value_12'   => $value_12,
            'score'		=> $score,
            'score_result'	=> $score_result
        );

        $this->load->view('financial_healthcheck_result', $data);

	}

}