<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userMessage = $_POST['userMessage'];

    // Simular respuestas del chatbot
    $botResponse = '';

    // Palabras clave y respuestas
    if (stripos($userMessage, 'hola') !== false) {
        $botResponse = 'Hola, ¿cómo puedo ayudarte hoy?';
    } elseif (stripos($userMessage, 'buenos dias') !== false) {
        $botResponse = '¡Buenos días! ¿En qué puedo asistirte?';
    } elseif (stripos($userMessage, 'buenas tardes') !== false) {
        $botResponse = 'Buenas tardes, ¿cómo puedo ayudarte?';
    } elseif (stripos($userMessage, 'buenas noches') !== false) {
        $botResponse = '¡Buenas noches! ¿En qué puedo ayudarte antes de que termine tu día?';
    } elseif (stripos($userMessage, 'adios') !== false) {
        $botResponse = 'Adiós, que tengas un excelente día.';
    } elseif (stripos($userMessage, 'hasta luego') !== false) {
        $botResponse = '¡Hasta luego! Vuelve cuando lo necesites.';
    } elseif (stripos($userMessage, 'nos vemos') !== false) {
        $botResponse = '¡Nos vemos pronto! Estaré aquí cuando me necesites.';
    } elseif (stripos($userMessage, 'gracias') !== false) {
        $botResponse = '¡De nada! Estoy aquí si necesitas algo más.';
    } elseif (stripos($userMessage, 'te agradezco') !== false) {
        $botResponse = '¡Con gusto! Siempre estoy aquí para ayudar.';
    } elseif (stripos($userMessage, 'cómo estas') !== false) {
        $botResponse = '¡Estoy bien! Gracias por preguntar, ¿cómo puedo ayudarte?';
    } elseif (stripos($userMessage, 'producto') !== false) {
        $botResponse = 'Nuestro producto estrella es el modelo X. ¿Te gustaría saber más?';
    } elseif (stripos($userMessage, 'precio') !== false) {
        $botResponse = 'El precio de este producto es $99.99. ¿Te interesa?';
    } elseif (stripos($userMessage, 'descuento') !== false) {
        $botResponse = 'Actualmente ofrecemos un 20% de descuento en todos nuestros productos.';
    } elseif (stripos($userMessage, 'envío') !== false) {
        $botResponse = 'Ofrecemos envío gratuito en pedidos mayores a $50.';
    } elseif (stripos($userMessage, 'disponibilidad') !== false) {
        $botResponse = 'Nuestro horario de atención es de lunes a viernes, de 9:00 a 18:00.';
    } elseif (stripos($userMessage, 'devolución') !== false) {
        $botResponse = 'Ofrecemos un periodo de devolución de 30 días sin preguntas.';
    } elseif (stripos($userMessage, 'garantía') !== false) {
        $botResponse = 'Este producto incluye una garantía de 2 años.';
    } elseif (stripos($userMessage, 'factura') !== false) {
        $botResponse = 'Puedes solicitar una factura desde tu perfil de usuario en nuestra web.';
    } elseif (stripos($userMessage, 'tiempo de entrega') !== false) {
        $botResponse = 'El tiempo estimado de entrega es de 3 a 5 días hábiles.';
    } elseif (stripos($userMessage, 'actualización') !== false) {
        $botResponse = 'Puedes verificar actualizaciones en la configuración de la aplicación.';
    } elseif (stripos($userMessage, 'soporte') !== false) {
        $botResponse = 'Nuestro equipo de soporte técnico está disponible las 24 horas.';
    } elseif (stripos($userMessage, 'problema') !== false) {
        $botResponse = 'Lamento escuchar eso. Por favor, descríbeme el problema y te ayudaré.';
    } elseif (stripos($userMessage, 'error') !== false) {
        $botResponse = 'Por favor, describe el error o envía una captura de pantalla para ayudarte mejor.';
    } elseif (stripos($userMessage, 'suscripción') !== false) {
        $botResponse = 'Puedes suscribirte a nuestro servicio anual con un ahorro del 15%.';
    } elseif (stripos($userMessage, 'cancelar pedido') !== false) {
        $botResponse = 'Puedes cancelar tu pedido antes de que se procese. ¿Te ayudo con eso?';
    } elseif (stripos($userMessage, 'contacto') !== false) {
        $botResponse = 'Puedes contactarnos a través de nuestro número de soporte: 123-456-789.';
    } elseif (stripos($userMessage, 'horario de atención') !== false) {
        $botResponse = 'Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.';
    } elseif (stripos($userMessage, 'rastrear pedido') !== false) {
        $botResponse = 'Puedes rastrear tu pedido desde tu cuenta o con el número de seguimiento que te enviamos.';
    } elseif (stripos($userMessage, 'ayuda') !== false) {
        $botResponse = 'Estoy aquí para ayudarte. ¿Qué necesitas saber?';
    } elseif (stripos($userMessage, '¿Cuáles son tus productos?') !== false) {
        $botResponse = 'Ofrecemos una variedad de productos. ¿Te gustaría saber más sobre alguno en particular?';
    } elseif (stripos($userMessage, 'producto X') !== false) {
        $botResponse = 'El producto X es uno de nuestros más vendidos. ¿Te gustaría conocer sus características?';
    } elseif (stripos($userMessage, 'descuentos') !== false) {
        $botResponse = 'Actualmente ofrecemos un 20% de descuento en algunos productos seleccionados.';
    } elseif (stripos($userMessage, 'formas de pago') !== false) {
        $botResponse = 'Puedes pagar con tarjeta de crédito, débito, PayPal y transferencias bancarias.';
    } elseif (stripos($userMessage, 'envíos') !== false) {
        $botResponse = 'Sí, hacemos envíos a nivel nacional e internacional.';
    } elseif (stripos($userMessage, 'tiempo de entrega') !== false) {
        $botResponse = 'El tiempo de entrega estándar es de 3 a 5 días hábiles.';
    } elseif (stripos($userMessage, 'rastrear pedido') !== false) {
        $botResponse = 'Claro, puedes rastrear tu pedido desde tu cuenta o con el número de seguimiento que te enviamos.';
    } elseif (stripos($userMessage, 'problema con mi pedido') !== false) {
        $botResponse = 'Lo siento por los inconvenientes. ¿Podrías describirme el problema para que pueda ayudarte mejor?';
    } elseif (stripos($userMessage, 'producto dañado') !== false) {
        $botResponse = 'Lo siento mucho. Por favor, envía una foto del producto dañado y te ayudaremos con una solución.';
    } elseif (stripos($userMessage, 'no he recibido mi pedido') !== false) {
        $botResponse = 'Lamento escuchar eso. ¿Puedes proporcionarme tu número de pedido para rastrear el estado?';
    } elseif (stripos($userMessage, 'devolver un producto') !== false) {
        $botResponse = 'Puedes devolver el producto dentro de los 30 días posteriores a la compra. Te enviaré las instrucciones.';
    } elseif (stripos($userMessage, 'asistencia técnica') !== false) {
        $botResponse = 'Nuestro equipo de soporte técnico está disponible las 24 horas. ¿En qué puedo asistirte?';
    } elseif (stripos($userMessage, 'mi producto no funciona') !== false) {
        $botResponse = 'Lo siento por los problemas. ¿Podrías especificar qué está fallando para ayudarte mejor?';
    } elseif (stripos($userMessage, 'reiniciar el producto') !== false) {
        $botResponse = 'Para reiniciar el producto, mantén presionado el botón de encendido durante 10 segundos. ¿Funcionó?';
    } elseif (stripos($userMessage, 'actualizar el software') !== false) {
        $botResponse = 'Puedes actualizar el software desde la configuración del dispositivo. ¿Te gustaría que te guíe paso a paso?';
    } elseif (stripos($userMessage, 'manuales') !== false) {
        $botResponse = 'Sí, puedes descargar los manuales desde nuestra página web. ¿Te envío el enlace?';
    } elseif (stripos($userMessage, 'contactar con soporte técnico') !== false) {
        $botResponse = 'Puedes contactar con nuestro equipo de soporte técnico por chat, teléfono o correo electrónico.';
    } elseif (stripos($userMessage, 'dónde están ubicados') !== false) {
        $botResponse = 'Nuestra oficina principal está en Madrid, pero ofrecemos servicios a nivel mundial.';
    } elseif (stripos($userMessage, 'política de devoluciones') !== false) {
        $botResponse = 'Puedes devolver el producto dentro de los 30 días si no estás satisfecho.';
    } elseif (stripos($userMessage, 'cancelar pedido') !== false) {
    	$botResponse = 'Puedes caancelar tu pedido en la opcion de cancelar compra el boton rojo y se volvera el dinero.';
	} else {
        $botResponse = 'Lo siento, no entiendo tu mensaje. ¿Podrías ser más específico?';
    }

    // Devolver respuesta
    echo $botResponse;
}
?>