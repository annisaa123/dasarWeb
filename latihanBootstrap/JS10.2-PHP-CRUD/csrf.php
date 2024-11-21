<?php
header('Content-Type: application/json');

// Mengirimkan token keamanan
if (empty($_SESSION['Csrf_token'])) {
    $_SESSION['Csrf_token'] = bin2hex(random_bytes(32));
}

$headers = apache_request_headers();
if (isset($headers['Csrf_token'])) {
    if ($headers['Csrf_token'] !== $_SESSION['Csrf_token']) {
        exit(json_encode(['error' => 'Wrong CSRF token']));
    }
}else{
    exit(json_encode(['error' => 'No CSRF token.']));
}
?>