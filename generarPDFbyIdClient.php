<?php
// include class
require('fpdf/fpdf.php');
require_once('conexion.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// config document
$pdf->SetTitle(utf8_decode('La fiche du client'));
$pdf->SetAuthor('Mohammed');
$pdf->SetCreator('FPDF Maker');

// add title
$pdf->SetFont('Arial', 'B', 18);
$pdf->SetXY(95, 30);
$pdf->Cell(0, 10, 'La fiche du Client ', 0,1,'C');
 $pdf->Ln();
// Inserta un logo en la esquina superior izquierda a 300 ppp
$pdf->Image('logo.png',5,5,-150);

// add image
//$pdf->Image('mifoto.jpg', 180,12,13);



// add text
// $pdf->SetFont('Arial', '', 12);
// $pdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y informes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
// $pdf->Ln();
// $pdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
// $pdf->Ln();
// $pdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
// $pdf->Ln();
$id = $_GET['id'];


$consultar = "SELECT * FROM usuarios WHERE id = '$id' ";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, 30);
$pdf->MultiCell(0, 7, utf8_decode('ID Nº : '.$array["id"]), 0, 1);
$pdf->Ln();
// $pdf->Rect(62, 44, 5, 5, 'D');



$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, 40);
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Nom Client      :      ' .$array["nombre"]), 0, 1);


$pdf->SetXY(15, 48);
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Prenom Client      :      ' .$array["apellidos"]), 0, 1);

$pdf->SetXY(15, 55);
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Email Client         :      ' .$array["email"]), 0, 1);

$pdf->SetXY(15, 62);
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Telephone Client     :     ' .$array["telefono"]), 0, 1);



$pdf->SetXY(35, 105);
$pdf->MultiCell(0, 7, utf8_decode('Signature Production'), 0, 1);

$pdf->SetXY(115, 105);
$pdf->MultiCell(0, 7, utf8_decode('Signature Client'), 0, 1);

$pdf->Image('footer.GIF',3,120,-130);


// output file
$pdf->Output('', utf8_decode('justificatif.pdf'));