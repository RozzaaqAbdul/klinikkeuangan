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
                          <label>'.$variable1.'</label>
                        </td>
                      </tr>
                      

                      <tr>
                        <td align="center">2</td>
                        <td >
                          <label>'.$question2.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable2.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td >
                          <label>'.$question3.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable3.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">4</td>
                        <td >
                          <label>'.$question4.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable4.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">5</td>
                        <td>
                          <label>'.$question5.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable5.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">6</td>
                        <td >
                          <label>'.$question6.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable6.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">7</td>
                        <td >
                          <label>'.$question7.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable7.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">8</td>
                        <td>
                          <label>'.$question8.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable8.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">9</td>
                        <td >
                          <label>'.$question9.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable9.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">10</td>
                        <td >
                          <label>'.$question10.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable10.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">11</td>
                        <td>
                          <label>'.$question11.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable11.'</label>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">12</td>
                        <td >
                          <label>'.$question12.'</label>    
                        </td>
                        <td align="center">
                          <label>'.$variable12.'</label>
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
        <td align="right" colspan="3">'.$dateNow.'</td>
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
$pdf->Output('financial_healthcheck.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
