<?php
require('fpdf/fpdf.php');
require('dbconfig.php');
// $id = $_POST[]
$id = 1;
$query=mysqli_query($GLOBALS['conn'],"SELECT * from doctordata,patient_report,patientdata WHERE patient_report.patientid=patientdata.id and doctordata.id=patient_report.doctorid and reportid=$id");
$res=mysqli_fetch_array($query);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Courier','B',15);
$pdf->Cell(184,7,'Alpha',0,1,'C');
$pdf->SetFont('Courier','B',13);
$pdf->Cell(115,7,'Prescription Report',0,0,'R');
$pdf->SetFont('Courier','',13);
$pdf->Cell(69,7,'Patient Copy',0,1,'R');

$pdf->Ln();
$pdf->SetFont('Courier','B',11.5);
$pdf->Cell(95,7,'Patient Name :'.$res['pname'],1,0,'L');
$pdf->Cell(95,7,'Doctor Name :'.$res['dname'],1,1,'L');
$pdf->Cell(95,7,'Age  :'.$res['age'],1,0,'L');
$pdf->Cell(95,7,'Date  :'.$res['date_time'],1,1,'L');
$pdf->Cell(95,7,'Gender :'.$res['pgender'],1,0,'L');
$pdf->Cell(95,7,'Hospital Name :'.$res['hospital'],1,1,'L');
$pdf->Cell(95,7,'Mobile No :'.$res['pphone'],1,0,'L');
$pdf->Cell(95,7,'',1,1,'L');
$pdf->Ln();
$pdf->Cell(95,7,'Disease',1,0,'L');
$pdf->Ln();
$pdf->SetFont('Courier','',11.5);
$pdf->MultiCell(190,6," ".$res['disease'],0,'J');
$pdf->Ln();
$pdf->SetFont('Courier','B',11.5);
$pdf->Cell(95,7,'Prescription',1,0,'L');
$pdf->Ln();
$pdf->SetFont('Courier','',11.5);
$pdf->MultiCell(190,6," ".$res['prescription'],0,'J');

$pdf->SetFont('Courier','B',11.5);
$pdf->SetFont('Courier','B',11.5);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190,7,"Note: This report cannot be used for any legal purpose",0,0,'C');
$pdf->Output();


?>
