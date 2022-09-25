<?php
// include class
require('fpdf/fpdf.php');

require_once('conexion.php');

// create document

$client = $_GET['client'];

// $consultarF = "SELECT * FROM `proyectosis` WHERE assure like '%ddd%' and prenom like '%ddd%'";
// $queryF = mysqli_query($connection, $consultarF);
// $arrayF = mysqli_fetch_array($queryF);


$consultar = "SELECT * FROM proyectosis WHERE assure like '$client' ";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);
$rowcount=mysqli_num_rows($query);

$pdf = new FPDF();
$pdf->AddPage();

// config document
$pdf->SetTitle(utf8_decode('Les factures de l`assuré'));
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

// $consultar = "select * from proyectosis order by cree_le desc limit 1";
// $query = mysqli_query($connection, $consultar);
// $array = mysqli_fetch_array($query);

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(60, 30);
$pdf->MultiCell(0, 7, utf8_decode('Rabat, le                                                   '.date("d/m/Y")), 0, 1);
$pdf->Ln();
// $pdf->Rect(62, 44, 5, 5, 'D');



$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(60, 40);
//$pdf->Cell(5,5,'',1,0,'C');
$pdf->MultiCell(0, 7, utf8_decode($array["assure"] . ' ' . $array["prenom"]), 0, 1);

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

$pdf->SetXY(60, 48);
$pdf->setFillColor(230,230,230);
$pdf->MultiCell(100, 7, utf8_decode($array["address_client"]), 0, 1, true);

$pdf->SetXY(65, 75);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFont('Arial','BU');
$pdf->MultiCell(0, 7, utf8_decode("QUITTANCE DE PRIME"), 0, 1);

// $pdf->SetXY(15, 55);
// $pdf->MultiCell(0, 7, utf8_decode('Assure         :      ' .$array["assure"] . ' ' . $array["prenom"]), 0, 1);

// $pdf->SetXY(15, 62);
// $pdf->MultiCell(0, 7, utf8_decode('Periode        : Du :     ' .$array["du"] . '                   Au :      ' . $array["au"]), 0, 1);
$celda_35 = 30;
$celda_30 = 25;
$celda_25 = 25;
$celda_20 = 18;
$celda_15 = 10;

$altura_arriba = 7;
$altura_abajo = 21;

$pdf->SetXY(15, 95);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell($celda_35,7, utf8_decode("N° Police"),1, 0 , 'C', false);
$pdf->Cell($celda_35,7, utf8_decode("Période"),1, 0 , 'C', false);
//$pdf->Ln();
$pdf->Cell($celda_35,7, utf8_decode("Désignation"),1, 0 , 'C', false);
$pdf->Cell($celda_25,7, utf8_decode("Prime Nette"),1, 0 , 'C', false);
//$pdf->Ln();
$pdf->Cell($celda_20,7, utf8_decode("Taxes"),1, 0 , 'C', false);
$pdf->Cell($celda_15,7, utf8_decode("T.P"),1, 0 , 'C', false);
//$pdf->Ln();

$pdf->Cell($celda_30,7, utf8_decode("ACCESOIRES"),1, 0 , 'C', false);
$pdf->Cell($celda_20,7, utf8_decode("Total TTC"),1, 0 , 'C', false);
$pdf->Ln();

foreach ($query as $row) {

$x = 12;
$pdf->SetXY(15, 95);
while($pdf->GetStringWidth(utf8_decode($row['police'])) > $celda_35 ){
    $x--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $x );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35 , 21, utf8_decode( $row[ 'police' ]) , 1, 0, 'L' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $x );

$y = 12;
while($pdf->GetStringWidth(utf8_decode($array["du"] . " AU " . $array["au"])) > $celda_35 ){
    $y--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $y );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 21, utf8_decode( $array["du"] . " AU " . $array["au"] ) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $y );


$z = 12;
while($pdf->GetStringWidth(utf8_decode($array["designation"])) > $celda_35 ){
    $z--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $z );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 21, utf8_decode( $array["designation"]) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $z );

//$pdf->Cell($celda_25,21, $array["prime_net"],1, 0 , 'C', false);

