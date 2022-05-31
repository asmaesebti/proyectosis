<?php
// include class
require('fpdf/fpdf.php');
require_once('conexion.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// config document
$pdf->SetTitle(utf8_decode('Le reçu de l`assuré'));
$pdf->SetAuthor('Mohammed');
$pdf->SetCreator('FPDF Maker');

// add title
$pdf->SetFont('Arial', 'B', 24);
// $pdf->Cell(0, 10, 'Listado de profesores ', 0,1,'C');
// $pdf->Ln();
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

$consultar = "select * from proyectosis order by cree_le desc limit 1";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, 30);
$pdf->MultiCell(0, 7, utf8_decode('Reçu Nº : '.$array["recu"]), 0, 1);
$pdf->Ln();
// $pdf->Rect(62, 44, 5, 5, 'D');



$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, 40);
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Type Affaire      :      ' .$array["letype"]), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(65, 40);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Renouvellement'), 0, 1);


// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(115, 40);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Changement vehicule'), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(15, 48);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Duplicata'), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(65, 48);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Autres'), 0, 1);

$pdf->SetXY(15, 48);
$pdf->MultiCell(0, 7, utf8_decode('Nº Police      :      ' .$array["police"]), 0, 1);

$pdf->SetXY(15, 55);
$pdf->MultiCell(0, 7, utf8_decode('Assure         :      ' .$array["assure"] . ' ' . $array["prenom"]), 0, 1);

$pdf->SetXY(15, 62);
$pdf->MultiCell(0, 7, utf8_decode('Periode        : Du :     ' .$array["du"] . '                   Au :      ' . $array["au"]), 0, 1);


$pdf->Cell(54,7, "PRIME TOTALE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["totale"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "ESPECE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["espece"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "CHEQUE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["cheque"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "VIREMENT",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["virement"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "RESTE A REGLER",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["reste"],1, 0 , 'C', false);
$pdf->Ln();

$pdf->SetXY(35, 105);
$pdf->MultiCell(0, 7, utf8_decode('Signature Production'), 0, 1);

$pdf->SetXY(115, 105);
$pdf->MultiCell(0, 7, utf8_decode('Signature Client'), 0, 1);

$pdf->Image('footer.GIF',3,120,-130);


//---------------------------------------------------------------------------------------------------------

$pdf->Image('logo.png',5,154,-150);

$consultar = "select * from proyectosis order by cree_le desc limit 1";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, (149+30));
$pdf->MultiCell(0, 7, utf8_decode('Reçu Nº : '.$array["recu"]), 0, 1);
$pdf->Ln();
// $pdf->Rect(62, 44, 5, 5, 'D');



$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, (149+40));
$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode('Type Affaire      :      ' .$array["letype"]), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(65, (149+40));
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Renouvellement'), 0, 1);


// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(115, (149+40));
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Changement vehicule'), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(15, (149+48));
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Duplicata'), 0, 1);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(65, (149+48));
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Autres'), 0, 1);

$pdf->SetXY(15, (149+48));
$pdf->MultiCell(0, 7, utf8_decode('Nº Police      :      ' .$array["police"]), 0, 1);

$pdf->SetXY(15, (149+55));
$pdf->MultiCell(0, 7, utf8_decode('Assure         :      ' .$array["assure"] . ' ' . $array["prenom"]), 0, 1);

$pdf->SetXY(15, (149+62));
$pdf->MultiCell(0, 7, utf8_decode('Periode        : Du :     ' .$array["du"] . '                   Au :      ' . $array["au"]), 0, 1);


$pdf->Cell(54,7, "PRIME TOTALE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["totale"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "ESPECE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["espece"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "CHEQUE",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["cheque"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "VIREMENT",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["virement"],1, 0 , 'C', false);
$pdf->Ln();
$pdf->Cell(54,7, "RESTE A REGLER",1, 0 , 'C', false);
$pdf->Cell(54,7, $array["reste"],1, 0 , 'C', false);
$pdf->Ln();

$pdf->SetXY(35, (149+105));
$pdf->MultiCell(0, 7, utf8_decode('Signature Production'), 0, 1);

$pdf->SetXY(115, (149+105));
$pdf->MultiCell(0, 7, utf8_decode('Signature Client'), 0, 1);

$pdf->Image('footer.GIF',3,(149+122),-130);




// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Renouvellement'), 0, 1);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Changement vehicule'), 0, 1);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Duplicata'), 0, 1);
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Autres'), 0, 1);
// $pdf->Ln();

// $pdf->Cell(5,5,utf8_decode('Nº Police :'),1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode($array["police"]), 0, 1);

// $pdf->Ln();
// $miCabecera = array('Nombre','Apellidos', 'Departamento', 'Telefono' , 'Email');


// $pdf->SetFont('Arial','B',10);
//         $pdf->SetFillColor(2,157,116);//Fondo verde de celda
//         $pdf->SetTextColor(240, 255, 240); //Letra color blanco


//         $pdf->Cell(24,7, $miCabecera[0],1, 0 , 'C', true);
//         $pdf->Cell(34,7, $miCabecera[1],1, 0 , 'C', true);
//         $pdf->Cell(34,7, $miCabecera[2],1, 0 , 'C', true);
//         $pdf->Cell(24,7, $miCabecera[3],1, 0 , 'C', true);
//         $pdf->Cell(64,7, $miCabecera[4],1, 0 , 'C', true);
//         $pdf->Ln();



//         $pdf->SetFont('Arial','',10);
//         $pdf->SetFillColor(229, 229, 229); //Gris tenue de cada fila
//         $pdf->SetTextColor(3, 3, 3); //Color del texto: Negro
//         $bandera = false;


        // foreach ($query as $fila) {


        // 	$pdf->Cell(24, 7, $fila['nombre'],  1 , 0 , 'C' , $bandera);
        // 	$pdf->Cell(34, 7, $fila['apellidos'],  1 , 0 , 'C' , $bandera);
        // 	$pdf->Cell(34, 7, $fila['departamento'],  1 , 0 , 'C' , $bandera);
        //         $pdf->Cell(24, 7, $fila['telefono'], 1 , 0 , 'C' , $bandera);
        //         $pdf->Cell(64, 7, $fila['email'],  1 ,0 , 'C' , $bandera);
        //         $pdf->Ln();
        //         $bandera = !$bandera;
        // }




// output file
$pdf->Output('', utf8_decode('justificatif.pdf'));