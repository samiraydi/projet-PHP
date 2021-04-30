<?php 

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$border = 0;
$cardWidth = 1;
$cardHeight = 1;
$pdf->Cell(40,10,'Ride List!');
$pdf->Ln();
$pdf->Cell(40,10,'Date:');
$pdf->Cell(40,10,'From:');
$pdf->Cell(40,10,'To:');
$pdf->Ln();
foreach ($data['rides'] as $res) {
	$pdf->Cell(40,10,$res->date_depart);
$pdf->Cell(40,10,$res->cite_depart);
$pdf->Cell(40,10,$res->destination);
$pdf->Ln();


}
$pdf->Output();
?>