$t = 12;
while($pdf->GetStringWidth(utf8_decode($array["prime_net"])) > $celda_25 ){
    $t--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $t );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_25, 21, utf8_decode( $array["prime_net"]) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $t );

//$pdf->Cell($celda_20,21, $array["taxes"],1, 0 , 'C', false);

$n = 12;
while($pdf->GetStringWidth(utf8_decode($array["taxes"])) > $celda_20 ){
    $n--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $n );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_20, 21, utf8_decode( $array["taxes"]) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $n );



//$pdf->Cell($celda_15,21, $array["tp"],1, 0 , 'C', false);

$m = 12;
while($pdf->GetStringWidth(utf8_decode($array["tp"])) > $celda_15 ){
    $m--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $m );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_15, 21, utf8_decode( $array["tp"]) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $m );



//$pdf->Cell($celda_30,21, $array["accesoires"],1, 0 , 'C', false);

$r = 12;
while($pdf->GetStringWidth(utf8_decode($array["accesoires"])) > $celda_30 ){
    $r--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $r );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_30, 21, utf8_decode( $array["accesoires"]) , 1, 0, 'C' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $r );




//$pdf->Cell($celda_20,21, $array["totale"],1, 0 , 'C', false);

$k = 12;
while($pdf->GetStringWidth(utf8_decode($array["totale"])) > $celda_20 ){
    $k--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $k );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_20, 21, utf8_decode( $array["totale"]) , 1, 0, 'R' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $k );

}


$pdf->Ln();

$pdf->SetXY(75, 116);

$celda_75 = 96;


$g = 12;
while($pdf->GetStringWidth(utf8_decode("Total Primes")) > $celda_75 ){
    $g--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $g );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_75, 7, utf8_decode( "Total Primes") , 1, 0, 'L' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $g );


$h = 12;
while($pdf->GetStringWidth(utf8_decode($array["prime_net"])) > $celda_35 ){
    $h--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $h );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 7, utf8_decode( $array["prime_net"]) , 1, 0, 'R' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $h );



$pdf->Ln();

$pdf->SetXY(75, 123);

$celda_75 = 96;


$g1 = 12;
while($pdf->GetStringWidth(utf8_decode("Total Taxes")) > $celda_75 ){
    $g1--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $g1 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_75, 7, utf8_decode( "Total Taxes") , 1, 0, 'L' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $g1 );


$h1 = 12;
while($pdf->GetStringWidth(utf8_decode($array["taxes"])) > $celda_35 ){
    $h1--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $h1 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 7, utf8_decode( $array["taxes"]) , 1, 0, 'R' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $h1 );


$pdf->Ln();

$pdf->SetXY(75, 130);

$celda_75 = 96;


$g11 = 12;
while($pdf->GetStringWidth(utf8_decode("Total Timbres & Accessoires")) > $celda_75 ){
    $g11--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $g1 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_75, 7, utf8_decode( "Total Timbres & Accessoires") , 1, 0, 'L' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $g11 );


$h11 = 12;
while($pdf->GetStringWidth(utf8_decode($array["accesoires"])) > $celda_35 ){
    $h11--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $h11 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 7, utf8_decode( $array["accesoires"]) , 1, 0, 'R' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $h11 );


$pdf->Ln();

$pdf->SetXY(75, 137);

$celda_75 = 96;


$g11 = 12;
while($pdf->GetStringWidth(utf8_decode("Total TTC")) > $celda_75 ){
    $g11--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $g1 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_75, 7, utf8_decode( "Total TTC") , 1, 0, 'L' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $g11 );


$h11 = 12;


while($pdf->GetStringWidth(utf8_decode($array["totale"])) > $celda_35 ){
    $h11--;   // Decrease the variable which holds the font size
    $pdf->SetFont( 'Arial', 'B', $h11 );  // Set the new font size
}
/* Output the string at the required font size */
$pdf->Cell( $celda_35, 7, utf8_decode( $array["totale"]) , 1, 0, 'R' );
/* Return the font size to itś original */
$pdf->SetFont( 'Arial', 'B', $h11 );


// $pdf->SetXY(35, 105);
// $pdf->MultiCell(0, 7, utf8_decode('Signature Production'), 0, 1);

