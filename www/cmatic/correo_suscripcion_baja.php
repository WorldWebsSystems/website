<?php
    setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
    date_default_timezone_set('America/Caracas');

    $asunto = "Baja de Suscripción al proyecto DescargaGratis.club\n";
    $mensaje = "La suscripción del correo electrónico al proyecto DescargaGratis.club ha sido cancelada con éxito, ya no recibirá correo alguno con información correspondiente a www.descargagratis.club.\n";
    $mensaje .= "\n";
    include 'pie_correo.php';

    $mensaje = utf8_encode($mensaje);

    mail("richardrodr@gmail.com", $asunto, $mensaje, $emailheader);
    mail($email, $asunto, $mensaje, $emailheader);

?>