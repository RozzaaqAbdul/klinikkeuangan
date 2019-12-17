<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dana_pendidikan_result extends CI_Controller {
	public function __construct(){
        parent::__construct();
        //$this->load->library('pdf_report');
        // $this->load->model('model_asuransijiwa');
    }
	
	public function index(){
		$this->load->view('asuransi_jiwa_result');
	}

    public function get() {
        //$email    = $this->input->post_get('email');
        $value1     = $this->input->post_get('value1');
        $value2   = $this->input->post_get('value2');
        $value3     = $this->input->post_get('value3');

       
        $this->load->library('finance');
        
        //calculation
        $sisa_waktu = $value2-$value1;
        $dana_dibutuhkan = $value3*(1+10/100)**$sisa_waktu;
        $kategori_rendah = $this->finance->ppmt((8/100/12),1,$sisa_waktu*12,-$dana_dibutuhkan*1000);
        $kategori_sedang = $this->finance->ppmt((12/100/12),1,$sisa_waktu*12,-$dana_dibutuhkan*1000);
        $kategori_tinggi = $this->finance->ppmt((16/100/12),1,$sisa_waktu*12,-$dana_dibutuhkan*1000);
        

        $data = array(
            'value1'   => $value1,
            'value2'   => $value2,
            'value3'   => $value3,
            'sisa_waktu'   => $sisa_waktu,
            'dana_dibutuhkan'   => $dana_dibutuhkan,
            'kategori_rendah'   => $kategori_rendah,
            'kategori_sedang'   => $kategori_sedang,
            'kategori_tinggi'   => $kategori_tinggi,
        );

        $this->load->view('dana_pendidikan_result', $data);

    }
}