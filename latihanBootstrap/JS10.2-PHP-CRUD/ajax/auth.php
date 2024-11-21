<?php 
// membuat token keamanan ajax request (csrf token)
session_start();
if (empty($_SESSION['Csrf_token'])) {
    $_SESSION['Csrf_token'] = bin2hex(random_bytes(32));
}
?>