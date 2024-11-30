<?php
require_once("c://xampp/htdocs/sistemaventa12/login/view/head/head.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="head">
                <div class="logo">
                    <a href="#"><img src="/sistemaventa12/login/asset/img/Amarok.jpg" alt="Logo"></a>
                </div>

                <style>
                    /* Sobrescribir la fuente predeterminada de Bootstrap */
                    body,
                    .navbar,
                    .navbar-brand,
                    .nav-link,
                    .boton {
                        font-family: 'Times New Roman', Times, serif;
                    }

                    /* Estilo para el enlace con la clase boton */
                    .boton,
                    .navbar,
                    .navbar-brand,
                    .nav-link {
                        font-size: 12px;
                        /* Tamaño de fuente reducido */
                    }

                    /* Estilo para los enlaces de navegación */
                    .navbar-nav li a {
                        font-size: 12px;
                        /* Tamaño de fuente reducido */
                        /* Gradiente más claro y suave */
                        text-shadow: 2px 2px 4px #000000, 0 0 10px #FFD700, 0 0 20px #FFD700;
                        /* Sombra negra y resplandor dorado */
                        padding: 10px;
                        text-decoration: none;
                        border: 1px solid transparent;
                        transition: all 0.3s ease;
                        display: block;
                    }

                    /* Estilo para el hover */
                    .navbar-nav li a:hover {
                        border: 1px solid black;
                        /* Borde negro completo al hacer hover */
                        outline: 2px solid #8B7500;
                        /* Cambia el color del borde a dorado */
                        outline-offset: 2px;
                        /* Ajusta la distancia del borde */
                    }

                    .fondo_menu {
                        background-image: linear-gradient(to bottom, #663333, #954545);
                        background-attachment: fixed;
                        background-size: 100% 100%;
                    }
                </style>

                <div class="fondo_menu">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg navbar-dark background-color: #8B7500">
                            <div class="container-fluid">
                                <?php if (empty($_SESSION['usuario'])): ?>
                                    <a href="" class="boton">Página principal</a>

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item"><a class="nav-link" href="#somos">About</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#productos">Portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#servicios">Services</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contacto">Contact</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                        </ul>
                                        <a href="/sistemaventa12/index.php" class="boton">Login</a>

                                    </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark bg-black px-3 mb-3"></nav>

                <!-- Masthead-->
                <header class="header">
                    <div class="content">
                        <h1 class="fw-bold">Bienvenidos a Amarok!</h1>
                        <br>
                        <br>
                        <div class="border p-3"> En Inversiones Tecnológicas Amarok, nos especializamos en la venta y distribución de tecnología de vanguardia, sistemas avanzados de rastreo satelital y desarrollo de software a medida. Nuestro compromiso es ofrecer soluciones innovadoras y de alta calidad para satisfacer las necesidades tecnológicas de nuestros clientes. Con un enfoque en la excelencia y la satisfacción del cliente, nos esforzamos por ser su socio de confianza en el mundo de la tecnología. Descubra cómo podemos ayudarle a impulsar su negocio con nuestras soluciones tecnológicas líderes en el mercado. <code></code>
                </header>
            </div>
        </div>

        <!-- About-->
        <section id="somos" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/sistemaventa12/login/asset/img/fondo1.jpg); background-size: cover; background-position: center; color: white; height: 100vh; max-width: 100%; margin: auto;">
            <div class="container text-center">
                <article>
                    <div class="box-content">
                        <h3 class="title text-center fw-bold mb-4">¿Quiénes Somos?</h3>
                        <p class="border p-3">En Inversiones Tecnológicas Amarok, nos especializamos en la venta y distribución de tecnología de vanguardia, sistemas avanzados de rastreo satelital y desarrollo de software a medida. Nuestro compromiso es ofrecer soluciones innovadoras y de alta calidad para satisfacer las necesidades tecnológicas de nuestros clientes.</p>
                        <hr>
                        <h3 class="title text-center fw-bold mb-4">Nuestra Misión</h3>
                        <p class="border p-3">Nos dedicamos a proporcionar tecnologías de última generación que impulsen la eficiencia y el crecimiento de su negocio. Nuestro objetivo es ser su socio de confianza en el mundo de la tecnología, brindando herramientas y servicios que optimicen sus operaciones y potencien su éxito.</p>
                    </div>
                    <hr>
                    <div class="text-center mt-6">
                        <a href="/sistemaventa12/login/index.php" class="btn btn-dark">Return to Main Page</a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section id="productos" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/sistemaventa12/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 100vh; width: 100%; margin: auto;">
            <div class="container text-center">
                <h3 class="title text-center fw-bold mb-4">Productos</h3>
                <p class="border p-3">“En nuestra empresa, ofrecemos productos de alta calidad, desde tecnología de rastreo satelital hasta herramientas de mercadotecnia innovadoras.”</p>

                <!-- Este div es para crear secciones individuales para mostrar los productos ofertados por la compañía -->
                <!-- Portfolio item 1-->
                <div class="row justify-content-center">
                    <div class="card" style="width: 22rem; margin: 5px;">
                        <img src="/sistemaventa12/login/asset/img/Seguridad.jpg" style="width: 200px; height: 100px; display: block; margin: auto;" alt="Imagen de seguridad">
                        <div class="card-body">
                            <h8 class="card-title">SEGURIDAD</h8>
                            <p class="border p-3">Nuestras cámaras de seguridad están diseñadas con alta resolución y capacidades de visión nocturna.</p>
                            <a href="/sistemaventa12/login/view/home/ver_producto.php" class="btn btn-dark stretched-link" style="width: 100%;">Ver</a>
                        </div>
                    </div>

                    <!-- Portfolio item 2-->
                    <div class="card" style="width: 22rem; margin: 5px;">
                        <img src="/sistemaventa12/login/asset/img/Electronica.jpg" style="width: 200px; height: 100px; display: block; margin: auto;" alt="Imagen de Electrónica">
                        <div class="card-body">
                            <h8 class="card-title">ELECTRÓNICA</h8>
                            <p class="border p-3">Esta categoría incluye los últimos dispositivos y gadgets que necesitas. Desde teléfonos inteligentes hasta sistemas de sonido de alta calidad.</p>
                            <div class="d-flex justify-content-between">
                                <a href="/sistemaventa12/login/view/home/ver_producto_2.php" class="btn btn-dark stretched-link">Ver P-1</a>
                                <a href="/sistemaventa12/login/view/home/ver_producto_3.php" class="btn btn-dark stretched-link" style="margin-left: 5px;">Ver P-2</a>
                                <a href="/sistemaventa12/login/view/home/ver_producto_4.php" class="btn btn-dark stretched-link" style="margin-left: 5px;">Ver P-3</a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio item 3-->
                    <div class="card" style="width: 22rem; margin: 5px;">
                        <img src="/sistemaventa12/login/asset/img/Software.png" style="width: 200px; height: 100px; display: block; margin: auto;" alt="Imagen de Software">
                        <div class="card-body">
                            <h8 class="card-title">SOFTWARE</h8>
                            <p class="border p-3">Nuestras soluciones de software diseñadas para optimizar y potenciar tu negocio. "Desde sistemas de gestión empresarial hasta herramientas específicas para tu industria.</p>
                            <div class="d-flex justify-content-between">
                                <a href="/sistemaventa12/login/view/home/ver_producto_5.php" class="btn btn-dark stretched-link">Ver P-1</a>
                                <a href="/sistemaventa12/login/view/home/ver_producto_6.php" class="btn btn-dark stretched-link" style="margin-left: 5px;">Ver P-2</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Link to return to the main page -->
                <div class="text-center mt-6">
                    <a href="/sistemaventa12/login/index.php" class="btn btn-dark">Return to Main Page</a>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section id="servicios" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/sistemaventa12/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 100vh; max-width: 100%; margin: auto;">
            <div class="container">
                <article class="text-center">
                    <h3 class="title text-center fw-bold mb-4">Nuestros Servicios</h3>
                    <p class="border p-3">En Amarok, ofrecemos soluciones integrales de rastreo satelital, venta de equipos de cómputo de alta gama, cámaras de seguridad y complementos gaming. Nuestro compromiso es brindar tecnología de vanguardia para satisfacer todas tus necesidades.</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <!-- Services item 1-->
                                <div class="card-body">
                                    <i class="fa-solid fa-laptop fa-2x mb-3" alt="Equipos de Cómputo"></i>
                                    <h4 class="title-card">Equipos de Computo</h4>
                                    <hr>
                                    <p class="border p-3"> La mejor oferta de laptops y equipos de mesa a tu disposición.</p>
                                    <hr>
                                    <a href="#" class="btn btn-dark stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-90">
                                <!-- Services item 2-->
                                <div class="card-body">
                                    <i class="fa-solid fa-camera fa-2x mb-3" alt="Cámaras para tu Negocio"></i>
                                    <h4 class="title-card">Cámaras para tu Negocio</h4>
                                    <hr>
                                    <p class="border p-3">Protegemos sus bienes con cámaras de última generación</p>
                                    <hr>
                                    <a href="#" class="btn btn-dark stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <!-- Services item 3-->
                                <div class="card-body">
                                    <i class="fa-solid fa-shield-halved fa-2x mb-3" alt="Seguridad 24/7"></i>
                                    <h4 class="title-card">Seguridad 24/7</h4>
                                    <hr>
                                    <p class="border p-3">Garantizamos la protección constante de sus bienes</p>
                                    <hr>
                                    <a href="#" class="btn btn-dark stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <!-- Services item 4-->
                                <div class="card-body">
                                    <i class="fa-solid fa-location-dot fa-2x mb-3" alt="Rastreo Satelital"></i>
                                    <h4 class="title-card">Rastreo Satelital</h4>
                                    <hr>
                                    <p class="border p-3"> Monitorea tus activos en tiempo real con nuestras avanzadas soluciones de rastreo satelital.</p>
                                    <hr>
                                    <a href="#" class="btn btn-dark stretched-link">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Contact-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->


        <section id="contacto" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/sistemaventa12/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 100vh; max-width: 100%; margin: auto;">
            <div class="container">
                <article class="text-center">
                    <h3 class="title text-center fw-bold mb-4">Contacto</h3>
                    <p class="border p-3">En Amarok, estamos aquí para ayudarte. Si tienes alguna pregunta o necesitas más información sobre nuestros servicios, no dudes en ponerte en contacto.</p>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.632456789!2d-73.1215182!3d7.1241079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6815631bfb2705%3A0x97884b83331c8918!2sEdificio%20Origami!5e0!3m2!1ses!2sco!4v1692350400000!5m2!1ses!2sco" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 mb-0">
                            <form id="contactForm" data-sb-form-api-token="deruhe" action="https://formsubmit.co/jor0411loz@gmail.com" method="POST">
                                <div class="row align-items-stretch mb-0">
                                    <div class="form-group mb-0">
                                        <div class="form-group">
                                            <!-- Name input-->
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" data-sb-validations="required" />
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Email address input-->
                                            <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                        </div>
                                        <div class="form-group mb-md-0">
                                            <!-- Phone number input-->
                                            <input class="form-control" id="phone" type="tel" name="phone" placeholder="Your Phone *" data-sb-validations="required" />
                                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                        </div>

                                        <!-- Message input-->
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                                    <div class="mb-0 form-check">
                                        <input type="checkbox" class="form-check-input" id="acepto" required aria-label="Acepto la política de privacidad">
                                        <label class="form-check-label" for="acepto">
                                            Acepto la <a href="/sistemaventa12/login/view/home/politica_privacidad.php" target="_blank">política de privacidad</a>
                                        </label>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center text-white mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit Button-->
                                    <button type="submit" class="btn btn-dark btn-sm">Send Message</button>
                                    <br>
                                    <div class="text-center mt-6">
                                        <a href="/sistemaventa12/login/index.php" class="btn btn-dark">Return to Main Page</a>
                                    </div>
                            </form>
                        </div>
                    </div>
        </section>



        <!-- Team-->
        <section id="team" class="content about py-5 bg-white d-flex align-items-center justify-content-center" style="background-image: url(/sistemaventa12/login/asset/img/fondo.avif); background-size: cover; background-position: center; color: white; height: 110vh; max-width: 100%; margin: auto;">
            <div class="container">
                <div class="text-center">
                    <h3 class="title text-center fw-bold mb-4">TechMinds Lab</h3>
                    <h3 class="section-subheading color:white">InventaPro "Professional Innovation in Inventory Management"</h3>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/sistemaventa12/login/asset/img/team/1.jpg" alt="..." />
                            <h5>Johan Martínez</h5>
                            <p class="text-muted">User Interface Designer</p>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Johan Manuel Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Johan Manuel LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/sistemaventa12/login/asset/img/team/4.jpg" alt="..." />
                            <h5>Johnatan Jiménez</h5>
                            <p class="text-muted">Business Analyst</p>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Johnatan Arley Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Johnatan Arley LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/sistemaventa12/login/asset/img/team/2.jpg" alt="..." />
                            <h5>William Montejo</h5>
                            <p class="text-muted">Business Analyst</p>
                            <a class="btn bg-white btn-social mx-3" href="#!" aria-label="William Antonio Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn bg-white btn-social mx-3" href="#!" aria-label="William Antonio LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/sistemaventa12/login/asset/img/team/3.jpg" alt="..." />
                            <h5>Jorge Lozano</h5>
                            <p class="text-muted">Project Manager</p>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Jorge Tulio Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn bg-white btn-social mx-2" href="#!" aria-label="Jorge Tulio LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center mt-8">
                        <a href="/sistemaventa12/login/index.php" class="btn btn-dark">Return to Main Page</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php else: ?>


    <div class="container">
        <div class="row">
            <div class="head">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <ul class="nav nav-pills">
                            <a href="" class="boton">ADMIN</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li><a href="/sistemaventa/login//categorias.php" class="boton">Categorias</a></li>
                                <li><a href="/sistemaventa/login//clientes.php" class="boton">Clientes</a></li>
                                <li><a href="/sistemaventa/login//configuracion.php" class="boton">Configuracion</a></li>
                                <li><a href="/sistemaventa/login//cotizaciones.php" class="boton">Cotizaciones</a></li>
                                <li><a href="/sistemaventa/login//cuentas_apartados.php" class="boton">Cuentas</a></li>
                                <li><a href="/sistemaventa/login//marcas.php" class="boton">Marcas</a></li>
                                <li><a href="/sistemaventa/login//productos.php" class="boton">Productos</a></li>
                                <li><a href="/sistemaventa/login//productos_vendidos.php" class="boton">Vendidos</a></li>
                                <li><a href="/sistemaventa/login//vender.php" class="boton">Ventas</a></li>
                            </ul>
                            <a href="/sistemaventa/login/view/home/logout.php" class="boton">Cerrar Sesion</a>
                            </nav>
                    </div>
                </div>
                <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark bg-black px-3 mb-3"></nav>
            </div>
        </div>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="footer fw-bold">
        © INVERSIONES TECNOLOGICAS AMAROK
    </footer>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            // Validaciones personalizadas
            let isValid = true;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            if (!name) {
                isValid = false;
                document.querySelector('[data-sb-feedback="name:required"]').style.display = 'block';
            }
            if (!email) {
                isValid = false;
                document.querySelector('[data-sb-feedback="email:required"]').style.display = 'block';
            }
            if (!phone) {
                isValid = false;
                document.querySelector('[data-sb-feedback="phone:required"]').style.display = 'block';
            }
            if (!message) {
                isValid = false;
                document.querySelector('[data-sb-feedback="message:required"]').style.display = 'block';
            }

            if (isValid) {
                this.submit(); // Envía el formulario si es válido
            }
        });
    </script>

    <style>
        /* Estilo base para los enlaces */
        .navbar-nav .boton {
            margin-left: 8px;
            margin-right: 11px;
            /* Ajusta el valor según tus necesidades */
            position: relative;
            text-decoration: none;
            color: white;
            /* Mantiene el color del texto original */
        }

        /* Estilo para el hover */
        .navbar-nav .boton::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: aqua;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        /* Estilo para el hover */
        .navbar-nav .boton:hover {
            box-shadow: 2px 2px 4px #000000, 0 0 10px #FFD700, 0 0 20px #FFD700;
            /* Sombra negra y resplandor dorado *
            /* Resplandor dorado */
            outline-offset: 2px;
            /* Ajusta la distancia del borde */
        }
    </style>
    <style>
        .boton {
            text-decoration: none;
            color: white;
            /* Dorado oscuro */
            /* Mantiene el color del texto original */
            position: relative;
        }

        .boton:hover {
            color: #8B7500;
            border: 1px solid #8B7500;
            /* Borde negro completo al hacer hover */
            outline: 2px solid black;
            /* Cambia el color del borde a dorado */
            outline-offset: 2px;
            /* Ajusta la distancia del borde */
        }

        .btn-dark {
            position: relative;
        }

        .btn.btn-dark {
            color: #000000;
            /* Texto negro */
            /* Código hexadecimal para dorado */
            background-image: linear-gradient(to bottom, #996666, #cc7a7a, #e69999);
            /* Gradiente más claro y suave */

            font-weight: bold;
            /* Texto en negrita para mayor visibilidad */
            border: none;
            /* Elimina el borde predeterminado */
            padding: 10px 20px;
            /* Ajusta el relleno para mejor apariencia */
            display: inline-block;
            /* Asegura que el enlace se comporte como un botón */
            text-decoration: none;
            /* Elimina el subrayado del enlace */
        }


        .fw-bold {
            color: black;
            /* Dorado oscuro */
            background-image: linear-gradient(to bottom, #996666, #cc7a7a, #e69999);
            /* Gradiente más claro y suave */
            text-shadow: 2px 2px 4px #000000, 0 0 10px #8B7500, 0 0 20px #8B7500;
            /* Sombra negra y resplandor dorado oscuro */
            font-weight: bold;
            /* Texto en negrita para mayor visibilidad */
            border: none;
            /* Elimina el borde predeterminado */
            padding: 10px 20px;
            /* Ajusta el relleno para mejor apariencia */
            display: inline-block;
            /* Asegura que el enlace se comporte como un botón */
            text-decoration: none;
            /* Elimina el subrayado del enlace */
        }


        .border p-3 {
            background-color: whitesmoke;
            color: black;
            /* Cambia el color del texto a negro para mejor legibilidad */
            padding: 10px;
            /* Añade un poco de relleno alrededor del texto */
            border: 2px solid aqua;
            /* Añade un borde aqua para resaltar */
            border-radius: 5px;
            /* Redondea las esquinas del borde */
        }

        * Estilo para la casilla de verificación */ .form-check-input {
            width: 20px;
            height: 20px;
            border: 2px solid #00008b;
            /* Azul oscuro */
            border-radius: 4px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: none;
            cursor: pointer;
            vertical-align: middle;
            /* Alinea verticalmente el checkbox */
        }

        .form-check-input:checked {
            background-color: #00008b;
            /* Azul oscuro */
            border: linear-gradient(to bottom, #996666, #cc7a7a, #e69999);
            ;
            /* Azul oscuro */
            color: white;
        }

        /* Estilo para el texto del checkbox */
        .form-check-label {
            color: black;
            vertical-align: middle;
            /* Alinea verticalmente el texto */
        }
    </style>

</body>


<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío predeterminado del formulario
        const form = event.target;
        // Realiza el envío del formulario manualmente
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
        }).then(() => {
            // Limpia los campos del formulario después del envío
            form.reset();
        }).catch(error => console.error('Error:', error));
    });
</script>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
    }

    /* Estilo básico para los enlaces */


    /* Estilo para el hover */
    li a:hover {
        border: 1px solid blue;
        /* Borde azul completo al hacer hover */
        color: white;
        /* Mantener el texto en blanco */
    }

    .navbar-brand {
        font-size: 12px;
        /* Tamaño de fuente reducido */
    }

    .boton {
        font-size: 12px;
        /* Tamaño de fuente reducido */
    }

    .btn-sm {
        max-width: 200px;
        /* Ajusta este valor según sea necesario */
        width: auto;
        /* Permite que el botón ajuste su tamaño automáticamente */
        display: inline-block;
        /* Asegura que el botón tome solo el espacio necesario */
    }
</style>

</html>