// $pdf->SetXY(115, 105);
// $pdf->MultiCell(0, 7, utf8_decode('Signature Client'), 0, 1);

$pdf->Image('footer.GIF',3,260,-130);


//---------------------------------------------------------------------------------------------------------

// $pdf->Image('logo.png',5,154,-150);

// $consultar = "select * from proyectosis order by cree_le desc limit 1";
// $query = mysqli_query($connection, $consultar);
// $array = mysqli_fetch_array($query);

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(15, (149+30));
// $pdf->MultiCell(0, 7, utf8_decode('Reçu Nº : '.$array["recu"]), 0, 1);
// $pdf->Ln();
// // $pdf->Rect(62, 44, 5, 5, 'D');



// $pdf->SetFont('Arial', '', 12);
// $pdf->SetXY(15, (149+40));
// $pdf->Cell(5,5,'',1,0,'C');
// $pdf->MultiCell(0, 7, utf8_decode('Type Affaire      :      ' .$array["letype"]), 0, 1);

// // $pdf->SetFont('Arial', '', 12);
// // $pdf->SetXY(65, (149+40));
// // $pdf->Cell(5,5,'',1,0,'C');
// // $pdf->MultiCell(0, 7, utf8_decode('Renouvellement'), 0, 1);


// // $pdf->SetFont('Arial', '', 12);
// // $pdf->SetXY(115, (149+40));
// // $pdf->Cell(5,5,'',1,0,'C');
// // $pdf->MultiCell(0, 7, utf8_decode('Changement vehicule'), 0, 1);

// // $pdf->SetFont('Arial', '', 12);
// // $pdf->SetXY(15, (149+48));
// // $pdf->Cell(5,5,'',1,0,'C');
// // $pdf->MultiCell(0, 7, utf8_decode('Duplicata'), 0, 1);

// // $pdf->SetFont('Arial', '', 12);
// // $pdf->SetXY(65, (149+48));
// // $pdf->Cell(5,5,'',1,0,'C');
// // $pdf->MultiCell(0, 7, utf8_decode('Autres'), 0, 1);

// $pdf->SetXY(15, (149+48));
// $pdf->MultiCell(0, 7, utf8_decode('Nº Police      :      ' .$array["police"]), 0, 1);

// $pdf->SetXY(15, (149+55));
// $pdf->MultiCell(0, 7, utf8_decode('Assure         :      ' .$array["assure"] . ' ' . $array["prenom"]), 0, 1);

// $pdf->SetXY(15, (149+62));
// $pdf->MultiCell(0, 7, utf8_decode('Periode        : Du :     ' .$array["du"] . '                   Au :      ' . $array["au"]), 0, 1);


// $pdf->Cell(54,7, "PRIME TOTALE",1, 0 , 'C', false);
// $pdf->Cell(54,7, $array["totale"],1, 0 , 'C', false);
// $pdf->Ln();
// $pdf->Cell(54,7, "ESPECE",1, 0 , 'C', false);
// $pdf->Cell(54,7, $array["espece"],1, 0 , 'C', false);
// $pdf->Ln();
// $pdf->Cell(54,7, "CHEQUE",1, 0 , 'C', false);
// $pdf->Cell(54,7, $array["cheque"],1, 0 , 'C', false);
// $pdf->Ln();
// $pdf->Cell(54,7, "VIREMENT",1, 0 , 'C', false);
// $pdf->Cell(54,7, $array["virement"],1, 0 , 'C', false);
// $pdf->Ln();
// $pdf->Cell(54,7, "RESTE A REGLER",1, 0 , 'C', false);
// $pdf->Cell(54,7, $array["reste"],1, 0 , 'C', false);
// $pdf->Ln();

// $pdf->SetXY(35, (149+105));
// $pdf->MultiCell(0, 7, utf8_decode('Signature Production'), 0, 1);

// $pdf->SetXY(115, (149+105));
// $pdf->MultiCell(0, 7, utf8_decode('Signature Client'), 0, 1);

// $pdf->Image('footer.GIF',3,(149+122),-130);




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
$pdf->Output('', utf8_decode('facture.pdf'));