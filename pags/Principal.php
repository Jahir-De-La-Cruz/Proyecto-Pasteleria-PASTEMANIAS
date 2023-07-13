<?php
    
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Debes iniciar sesión");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASTEMANIAS | Gran Variedad en Repostería!</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/Principal.css?v1234567891234567">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec83c960a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js?v"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <nav class="menu">
            <div class="logo">
                <h1>PASTEMANIAS</h1>
                <img src="../img/logo.ico" alt="">
            </div>
            <ul class="links">
                <li><a href="Principal.php" class="first-row">Inicio</a></li>
                <li><a href="Pasteles.html" class="first-row">Pasteles</a></li>
                <li><a href="PanesYGalletas.html" class="second-row">Panes y Galletas</a></li>
                <li><a href="Cafetería.html" class="second-row">Cafetería</a></li>
                <li><a href="../php/cerrar_sesion.php" class="second-row">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section class="seccion1">
        <div class="image-container">
            <img src="../img/portada.jpg" alt="">
            <h2 class="image-text">Mira nuestra gran variedad en Pasteleria</h2>
        </div>
    </section>

    <section class="seccion2">
        <div class="contenedor-productos Productos-container">
            <!-- Pasteles Chocolate -->
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/rosca-chica.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Rosca Chica</h3>
                <h4 class="card-description">$150</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Rosca Chica" data-precio="150">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/milkyway.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel Milkyway</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Milkyway" data-precio="250">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/pastel-oreo.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel Oreo</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Oreo" data-precio="250">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/choco-aleman.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Choco Aleman</h3>
                <h4 class="card-description">$200</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Choco Aleman" data-precio="200">
            </div>
            <!-- Pasteles Vainilla -->
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/fresas-con-crema.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Fresas con Crema</h3>
                <h4 class="card-description">$200</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Fresas con Crema" data-precio="200">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/combinado.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel Combinado</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Combinado" data-precio="250">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/pastel-de-mango.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel de Mango</h3>
                <h4 class="card-description">$150</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel de Mango" data-precio="150">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/Pastel-Duo.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel Duo</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Duo" data-precio="250">
            </div>
            <!-- Pasteles 3 Leches -->
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/tres-leches-combinado.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">3 Leches Combinado</h3>
                <h4 class="card-description">$280</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="3 Leches Combinado" data-precio="280">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/tres-leches-flan.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Flan de 3 Leches</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Flan de 3 Leches" data-precio="250">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/tres-leches-chocolate.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Chocolate 3 Leches</h3>
                <h4 class="card-description">$280</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Chocolate 3 Leches" data-precio="280">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/tres-leches-frutas.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Frutas 3 Leches</h3>
                <h4 class="card-description">$280</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Frutas 3 Leches" data-precio="280">
            </div>
            <!-- Pasteles Variedad -->
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/mini-quequitos.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">CupCakes Chocolate</h3>
                <h4 class="card-description">$200 (10pz)</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="CupCakes Chocolate" data-precio="200">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/ferrero.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel Ferrero</h3>
                <h4 class="card-description">$250</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Ferrero" data-precio="250">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/zanahoria.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Pastel de Zanahoria</h3>
                <h4 class="card-description">$200</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel de Zanahoria" data-precio="200">
            </div>
            <div class="Productos-cards pastel-color">
                <img src="../img/principal/rollo-de-mango.jpg" alt="" class="card-image zoom-image">
                <h3 class="card-title">Rollo de Mango</h3>
                <h4 class="card-description">$200</h4>
                <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Rollo de Mango" data-precio="200">
            </div>
        </div>
    </section>

    <section class="seccion3">
        <h2 class="ofertas-title">Conoce Nuestras Más Recientes Ofertas!!</h2>
        <div class="contenedor-productos carousel-container">
            <div id="carouselExampleAutoplaying" class="carousel slide pastel-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/ofertas/oferta1-rosca-grande.jpg" class="d-block w-100 card-images" alt="oferta 1">
                        <h3 class="card-title-oferta">Rosca Grande</h3>
                        <h4 class="card-description-oferta">$270</h4>
                        <h4 class="card-description-oferta-anterior">Antes <strike>$300</strike></h4>
                        <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Rosca Grande" data-precio="270">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/ofertas/oferta2-selva-negra.jpg" class="d-block w-100 card-images" alt="oferta 2">
                        <h3 class="card-title-oferta">Pastel Selva Negra</h3>
                        <h4 class="card-description-oferta">$260</h4>
                        <h4 class="card-description-oferta-anterior">Antes <strike>$290</strike></h4>
                        <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Selva Negra" data-precio="260">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/ofertas/oferta3-diplomatico.jpg" class="d-block w-100 card-images" alt="oferta 3">
                        <h3 class="card-title-oferta">Pastel Diplomatico</h3>
                        <h4 class="card-description-oferta">$280</h4>
                        <h4 class="card-description-oferta-anterior">Antes <strike>$310</strike></h4>
                        <input type="button" value="COMPRAR" class="btnComprar" data-nombre="Pastel Diplomatico" data-precio="280">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container__sugerencias">
            <div class="formulario">
                <form action="../php/Sugerencias.php" method="POST" class="card-formulario"> 
                    <h3>¿Tienes alguna sugerencia?¡Mándanos un correo!</h3>
                    <h3>pasteleria.pastemanias@gmail.com</h3>
                    <input type="text" name="nombre" placeholder="Nombre" required><br><br>
                    <input type="email" name="email" placeholder="Correo Electrónico" required><br><br>
                    <input type="text" name="asunto" placeholder="Asunto" required><br><br>
                    <textarea name="mensaje" id="txtMensaje" cols="30" rows="5" required></textarea><br>
                    <button id="btnSugerencias" class="btnEnviar">ENVIAR</button>
                </form>
            </div>
        </div>
        <div class="contacto">
            <h3 class="footer__title">¡Siguenos en nuestras redes sociales!</h3>
            <div class="iconos">
                <a class="fab fa-facebook-f footer__icon" href="#"></a>
                <a class="fab fa-instagram footer__icon" href="#"></a>
                <a class="fab fa-twitter footer__icon" href="#"></a>
                <a class="fab fa-tiktok footer__icon" href="#"></a>
            </div>
        </div>
        <h3 class="end-title">&copy; PASTEMANIAS | Todos los derechos reservados</h3>
    </footer>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        Swal.fire({
            title: 'Bienvenido a Pastelería PASTEMANIAS!',
            text: 'Agradecemos tu preferencia por nuestras sucursales',
            showCancelButton: false,
            backdrop: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            stopKeydownPropagation: false,
            confirmButtonText: 'Ver Productos',
            icon: 'success',
            customClass: {
                confirmButton: 'btn-estilo'
            }
        });
    </script>
    <script src="../js/functions.js"></script>
    <!-- <script src="../js/bienvenida_sweetalert.js"></script> -->

</body>
</html>