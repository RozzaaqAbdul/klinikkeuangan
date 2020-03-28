<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_pensiun_result extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->library('pdf_report');
        $this->load->model('model_danapensiun');
    }
	
	public function index(){
		$this->load->view('asuransi_jiwa_result');
	}

    public function get() {
        $email    = $this->input->post_get('email');
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
            'email'             => $email,
            'pensiun_now'       => $pensiun_now,
            'pensiun_per_bulan' => $pensiun_per_bulan,
            'pensiun_per_tahun' => $pensiun_per_tahun,
            'kebutuhan_pensiun' => $kebutuhan_pensiun,
            'investasi_tinggi'  => $investasi_tinggi,
            'investasi_sedang'  => $investasi_sedang,
            'investasi_rendah'  => $investasi_rendah
        );


        //input data to table dana_pensiun_result
        $this->model_danapensiun->inputDataPensiun($data,'dana_pensiun_result');

        //get data from table dana_pensiun_result
        $isi['data_pensiun'] = $this->model_danapensiun->tampilDataPensiun();
        $data_pensiun = $isi['data_pensiun'];

        //save pdf file to local data
        //============================================================+
        // START OF FILE
        //============================================================+

        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        //$img = file_get_contents('http://localhost/jtikv2/assets/images/form_f1.jpg');

        //$pdf->Image('@' . $img, 55, 19, '', '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('');
        $pdf->SetTitle('Klinik Keuangan');
        $pdf->SetSubject('Kalkulasi Asuransi Jiwa');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('times', '', 12);

        // add a page
        $pdf->AddPage();

        // set JPEG quality
        $pdf->setJPEGQuality(75);

        // Image example with resizing
        $pdf->Image('images/image_demo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

        // set cell padding
        $pdf->setCellPaddings(1, 1, 1, 1);

        // set cell margins
        $pdf->setCellMargins(1, 1, 1, 1);

        // set color for background
        $pdf->SetFillColor(255, 255, 127);


        $table= '

        <dl>
            <dt>
                <table border="0">

                <tr>
                <td></td>
                <td colspan="8" align="center"><b>KLINIK KEUANGAN <br> PERENCANAAN DANA PENSIUN </b></td>
                <td></td>
                </tr>
                </table>
                <br><br><br>
            </dt>
            ';

        $table .= '   
            <table border="1" cellpadding="3">
                <tr>
                    <td align="center"><b>NO.</b></td>
                    <td align="center" colspan="8"><b>Pertanyaan</b></td>
                    <td align="center" colspan="3" ><b>Jawaban Dalam Rupiah (Rp.)</b></td>
                </tr>';

        foreach ($data_pensiun as $row) {

        $table .= ' <tr>
                        <td align="center">1</td>
                        <td colspan="8">Nilai uang pensiun per bulan yang diharapkan (sesuai nilai saat ini)</td>
                        <td colspan="3" align="center"> '.number_format($row->pensiun_now).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td colspan="8">Nilai uang pensiun per bulan yang diharapkan (saat memulai pensiun)</td>
                        <td colspan="3" align="center"> '.number_format($row->pensiun_per_bulan).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                     <tr>
                        <td align="center">3</td>
                        <td colspan="8">Nilai uang pensiun tahunan yang dibutuhkan (saat memulai pensiun)</td>
                        <td colspan="3" align="center"> '.number_format($row->pensiun_per_tahun).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td colspan="8">Nilai total dana pensiun yang dibutuhkan untuk pensiun sesuai rencana</td>
                        <td colspan="3" align="center"> '.number_format($row->kebutuhan_pensiun).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">5</td>
                        <td colspan="8">Nilai investasi bulanan yang diperlukan untuk pensiun - imbal hasil tinggi</td>
                        <td colspan="3" align="center"> '.number_format($row->investasi_tinggi).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td colspan="8">Nilai investasi bulanan yang diperlukan untuk pensiun - imbal hasil sedang</td>
                        <td colspan="3" align="center"> '.number_format($row->investasi_sedang).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">7</td>
                        <td colspan="8">Nilai investasi bulanan yang diperlukan untuk pensiun - imbal hasil rendah</td>
                        <td colspan="3" align="center"> '.number_format($row->investasi_rendah).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                ';
        }

        $table .='</table>';

        //$dateLog = date_create($row->tgl_bimbingan);
        // $bulanLog = $bulan[(int)date("m")];
        // $tanggalLog = date("d");
        // $tahunLog = date("Y");
        // $dateNow = $tanggalLog . ' ' . $bulanLog . ' ' . $tahunLog; 

        $mydate=getdate(date("U"));
        //echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        $dateNow = $mydate[mday] . ' ' . $mydate[month] . ' ' . $mydate[year]; 

         $table .= '  
         
        <br><br><br>
        <table border="" >
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="right" colspan="3"> Jakarta, '.$dateNow.'</td>
            </tr>
        </table>

        ';
            //}

        $pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'J', true);

        // reset font stretching
        $pdf->setFontStretching(100);

        // reset font spacing
        $pdf->setFontSpacing(0);

        // ---------------------------------------------------------

        // move pointer to last page
        $pdf->lastPage();

        // ---------------------------------------------------------

        //Close and output PDF document
        // Fungsi ob_clean untuk menghapus output buffer
        ob_clean();
        if (!is_dir(FCPATH  . '/assets/file/dana_pensiun/'.$data_pensiun[0]->email)) {
            mkdir(FCPATH  . '/assets/file/dana_pensiun/'.$data_pensiun[0]->email, 0777, TRUE);

        }
        $pdf->Output(FCPATH  . '/assets/file/dana_pensiun/'.$data_pensiun[0]->email.'/perencanaan_dana_pensiun.pdf', 'F');

        //============================================================+
        // END OF FILE
        //============================================================+


        $this->load->view('dana_pensiun_result', $data);

    }

    public function generate_to_pdf() {
    $isi['data'] = $this->model_danapensiun->tampilDataPensiun();

    $this->load->view('pdf_dana_pensiun', $isi);
  }

  public function send_to_mail() {
    $email    = $this->input->post('email');
    $subject  ="Klinik Keuangan - Perencanaan Dana Pensiun";
    $message  ="See the detail about Klinik Keuangan in attach file";

    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'rencanakeuanganmu@gmail.com', 
      'smtp_pass' => 'kl1n1kk3u4n64n', 
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'smtp_crypto' => 'ssl',
      'wordwrap' => TRUE
    );


          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('klinik.keuangan@gmail.com');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
          $this->email->attach('assets/file/dana_pensiun/'.$email.'/perencanaan_dana_pensiun.pdf');
          if($this->email->send())
         {
          $this->session->set_flashdata('msg', 
            '
            <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dikirim, silahkan cek email anda untuk melihat hasil.
            </div>
            
            ');
         }
         else
        {
         show_error($this->email->print_debugger());
        }

        $this->load->view('email_success');

    }

}