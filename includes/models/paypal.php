<?php
header('Access-Control-Allow-Origin: *');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

    $email = $_POST['email'];
    
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'dhamcastell.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dhamcontacto@dhamcastell.com';                     // SMTP username
    $mail->Password   = '_1An%kvSbovb';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dhamcontacto@dhamcastell.com', 'Dham Castell');
    $mail->addAddress('lanavarrogs@gmail.com', '');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Confirmacion de Pago";
    $mail->Body    =  "<h1>Transaccion Exitosa</h1> <p>Su pago ha sido realizado satisfactoriamente cualquier duda o aclaracion favor de contactar al correo dhamcontacto@dhamcastell.com</p>";

    $success = $mail->send();
    if($success){
        $response = array(
            'respuesta' => 'correcto'
        );
    }else{
        $response = array(
            'respuesta' => 'error'
        );
    }
    echo json_encode($response);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

