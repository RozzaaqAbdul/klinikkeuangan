<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_pensiun_result extends CI_Controller {
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
        $q1     = $this->input->post_get('q1');
        $q2   = $this->input->post_get('q2');
        
        //calculation
        $sisa_waktu = 55-$q1;
        $pensiun_now = $q2*1000000;

        $this->load->model('model_estimasi_pensiun');
        $est = $this->model_estimasi_pensiun->tampilEstimasi($q1);

        switch ($q2) {
            case "4":
                $var = "var_1";
                break;
            case "6":
                $var = "var_2";
                break;
            case "9":
                $var = "var_3";
                break;
            case "12":
                $var = "var_4";
                break;
            case "15":
                $var = "var_5";
                break;
            case "20":
                $var = "var_6";
                break;
            default:
                $var = "var_1";
        }

        $pensiun_per_bulan = $est[0]->$var;
        $pensiun_per_tahun = $pensiun_per_bulan*12;

        $this->load->model('model_kebutuhan_pensiun');
        $kbthn = $this->model_kebutuhan_pensiun->tampilKebutuhan($q1);

        $kebutuhan_pensiun = $kbthn[0]->$var;

        $this->load->model('model_investasi_tinggi');
        $tinggi = $this->model_investasi_tinggi->tampilInvestasi($q1);

        $investasi_tinggi = $tinggi[0]->$var;

        $this->load->model('model_investasi_sedang');
        $sedang = $this->model_investasi_sedang->tampilInvestasi($q1);

        $investasi_sedang = $sedang[0]->$var;

        $this->load->model('model_investasi_rendah');
        $rendah = $this->model_investasi_rendah->tampilInvestasi($q1);

        $investasi_rendah = $rendah[0]->$var;
        
        

        $data = array(
            'pensiun_now'       => $pensiun_now,
            'pensiun_per_bulan' => $pensiun_per_bulan,
            'pensiun_per_tahun' => $pensiun_per_tahun,
            'kebutuhan_pensiun' => $kebutuhan_pensiun,
            'investasi_tinggi'  => $investasi_tinggi,
            'investasi_sedang'  => $investasi_sedang,
            'investasi_rendah'  => $investasi_rendah
        );

        $this->load->view('dana_pensiun_result', $data);

    }
}