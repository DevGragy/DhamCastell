<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    //Mensaje maximo de 70 Caracteres
    $mensaje = wordwrap($mensaje, 70, "\r\n");
    $success = mail("lanavarrogs@gmail.com",$asunto, $mensaje);
    if($success){
        $response = array(
            'respuesta' => 'correcto'
        );
    }else{
        $response = array(
            'respuesta' => 'error'
        );
    }
    echo json_encode($respuesta);
?>

