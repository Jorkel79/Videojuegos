

<?php
if (session_status() == PHP_SESSION_NONE) {
    // Inicia la sesión solo si no está iniciada
    session_start();
}



//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('569620338448-i1kbklanfgqhpoq749a914d999vluohd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/MVC_PROYECTO_1/view/username/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
