<?php
require_once('fpdf.php');
include('connection.php');
$sql="SELECT * FROM healthdetail ";
$res=mysqli_query($conn,$sql);

if (isset($_POST['downloadpdf'])) {
	$pdf = new FPDF('P','mm','a4');
	$pdf->SetFont('Arial','b','8');
	$pdf->AddPage();
	$pdf->Cell('10','12','ID','1','0','c');
	$pdf->Cell('50','12','Name','1','0','c');
	$pdf->Cell('10','12','Age','1','0','c');
	$pdf->Cell('15','12','WEIGHT','1','0','c');
	$pdf->Cell('100','12','EMAIL','1','1','c');

	$pdf->SetFont('Arial','','12');

	while($row=mysqli_fetch_assoc($res))
	{
		$pdf->Cell('10','12',$row['id'],'1','0','c');
	    $pdf->Cell('50','12',$row['name'],'1','0','c');
	    $pdf->Cell('10','12',$row['age'],'1','0','c');
	    $pdf->Cell('15','12',$row['weight'],'1','0','c');
	    $pdf->Cell('100','12',$row['email'],'1','1','c');
	}
	$pdf->Output('D');



}

