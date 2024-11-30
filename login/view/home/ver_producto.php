<?php
// ver_producto.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Ver Producto</title>
    <link rel="stylesheet" href="/sistemaventa12/login/asset/css/styles.css"> <!-- Asegúrate de incluir tu archivo CSS si es necesario -->
    <style>
        .container {
            text-align: center;
            padding: 20px;
            color: white;
        }

        .img-product {
            max-width: 100%;
            height: 450px;
            display: block;
            margin: auto;
        }

        body {
            background-image: url(/sistemaventa12/login/asset/img/fondo.avif);
            background-size: cover;
            background-position: center;
        }

        .btn-white {
            background-color: white;
            color: black;
            /* Adjust this if you want a different text color */
            border: 1px solid black;
            /* Optional: adds a border */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Ver Producto</h2>
        <img src="/sistemaventa12/login/asset/img/ventas3.png" alt="Imagen del Producto" class="img-product">
        <div class="text-center mt-6">
            <a href="/sistemaventa12/login/index.php#productos" class="btn btn-white">Return to Products</a>
        </div>
    </div>
</body>

</html>
