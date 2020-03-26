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
        $query2  = $this->model_financial_healthcheck->queryDataFinancialResult();
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

        //insert data email and score to table 'financial_health_result'
        $insert = array(
            'email' => $email,
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
            'score' => $score,
            'score_result'  => $score_result,
        );
        $this->model_financial_healthcheck->inputDataFinancialHealthCheck($insert,'financial_health_result');

            //save pdf result to folder

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
$pdf->SetSubject('Kalkulasi Financial Health Check Jiwa');
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
        <td colspan="8" align="center"><b>KLINIK KEUANGAN <br> FINANCIAL HEALTH CHECK </b></td>
        <td></td>
        </tr>
        </table>
        <br><br><br>
    </dt>
    ';

$table .= '   
    <table border="1" class="table table-responsive table-striped table-bordered table-hover" style="font-size: 10px;">
    <thead>
        <tr>
            <th style="width: 5%; text-align: center"><b>No</b></th>
            <th style="width: 85%; text-align: center"><b>Pertanyaan</b></th>
            <th style="width: 10%; text-align: center"><b>Score</b></th>
        </tr>
    </thead>';

$table .= ' 
                <tbody>
                        <tr>
                        <td style="width: 5%; text-align: center" align="center">1</td>
                        <td style="width: 85%;">
                          <label>'.$question1.'</label>    
                        </td>
                        <td style="width: 10%; text-align: center">
                          <label>'.$value_1.'</label>
                        </td>
                      </tr>
                      

                      <tr>
                        <td align="center">2</td>
                        <td >
                          <label>'.$question2.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_2.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td >
                          <label>'.$question3.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_3.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">4</td>
                        <td >
                          <label>'.$question4.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_4.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">5</td>
                        <td>
                          <label>'.$question5.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_5.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">6</td>
                        <td >
                          <label>'.$question6.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_6.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">7</td>
                        <td >
                          <label>'.$question7.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_7.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">8</td>
                        <td>
                          <label>'.$question8.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_8.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">9</td>
                        <td >
                          <label>'.$question9.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_9.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">10</td>
                        <td >
                          <label>'.$question10.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_10.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">11</td>
                        <td>
                          <label>'.$question11.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_11.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">12</td>
                        <td >
                          <label>'.$question12.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$value_12.'</label>
                        </td>
                      </tr>
                </tbody>

        ';

$table .='</table>';

$table .='
<br><br>
<div>
            <strong>
            <label>Total Score : </label>
            </strong>
            <label>'.$score.'</label>
            <br>
            <strong>
            <label>Jawaban : </label>
            </strong>
            <label>'.$score_result.'</label>
</div>
';

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
if (!is_dir(FCPATH  . '/assets/file/financial_health_check/'.$query2[0]->email)) {
    mkdir(FCPATH  . '/assets/file/financial_health_check/'.$query2[0]->email, 0777, TRUE);

}
$pdf->Output(FCPATH  . '/assets/file/financial_health_check/'.$query2[0]->email.'/financial_healthcheck.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+

        //load page view
        $this->load->view('financial_healthcheck_result', $data);

	}

    public function generate_to_pdf() {
    // $get_email    = $this->input->post_get('email');
    // $score    = $this->input->post_get('score');

    //$isi['data']  = $this->model_financial_healthcheck->queryDataFinancialResult();
    //$isi['data2']  = $this->model_financial_healthcheck->queryDataFinancial();
    
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

    //get data question from table 'financial_health_result'
    $query2  = $this->model_financial_healthcheck->queryDataFinancialResult();
    $value_1 = $query2[0]->value_1;
    $value_2 = $query2[0]->value_2;
    $value_3 = $query2[0]->value_3;
    $value_4 = $query2[0]->value_4;
    $value_5 = $query2[0]->value_5;
    $value_6 = $query2[0]->value_6;
    $value_7 = $query2[0]->value_7;
    $value_8 = $query2[0]->value_8;
    $value_9 = $query2[0]->value_9;
    $value_10 = $query2[0]->value_10;
    $value_11 = $query2[0]->value_11;
    $value_12 = $query2[0]->value_12;
    $email    = $query2[0]->email;
    $score    = $query2[0]->score;
    $score_result = $query2[0]->score_result;
    
    $isi = array(
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
            'email'     => $email,
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
            'score'     => $score,
            'score_result'  => $score_result,
        );


    $this->load->view('pdf_financial_healthcheck', $isi);

  }

  public function send_to_mail() {
    $email    = $this->input->post('email');
    $subject  ="Klinik Keuangan - Finance Health Check";
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
          $this->email->attach('assets/file/financial_health_check/'.$email.'/financial_healthcheck.pdf');
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