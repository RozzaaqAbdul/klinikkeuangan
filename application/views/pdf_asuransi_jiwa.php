<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

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
        <td colspan="8" align="center"><b>KLINIK KEUANGAN <br> PERENCANAAN PROTEKSI DAN ASURANSI JIWA </b></td>
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

foreach ($data_asuransi as $row) {

$table .= ' <tr>
                <td align="center">1</td>
                <td colspan="8">Berapa nilai pertanggungan asuransi jiwa yang telah Anda miliki saat ini (dalam juta Rupiah)?</td>
                <td colspan="3" align="center"> '.$row->value1.'</td>
                <td align="center" colspan="2"></td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td colspan="8">Berapa estimasi biaya hidup yang dibutuhkan keluarga Anda per bulan (dalam juta Rupiah) ?</td>
                <td colspan="3" align="center"> '.$row->value2.'</td>
                <td align="center" colspan="2"></td>
            </tr>
             <tr>
                <td align="center">3</td>
                <td colspan="8">Berapa nilai hutang yang harus dilunasi segera jika terjadi resiko pada Anda (dalam juta Rupiah) ?</td>
                <td colspan="3" align="center"> '.$row->value3.'</td>
                <td align="center" colspan="2"></td>
            </tr>
            <tr>
                <td colspan="9" align="center"><b>Hasil Perhitungan</b></td>
                <td colspan="3" align="center"> '.$row->total.'</td>
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

// $mydate=getdate(date("U"));
//echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
// $dateNow = $mydate[mday] . ' ' . $mydate[month] . ' ' . $mydate[year]; 

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
        <td align="right" colspan="3"> '.$dateNow.'</td>
    </tr>
</table>

<p>SELAMAT ! <br>

Anda telah lakukan langkah awal untuk mengetahui tingkat kesehatan finansial Anda dan keluarga. <br>

Untuk kajian lebih rinci mengenai perencanaan dana pensiun Anda dan perencanaan investasi untuk dana pensiun Anda, silakan hubungi Biro Perencanaan Keuangan Klinik Keuangan di e-mail klinik.keuangan@gmail.com atau di nomor telepon 0838-77-600-800 (chat WhasApp, SMS,telepon). <br><br>


======== <br>

<b>DISCLAIMER</b> <br>

Informasi ini hanya simulasi sederhana dan ilustrasi ringkas untuk referensi umum. Simulasi yang akurat membutuhkan informasi yang lebih detail dan lengkap.</p>

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
$pdf->Output('asurani_jiwa.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
