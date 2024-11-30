<?php
require_once("c://xampp/htdocs/sistemaventa/login/view/head/head.php");
session_start();
if (!empty($_SESSION['usuario'])) {
    header("Location:panel_control.php");
}
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/sistemaventa/login/index.php">
            <i class="fa-solid fa-car car-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Página principal en CarCom
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-0">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-0">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña ('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-0">
            <label for="exampleInputPassword1" class="form-label">Repeat the password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña ('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if (!empty($_GET['error'])): ?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            </div>
        <?php endif; ?>
        <div class="d-grid gap-0">
            <button>
                <h1>
                    Crear cuenta
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="0.575em" viewBox="0 0 612 612"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                        </svg>
                    </span>
                </h1>
            </button>
        </div>
        <div class="content home">
            <a href="google-oauth.php" class="google-login-btn">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 488 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                    </svg>
                </span>
                Login with Google
            </a>

        </div>
    </form>
    <div class="login col-3 mt-0">
        Tienes una cuenta? <a href="/sistemaventa/login/view/home/login.php" style="text-decoration: none">Inicia sesion</a>
    </div>
</div>
<style>
    .icon .car-icon {
        font-size: 50px;
        margin-bottom: 10px;
        color: white;
    }

    .icon .car-icon:hover {
        outline: 2px solid orangered;
        /* Cambia el color del borde a aqua */
        outline-offset: 2px;
        /* Ajusta la distancia del borde */
    }

    .btn-primary {
        position: relative;
    }

    .btn-primary:hover {
        outline: 2px solid aqua;
        /* Cambia el color del borde a aqua */
        outline-offset: 2px;
        /* Ajusta la distancia del borde */
    }

    * {
        box-sizing: border-box;
    }

    body {
        background-color: #ca6454;
        margin: 0;
        font-family: "Times New Roman", Times, serif;
    }

    .content {
        max-width: 400px;
        width: 100%;
        height: 100vp;
        margin: 50px auto 15px auto;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        padding: 10px;
    }

    .h1 {
        text-align: center;
        font-size: 24px;
        font-weight: 800;
        margin: 0 0 25px 0;
        color: #3b4252;
    }

    .h1 .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background-color: #9196a5;
        margin-left: 5px;
        font-size: 14px;
    }

    .button h1 .icon svg {
        fill: #fff;
    }

    .button .login-txt {
        margin: 30px;
        padding: 15px 0 25px 0;
        color: #3b4252;
    }

    .content .google-login-btn {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-size: 12px;
        font-weight: 500;
        color: #fff;
        width: 100%;
        overflow: hidden;
        border-radius: 5px;
        background-color: #d6523e;
        cursor: pointer;
    }

    .content .google-login-btn .icon {
        display: inline-flex;
        height: 100%;
        padding: 15px 20px;
        align-items: center;
        justify-content: center;
        background-color: #cf412c;
        margin-right: 15px;
    }

    .content .google-login-btn .icon svg {
        fill: #fff;
    }

    .content .google-login-btn:hover {
        background-color: #d44a36;
    }

    .content .google-login-btn:hover .icon {
        background-color: #c63f2a;
    }

    .content .profile-picture {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 15px 0 25px 0;
    }

    .content .profile-picture img {
        width: 100%;
        max-width: 100px;
        border-radius: 50%;
    }

    .content .profile-details {
        display: flex;
        flex-flow: column;
        padding: 10px 0;
    }

    .content .profile-details>div {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #f1f2f5;
        margin-bottom: 15px;
        padding-bottom: 15px;
    }

    .content .profile-details>div .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #9196a5;
        margin-right: 15px;
        font-size: 12px;
    }

    .content .profile-details>div .icon svg {
        fill: #fff;
    }

    .content .profile-details>div strong {
        display: block;
        font-size: 12px;
        font-weight: 400;
    }

    .content .profile-details>div:last-child {
        border-bottom: none;
    }

    .content .logout-btn {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-size: 12px;
        font-weight: 200;
        color: #fff;
        width: 100%;
        overflow: hidden;
        border-radius: 5px;
        background-color: #db5d36;
        cursor: pointer;
    }

    .content .logout-btn .icon {
        display: inline-flex;
        height: 100%;
        padding: 15px 20px;
        align-items: center;
        justify-content: center;
        background-color: #d24e26;
        margin-right: 15px;
    }

    .content .logout-btn .icon svg {
        fill: #fff;
    }

    .content .logout-btn:hover {
        background-color: #d9562d;
    }

    .content .logout-btn:hover .icon {
        background-color: #c94b24;
    }

    .custom-button {
        background-color: #007bff;
        /* Color de fondo */
        border: none;
        /* Sin borde */
        color: white;
        /* Color del texto */
        padding: 20px 30px;
        /* Espaciado interno */
        font-size: 12px;
        /* Tamaño de la fuente */
        cursor: pointer;
        /* Cursor de puntero al pasar el ratón */
        display: flex;
        /* Flexbox para alinear el contenido */
        align-items: center;
        /* Alinear verticalmente */
        justify-content: center;
        /* Alinear horizontalmente */
    }

    .custom-button:hover {
        background-color: #0056b3;
        /* Color de fondo al pasar el ratón */
    }

    .button-text {
        margin: 0;
        /* Eliminar márgenes */
        display: flex;
        /* Flexbox para alinear el texto y el ícono */
        align-items: center;
        /* Alinear verticalmente */
    }

    .icon {
        margin-left: -20px;
        /* Espaciado entre el texto y el ícono */
    }

    .icon svg {
        fill: #0056b3;
        /* Color del ícono */
    }
</style>

<?php
require_once("c://xampp/htdocs/sistemaventa/login/view/head/footer.php");
?>