<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require('../conexion.php');



$warning = 60 * 60 * 24 * 3;
$today = date("U");
$sql = "SELECT * FROM proyectosis";
$querydate   =  mysqli_query($connection,$sql) or die (mysqli_error($connection));
// try {
    while ($roedate = mysqli_fetch_array($querydate))
    {
     $date1 = $roedate['au'];
                $date=strtotime($date1.' -3 days'); // Remove the date
                echo '<br>';
               //cho  $date;
                $today = strtotime(date('Y-m-d'));
              //echo $today = strtotime(date('Y-m-d')); // User strtotime

                if ($date==$today) {
//Create an instance; passing `true` enables exceptions

                    $mail = new PHPMailer(true);
                    $to = "msb.tesla@gmail.com";

                                //Server settings
                                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = 'msb.caixa@gmail.com';                     //SMTP username
                                $mail->Password   = '93345900';                               //SMTP password
                                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                                //Recipients
                                $mail->setFrom('msb.caixa@gmail.com', 'mohammed');
                                $mail->addAddress($to, 'sebti');     //Add a recipient
                                //$mail->addAddress('msb.tesla@gmail.com');               //Name is optional
                               // $mail->addReplyTo('msb.duck@gmail.com', 'Information');
                               // $mail->addCC('sebti74@gmail.com');
                               // $mail->addBCC('sebti.benzakour.mohammed@iescamas.es');

                                //Attachments
                                //  $mail->addAttachment('C:\Users\daw44\Downloads\Tema5.pdf');  
                              //  $mail->addAttachment($enviarFichero);         //Add attachments
                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = utf8_decode("Email notification d´echeance de la police d´assurance");
                                $mail->Body = utf8_decode("Email notification d´echeance de la police d´assurance de client assuré :  " . $roedate['assure'] . 
                                    " dans laquelle sa police d´assurance est : " . $roedate['police'] . " et sa date d´echeance est : " . $roedate['au']);
                                $mail->AltBody = utf8_decode("Email notification d´echeance de la police d´assurance");

                                //  $mail->Subject = 'Here is the subject';
                                // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                $mail->send();
                               // echo 'El Mensage se ha enviado a su destinatario';
                                //echo '<script> alert("El Mensage se ha enviado a su destinatario");
                                   //      location.href="../index.php"; </script>';
                                
                                header("Location: ../index.php?mensaje=ok&respuesta=Email envoyé correctement");

                            }else{

                                header("Location: ../index.php?mensaje=ok&respuesta=Rien n´est envoyé");
                            }

                       } 
                //    }catch (Exception $e) {
                //        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                //    header("Location: ../index.php?mensaje=ok&respuesta=Rien n´est envoyé");
                // }
                ?>

