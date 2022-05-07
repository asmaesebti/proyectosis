<?php
require_once('conexion.php');
$conn = $connection;
require_once('excel_reader2.php');
require_once('SpreadsheetReader.php');
require_once('SpreadsheetReader_XLS.php');
//require_once('SpreadsheetReader_XLSX.php');

if (isset($_POST["import"]))
{

  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

    $targetPath = 'uploads/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

    $Reader = new SpreadsheetReader($targetPath);

    $sheetCount = count($Reader->sheets());

    for($i=0;$i<$sheetCount;$i++)
    {
        $Reader->ChangeSheet($i);

        foreach ($Reader as $Row)
        {

             $fecha_hoy = "";
            if(isset($Row[0])) {
             
                $fecha_hoy = mysqli_real_escape_string($conn,$Row[0]);
            }

            $recu = "";
            if(isset($Row[1])) {
                $recu = mysqli_real_escape_string($conn,$Row[1]);
            }

           
            $letype = "";
            if(isset($Row[2])) {
                $letype = mysqli_real_escape_string($conn,$Row[2]);
            }

            $attestation = "";
            if(isset($Row[3])) {
                $attestation = mysqli_real_escape_string($conn,$Row[3]);
            }

            $police = "";
            if(isset($Row[4])) {
                $police = mysqli_real_escape_string($conn,$Row[4]);
            }

            $matricule = "";
            if(isset($Row[5])) {
                $matricule = mysqli_real_escape_string($conn,$Row[5]);
            }

            $produit = "";
            if(isset($Row[6])) {
                $produit = mysqli_real_escape_string($conn,$Row[6]);
            }

            $assure = "";
            if(isset($Row[7])) {
                $assure = mysqli_real_escape_string($conn,$Row[7]);
            }

            $du = "";
            if(isset($Row[8])) {
                $du = mysqli_real_escape_string($conn,$Row[8]);
            }

            $au = "";
            if(isset($Row[9])) {
                $au = mysqli_real_escape_string($conn,$Row[9]);
            }

            $totale = "";
            if(isset($Row[10])) {
                $totale = mysqli_real_escape_string($conn,$Row[10]);
            }

            $espece = "";
            if(isset($Row[11])) {
                $espece = mysqli_real_escape_string($conn,$Row[11]);
            }

            $cheque = "";
            if(isset($Row[12])) {
                $cheque = mysqli_real_escape_string($conn,$Row[12]);
            }

            $autre = "";
            if(isset($Row[13])) {
                $autre = mysqli_real_escape_string($conn,$Row[13]);
            }

            $reste = "";
            if(isset($Row[14])) {
                $reste = mysqli_real_escape_string($conn,$Row[14]);
            }

            $date_versement = "";
            if(isset($Row[15])) {
                $date_versement = mysqli_real_escape_string($conn,$Row[15]);
            }

            $mode_paiment = "";
            if(isset($Row[16])) {
                $mode_paiment = mysqli_real_escape_string($conn,$Row[16]);
            }

            $cree_le = "";
            if(isset($Row[17])) {
                $cree_le = mysqli_real_escape_string($conn,$Row[17]);
            }



            if (!empty($recu) || !empty($fecha_hoy) || !empty($letype) || !empty($attestation) || !empty($police) || !empty($matricule) || !empty($produit) || !empty($assure)  || !empty($du) || !empty($au) || !empty($totale) || !empty($espece) || !empty($cheque) || !empty($autre) || !empty($reste) || !empty($date_versement) || !empty($mode_paiment) || !empty($cree_le)) {
                $query = "INSERT INTO `proyectosis` ( `recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`,`assure`, `du`, `au`, `totale`, `espece` ,  `cheque` , `autre`, `reste` , `date_versement`, `mode_paiment`, `cree_le`) VALUES ( '$recu', '$fecha_hoy', '$letype','$attestation','$police', '$matricule', '$produit','$assure','$du','$au', '$totale', '$espece', '$cheque', '$autre' , '$reste', '$date_versement', '$mode_paiment','$cree_le')";

                $result = mysqli_query($conn, $query);
                
                if (! empty($result)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                    header("Location: index.php?mensaje=ok&respuesta=" . $type . " => " . $message);
                } else {
                    $type = "error";
                    $otro = mysqli_error($conn);
                    $message = "Problem in Importing Excel Data";
                    echo " " . $otro;
                   // header("Location: index.php?mensaje=ok&respuesta=" . $type . " => " . $message . " ==> " . $otro);
                }
            }
        }
        
    }
}
else
{ 
    $type = "error";
    $message = "Invalid File Type. Upload Excel File.";
    header("Location: index.php?mensaje=ok&respuesta=" . $type . " => " . $message);
}
}
?>