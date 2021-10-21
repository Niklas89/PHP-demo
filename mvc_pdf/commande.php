<?php

require('lib/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,5,'Prenom: '.$c2,0,1);
$pdf->Cell(10,5,'Nom: '.$c3,0,1);
$pdf->Cell(10,5,'Tel. portable: '.$c6,0,1);
$pdf->Cell(10,5,'Email: '.$c7,20,1);
// $pdf->ln( 50 ); // move cursor down
// $pdf->Write( 5, 'This is some text' ); // write text
// $pdf->SetY( 200 );  // set cursor to the bottom of the page
$pdf->Cell(10,20,'Date d\'achat: '.$m5,0,1);
$pdf->Output('commande.pdf','I'); // "I" sends the file inline to the browser, or use "F" to only download it, or "D" for both.

?>
