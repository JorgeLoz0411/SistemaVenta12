<?php
// Inicializar la sesión
session_start();
// Incluir el autoload de Composer
require_once("c://xampp/htdocs/sistemaventa/login/vendor/autoload.php");

// Importar las clases necesarias
use Google_Client;
use Google_Service_Oauth2;


// Actualiza las siguientes variables
$google_oauth_client_id = 'YOUR_CLIENT_ID';
$google_oauth_client_secret = 'YOUR_CLIENT_SECRET';
$google_oauth_redirect_uri = 'http://localhost/google-login/google-oauth.php'; // URI de redirección absoluta

// Crear el objeto Google Client
$client = new Google_Client();
$client->setClientId($google_oauth_client_id);
$client->setClientSecret($google_oauth_client_secret);
$client->setRedirectUri($google_oauth_redirect_uri);
$client->addScope('https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile');

// Si el parámetro code capturado existe y es válido
if (isset($_GET['code']) && !empty($_GET['code'])) {
    // Intercambiar el código de autorización por un token de acceso
    $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($accessToken);

    // Asegurarse de que el token de acceso sea válido
    if (isset($accessToken['access_token']) && !empty($accessToken['access_token'])) {
        // Ahora que tenemos un token de acceso, podemos obtener los datos del perfil del usuario
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // Asegurarse de que los datos del perfil existan
        if (isset($google_account_info->email)) {
            // Autenticar al usuario
            session_regenerate_id();
            $_SESSION['google_loggedin'] = TRUE;
            $_SESSION['google_email'] = $google_account_info->email;
            $_SESSION['google_name'] = $google_account_info->name;
            $_SESSION['google_picture'] = $google_account_info->picture;

            // Redirigir a la página de perfil
            header('Location: profile.php');
            exit;
        } else {
            exit('¡No se pudo recuperar la información del perfil! Por favor, inténtalo de nuevo más tarde.');
        }
    } else {
        exit('¡Token de acceso inválido! Por favor, inténtalo de nuevo más tarde.');
    }
} else {
    // Redirigir a la página de autenticación de Google
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit;
}
