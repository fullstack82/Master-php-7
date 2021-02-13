<?php

// Borrar cookies y ponerles caducidad. Para borrar una cookie tienes que ponerle caducidad, sino no se borrara;
if ($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time() - 100);
}


// Redireccion
header('Location:ver_cookies.php');
