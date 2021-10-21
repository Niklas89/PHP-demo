<?php


require('lib/fpdf16/fpdf.php'); 
require('lib/fpdi134/fpdi.php'); 
require('lib/fpdf_codabar/pdf_codabar.php');
$pdf = new FPDI(); 
 
$pagecount = $pdf->setSourceFile('data/pdf_templates/press_letter.pdf'); 
$tplidx = $pdf->importPage(1, '/MediaBox'); 
 
$pdf=new PDF_Codabar(); 
$pdf->addPage(); 
$pdf->Codabar(75,40,'123456789');
$pdf->useTemplate($tplidx, 10, 10, 90); 
 
 
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,5,'Prenom: ',0,1);
$pdf->Cell(10,5,'Nom: ',0,1);
$pdf->Cell(10,5,'Tel. portable: ',0,1);
$pdf->Cell(10,5,'Email: ',20,1);
// $pdf->ln( 50 ); // move cursor down
// $pdf->Write( 5, 'This is some text' ); // write text
// $pdf->SetY( 200 );  // set cursor to the bottom of the page
$pdf->Cell(10,20,'Date d\'achat: ',0,1);
$pdf->Output('commande.pdf','I'); // "I" sends the file inline to the browser, or use "F" to only download it, or "D" for both.
 


?> 
