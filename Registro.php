<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate Gratis!</title>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="Css/Registro.css?v12">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec83c960a.js" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
</head>
<body>

    <header>
        <nav class="menu">
            <div class="logo">
                <h1>PASTEMANIAS</h1>
                <img src="img/logo.ico" alt="">
            </div>
            <ul class="links">
                <li><a href="index.php">Volver</a></li>
            </ul>
        </nav>
    </header>

    <section class="formulario">
        <div class="contenedor__login-register">
            <form action="php/Registro_personas_db.php" method="POST">
                <h2>Regístrate Gratis!</h2>
                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                <input type="text" name="usuario" placeholder="Crea un Usuario" required>
                <input type="text" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="contraseña" placeholder="Contraseña" required>
                <button id="btn_Registro">REGISTRARSE</button>
            </form>
        </div>
    </section>
    
    <footer class="footer">
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
        <h4 class="end-title">pasteleria.pastemanias@gmail.com</h4>
    </footer>
    
</body>
</html>