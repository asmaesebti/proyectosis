<?php
// include class
require('fpdf/fpdf.php');
require_once("db.php");

// create document
$pdf = new FPDF();
$pdf->AddPage();

// config document
$pdf->SetTitle('Listado de usuarios de la base de datos');
$pdf->SetAuthor('Mohammed');
$pdf->SetCreator('FPDF Maker');

// add title
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'Liste des clients de la base de datos', 0, 1);
$pdf->Ln();


// add image
//$pdf->Image('mifoto.jpg', 180,12,13);



// add text
$pdf->SetFont('Arial', '', 12);
// $pdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y informes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
$pdf->Ln();
// $pdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
// $pdf->Ln();
// $pdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
// $pdf->Ln();

$db = new BaseDatos();
$dato = $db->mostrarTodos();

$miCabecera = array('ID','Nom', 'Prenom', 'Email' , 'Telephone');


$pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor(2,157,116);//Fondo verde de celda
        $pdf->SetTextColor(240, 255, 240); //Letra color blanco


        $pdf->Cell(10,7, $miCabecera[0],1, 0 , 'L', true);
        $pdf->Cell(24,7, $miCabecera[1],1, 0 , 'L', true);
        $pdf->Cell(24,7, $miCabecera[2],1, 0 , 'L', true);
        $pdf->Cell(64,7, $miCabecera[3],1, 0 , 'L', true);
        $pdf->Cell(28,7, $miCabecera[4],1, 0 , 'L', true);
        $pdf->Ln();



        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $pdf->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false;


        foreach ($dato as $fila) {



        	$pdf->Cell(10, 7, $fila['id'], 1 , 0 , 'L' , $bandera);
        	$pdf->Cell(24, 7, $fila['nombre'],  1 , 0 , 'L' , $bandera);
        	$pdf->Cell(24, 7, $fila['apellidos'],  1 , 0 , 'L' , $bandera);
        	$pdf->Cell(64, 7, $fila['email'],  1 , 0 , 'L' , $bandera);
        	$pdf->Cell(28, 7, $fila['telefono'],  1 ,0 , 'L' , $bandera);
        	$pdf->Ln();
        	$bandera = !$bandera;
        }




// output file
        $pdf->Output('', 'usuarios.pdf');