<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_pendidikan_result extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->library('pdf_report');
        $this->load->model('model_danapendidikan');
    }
	
	public function index(){
		$this->load->view('asuransi_jiwa_result');
	}

    public function get() {
        $email    = $this->input->post_get('email');
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
            'email'     => $email,
            'value1'   => $value1,
            'value2'   => $value2,
            'value3'   => $value3,
            'sisa_waktu'   => $sisa_waktu,
            'dana_dibutuhkan'   => $dana_dibutuhkan,
            'kategori_rendah'   => $kategori_rendah,
            'kategori_sedang'   => $kategori_sedang,
            'kategori_tinggi'   => $kategori_tinggi,
        );

        $insert = array(
            'email'     => $email,
            'value3'   => $value3,
            'sisa_waktu'   => $sisa_waktu,
            'dana_dibutuhkan'   => $dana_dibutuhkan,
            'kategori_rendah'   => $kategori_rendah,
            'kategori_sedang'   => $kategori_sedang,
            'kategori_tinggi'   => $kategori_tinggi,
        );

        //input data to table dana_pendidikan_result
        $this->model_danapendidikan->inputDataPendidikan($insert,'dana_pendidikan_result');

        $isi['data_pendidikan'] = $this->model_danapendidikan->tampilDataPendidikan();
        $data_pendidikan = $isi['data_pendidikan'];

        //create new pdf document
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
                <td colspan="8" align="center"><b>KLINIK KEUANGAN <br> PERENCANAAN DANA PENDIDIKAN </b></td>
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

        foreach ($data_pendidikan as $row) {

        $table .= ' <tr>
                        <td align="center">1</td>
                        <td colspan="8">Sisa waktu untuk perencanaan dana pendidikan</td>
                        <td colspan="3" align="center"> '.$row->sisa_waktu.'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td colspan="8">Kebutuhan dana pendidikan (dengan nilai saat ini)</td>
                        <td colspan="3" align="center"> '.number_format($row->value3).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                     <tr>
                        <td align="center">3</td>
                        <td colspan="8">Kebutuhan dana pendidikan (saat akan dibutuhkan)</td>
                        <td colspan="3" align="center"> '.number_format($row->dana_dibutuhkan).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td colspan="8">Tingkat imbal hasil kategori rendah (8% per tahun)</td>
                        <td colspan="3" align="center"> '.number_format($row->kategori_rendah).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">5</td>
                        <td colspan="8">Tingkat imbal hasil kategori sedang (12% per tahun)</td>
                        <td colspan="3" align="center"> '.number_format($row->kategori_sedang).'</td>
                        <td align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td colspan="8">Tingkat imbal hasil kategori tinggi (16% per tahun)</td>
                        <td colspan="3" align="center"> '.number_format($row->kategori_tinggi).'</td>
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
        if (!is_dir(FCPATH  . '/assets/file/dana_pendidikan/'.$data_pendidikan[0]->email)) {
            mkdir(FCPATH  . '/assets/file/dana_pendidikan/'.$data_pendidikan[0]->email, 0777, TRUE);

        }
        $pdf->Output(FCPATH  . '/assets/file/dana_pendidikan/'.$data_pendidikan[0]->email.'/perencanaan_dana_pendidikan.pdf', 'F');

        //============================================================+
        // END OF FILE
        //============================================================+


        $this->load->view('dana_pendidikan_result', $data);

    }

    public function generate_to_pdf() {
    $isi['data'] = $this->model_danapendidikan->tampilDataPendidikan();

    $this->load->view('pdf_dana_pendidikan', $isi);
  }

  public function send_to_mail() {
    $email    = $this->input->post('email');
    $subject  ="Klinik Keuangan - Perencanaan Dana Pendidikan";
    $message  ="See the detail about Klinik Keuangan in attach file";

    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'abiyosoa@gmail.com', 
      'smtp_pass' => 'zeotzoio23', 
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'smtp_crypto' => 'ssl',
      'wordwrap' => TRUE
    );


          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('abiyosoa@gmail.com');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
          $this->email->attach('assets/file/dana_pendidikan/'.$email.'/perencanaan_dana_pendidikan.pdf');
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