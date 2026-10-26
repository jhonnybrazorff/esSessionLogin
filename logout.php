<?php
session_start();

// Svuota i dati della sessione.
$_SESSION = [];

// Elimina anche il cookie di sessione, se i cookie sono utilizzati.
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();

    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

session_destroy();

header('Location: login.php');
exit;
