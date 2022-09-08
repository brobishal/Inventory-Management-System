<?php


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];

	include('fpdf/fpdf.php');
	$pdf=new FPDF();
	// this helps to add pdf page
	$pdf->AddPage();
	// for generate output

	// "" meansty bold,italic or uderline
	$pdf->SetFont("Arial","",16);
	
	// cell ma first width, height
	$pdf->Cell(0,20,"Registration Details",1,1,"C");
	// 1 means border
	// another 1 is for new line 
	// c means alignment center

	$pdf->Cell(47,10,"Name",1,0);
	$pdf->Cell(60,10,"Email",1,0);
	$pdf->Cell(43,10,"Address",1,0);
	$pdf->Cell(40,10,"Contact",1,1);

	$pdf->Cell(47,10,"$name",1,0);
	$pdf->Cell(60,10,"$email",1,0);
	$pdf->Cell(43,10,"$address",1,0);
	$pdf->Cell(40,10,"$contact",1,0);
	$pdf->output();

}



?>