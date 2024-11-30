<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId(getenv('GOOGLE_CLIENT_ID'));
$google_client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
$google_client->setRedirectUri('http://127.0.0.1/sistemaventa12/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');


$alert = '';

if (isset($_GET['code'])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $google_service = new Google_Service_Oauth2($google_client); 
        $data = $google_service->userinfo->get();

        require_once "conexion.php";
        $email = $data['email'];

        $stmt = $conection->prepare("SELECT idusuario, nombre, correo, rol FROM usuario WHERE correo = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Usuario existe en la base de datos
            $user_data = $result->fetch_assoc();
            $_SESSION['active'] = true;
            $_SESSION['idUser'] = $user_data['idusuario'];
            $_SESSION['nombre'] = $user_data['nombre'];
            $_SESSION['email']  = $user_data['correo'];
            $_SESSION['user']   = $data['given_name'];
            $_SESSION['rol']    = $user_data['rol'];
            $_SESSION['rol_name'] = 'Usuario';

            header('location: sistema/');
            exit();
        } else {
            // Usuario no está registrado, mostrar mensaje de error
            $alert = 'No tienes credenciales permitidas para ingresar a esta sección.';
        }
    }
}

if (!empty($_SESSION['active'])) {
    header('location: sistema/');
    exit();
} else {
    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = 'Ingrese su usuario y contraseña';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conection, $_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conection, $_POST['clave']));

            $stmt = $conection->prepare("SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.idrol, r.rol 
                                          FROM usuario u 
                                          INNER JOIN rol r
                                          ON u.rol = r.idrol
                                          WHERE u.usuario = ? AND u.clave = ?");
            $stmt->bind_param('ss', $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email']  = $data['correo'];
                $_SESSION['user']   = $data['usuario'];
                $_SESSION['rol']    = $data['idrol'];
                $_SESSION['rol_name'] = $data['rol'];

                header('location: sistema/');
                exit();
            } else {
                $alert = 'El Usuario o contraseña son incorrectos';
                session_destroy();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login | Sistema de ventas</title>
    <link rel="stylesheet" type="text/css" href="/sistemaventa12/css/style.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function showAlert(message) {
            var alertBox = document.querySelector('.alert');
            if (alertBox) {
                alertBox.textContent = message; // Establece el mensaje de alerta
                alertBox.style.display = 'block'; // Muestra el contenedor de alerta
            } else {
                console.error('Alert box not found');
            }
        }

        function hideAlert() {
            var alertBox = document.querySelector('.alert');
            if (alertBox) {
                alertBox.style.display = 'none'; // Oculta el contenedor de alerta
            } else {
                console.error('Alert box not found');
            }
        }

        function togglePasswordVisibility() {
            var passwordField = document.querySelector('input[name="clave"]');
            var eyeIcon = document.querySelector('.fa-eye, .fa-eye-slash');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</head>
<body>
    <section id="container">
        <form action="" method="post">
            <h3>Iniciar Sesión</h3>
            <img src="/sistemaventa12/login/asset/img/logoamarok.png" alt="Login">
            <div class="user-container">
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
            </div>
            <div class="password-container">
                <input type="password" name="clave" placeholder="Contraseña" class="form-control">
                <i class="fas fa-eye" onclick="togglePasswordVisibility()"></i>
            </div>
            <div class="alert"><?php echo isset($alert) ? "<script>showAlert('$alert');</script>" : ''; ?></div>
            <input type="submit" value="Ingresar">
            <div class="content home">
                <div class="button-container">
                    <?php if (!isset($_SESSION['active'])): ?>
                        <a href="<?php echo $google_client->createAuthUrl(); ?>" class="google-login-btn">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                            </span>
                            Login with Google
                        </a>
                    <?php endif; ?>
                    <a href="/sistemaventa12/login/view/head/header.php" class="btn btn-dark">Return to Main Page</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
