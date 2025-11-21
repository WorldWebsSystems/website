<?php
    setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
    date_default_timezone_set('America/Caracas');

    $asunto = "Solicitud de registro de Usuario\n";
    $mensaje = "La solicitud de registro del perfil ha sido efectuada, conforme a los siguiente datos de contacto:\n";
    $mensaje .= "\n";
    $mensaje .= "Siglas: ".$siglas."\n";
    $mensaje .= "Nombre: ".$nombre."\n";
    $mensaje .= "E-Mail: ".$email."\n";
    $mensaje .= "Teléfonos: ".$celular . ", " . $telefono."\n";
    $mensaje .= "Servicio solicitado: ".$servicio."\n";
    $mensaje .= "Plan solicitado: ".$plan."\n";
    $mensaje .= "\n";
    $mensaje .= "En las próximas horas, el personal de la CMATIC Servers & Hostings efectuará la verificación de la autenticidad los datos de contacto, anteriormente indicados por usted, y se le enviará un correo electrónico informándole a usted sobre la aprobación de dicha verificación.\n";
    $mensaje .= "\n";
    $mensaje .= "Para soporte o cualquier consulta que desee formularnos, puede contactarnos a:\n";
    $mensaje .= "E-mail: info@tuww.net\n";
    $mensaje .= "\n";
    $mensaje .= "Nota: no responda a este correo electrónico, porque no es revisado por nosotros.\n";
    $mensaje .= "Su dirección Ip: ".$ip."\n";
    $mensaje .= "Su localización: ".$ciudad.", ".$pais."\n";

    $emailheader = "From: CMATIC Servers y Hostings <no-responder@tuww.net> \r\n";

    $mensaje = utf8_encode($mensaje);

    $mensaje2 = $mensaje . "\n";
    $mensaje2 .= "\n";
    $mensaje2 .= "-----------------------------------------------------------\n";
    $mensaje2 .= "Para uso de la administración de CMATIC Server y Hostings:\n";
    $mensaje2 .= "\n";
    $mensaje2 .= "Aprobar registro del perfil solicitado:\n";
    $mensaje2 .= "https://tuww.net/aprueba_registro.php?id=".$id."\n";

    mail("info@tuww.net", $asunto, $mensaje2, $emailheader);

    $mensaje .= "\n";
    $mensaje .= "\n";
    $mensaje .= "-----------------------------------------------------------\n";
    $mensaje .= "\n";
    $mensaje .= "Confirmar correo electrónico del perfil solicitado:\n";
    $mensaje .= "https://tuww.net/confirma_correo.php?id=".$id."&email=".$email."\n";

    mail($email, $asunto, $mensaje, $emailheader);

?>