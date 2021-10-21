<?php



include "config/config.php";
include "functions/database.fn.php";
include 'functions/session.fn.php';
require ('lib/fpdf16/fpdf.php');
require ('lib/fpdf_codabar/pdf_codabar.php');
require ('lib/fpdi134/fpdi.php');

session_start();
$db['link'] = database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_ulname = session_get_ulname();
$connected_user_id = session_get_uid();
$connected_user_agency = session_get_uagency();
$connected_user_udate = session_get_udateyear();

$dateId = $connected_user_udate.'-'.$connected_user_id;
$dateDay = date("d / m / Y");

$pdf = new FPDI();
$pagecount = $pdf->setSourceFile('data/pdf_templates/press_letter.pdf'); 
$tplidx = $pdf->importPage(1, '/MediaBox'); 

$pdf->addPage(); 
$pdf->useTemplate($tplidx, 0, 0, 200); 
$pdf->SetFont('Arial','',12);
$pdf->Ln(15);
$pdf->SetX( 75 );
$pdf->Cell(40,100,$dateDay);

$pdf->Codabar(110,260,$dateId);
$pdf->Codabar(110,10,$dateId);

$pdf->SetY( 230 );
$pdf->SetX( 150 );
$pdf->SetFont('Arial','B',12);
$pdf->Write(5,$connected_user_name.' '.$connected_user_ulname);
$pdf->Ln(10);
$pdf->SetX( 150 );
$pdf->Write(20,$connected_user_agency);

$rand = md5(uniqid(rand(), true));
$rand2 = uniqid();
$pdf->Output($rand2.'.pdf',"F");

stocker_uniqid($rand2);

header('Location: vip.php');






/*
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_ulname = session_get_ulname();
$connected_user_udate = session_get_udate();
$connected_user_id = session_get_uid();

database_disconnect($db['link']);
require('lib/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,5,'Prenom: '.$connected_user_name,0,1);
$pdf->Cell(10,5,'Nom: '.$connected_user_ulname,0,1);
// $pdf->ln( 50 ); // move cursor down
// $pdf->Write( 5, 'This is some text' ); // write text
// $pdf->SetY( 200 );  // set cursor to the bottom of the page
$pdf->Cell(10,20,'Date: '.$connected_user_udate,0,1);


$pdf->SetY( 200 );
$pdf->SetX( 150 );
$pdf->Cell(10,5,'Prenom: '.$connected_user_name,0,1);
$pdf->SetX( 150 );
$pdf->Cell(10,5,'Nom: '.$connected_user_ulname,0,1);
$pdf->SetX( 150 );
$pdf->Cell(10,20,'Date: '.$connected_user_udate,0,1);

$rand = md5(uniqid(rand(), true));
$pdf->Output($rand.'.pdf','I'); // "I" sends the file inline to the browser, or use "F" to only download it
*/

?>
