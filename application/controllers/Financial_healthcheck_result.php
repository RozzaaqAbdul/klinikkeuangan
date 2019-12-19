<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_healthcheck_result extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('model_financial_healthcheck');
    $this->load->library('pdf_report');
    $this->load->helper('url');
  }
	
	public function index() {
    	$isi['data']  = $this->model_financial_healthcheck->queryDataFinancial();
		
		$this->load->view('financial_healthcheck', $isi);
	}

	public function get() {
        //get param from view
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

        //get data question from table 'financial_health'
	    $query  = $this->model_financial_healthcheck->queryDataFinancial();
        $question1 = $query[0]->question;
        $question2 = $query[1]->question;
        $question3 = $query[2]->question;
        $question4 = $query[3]->question;
        $question5 = $query[4]->question;
        $question6 = $query[5]->question;
        $question7 = $query[6]->question;
        $question8 = $query[7]->question;
        $question9 = $query[8]->question;
        $question10 = $query[9]->question;
        $question11 = $query[10]->question;
        $question12 = $query[11]->question;

        //get data keterangan from table 'keterangan'
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
            'score_result'	=> $score_result,
            'question1' => $question1,
            'question2' => $question2,
            'question3' => $question3,
            'question4' => $question4,
            'question5' => $question5,
            'question6' => $question6,
            'question7' => $question7,
            'question8' => $question8,
            'question9' => $question9,
            'question10' => $question10,
            'question11' => $question11,
            'question12' => $question12,

        );

        if(!empty($data)){
        $this->generate_to_pdf($data); //passing data into another function
     } else {
        echo "Didn't get value from post";
     }

        //insert data email and score to table 'financial_health_result'
        $insert = array(
            'email' => $email,
            'score' => $score,
        );
        $this->model_financial_healthcheck->inputDataFinancialHealthCheck($insert,'financial_health_result');

        //load page view
        $this->load->view('financial_healthcheck_result', $data);

	}

    public function generate_to_pdf($data='') {
        if(is_array($data) && count($data) > 0){
       print_r($data);
    } else {
       echo "No result found";
    }

    $this->load->view('pdf_financial_healthcheck', $data);

  }

}