<?php

// Reemplaza el valor de $TOKEN con tu token de autenticación
$TOKEN = "123456789:abcdefghijklmnopqrstuvwxyz123456";

// Reemplaza el valor de $CHAT_ID con el ID de chat del usuario o grupo al que quieres enviar el mensaje
$CHAT_ID = "12345678";

// Reemplaza el valor de $TEXT con el mensaje que quieres enviar
$TEXT = "Hola, este es un mensaje de prueba enviado desde PHP";

// Construye la URL para enviar un mensaje a través de la API de Telegram
$url = "https://api.telegram.org/bot" . $TOKEN . "/sendMessage?chat_id=" . $CHAT_ID . "&text=" . urlencode($TEXT);

// Envía el mensaje a través de la API de Telegram
file_get_contents($url);
