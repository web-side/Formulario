<?php
    
    $destinatario = 'lareplica931472@gmail.com';
    
    // Este es al correo al que se enviara el mensaje
        
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina E-coDevWeb.";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
    

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('Correo enviado Exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>