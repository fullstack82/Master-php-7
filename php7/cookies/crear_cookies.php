<?php 

/* COOKIES: 
PHP tiene soporte para las «cookies» de HTTP de forma transparente. Las cookies son un mecanismo por el que se almacenan datos
en el navegador remoto para monitorizar o identificar a los usuarios que vuelvan al sito web. Las cookies se pueden configurar
con las funciones setcookie() o setrawcookie().
*/

// Crear cookies 
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);



// Cookie basica
setcookie("micookie", "valor de mi cookie");


// Cookie con expiración (un año);

setcookie("unyear", "365 dias", time() + (60*60*24*365));
header('Location:ver_cookies.php');
