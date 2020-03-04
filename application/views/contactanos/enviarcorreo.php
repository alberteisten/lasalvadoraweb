<?php
echo "entro aqui";
$destino = "sistemas@lasalvadorahnos.com";
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$email_to = "lasalvadorahnossrl@gmail.com";
$email_from = $_POST['correo'];
$subject = "Mensaje desde la web www: lasalvadorahnos.com";

$contenido="Nombre: " . $nombre . "\nCelular: " . $celular . "\nCorreo " . $correo . "\nTelefono: " . $telefono."\nMensaje: " .$mensaje ;
//echo $contenido;


if( mail($email_to, $subject, $contenido,$email_from)){
        echo "Su solicitud fue enviada correctamente, le responderemos en breve";
	   
    }
else{
        echo "Su solicitud no pudo ser enviada, intentelo de nuevo mas tarde";
    }
?>



