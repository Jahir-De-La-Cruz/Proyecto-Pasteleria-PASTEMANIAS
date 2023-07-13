<?php

    session_start();

    if(isset($_SESSION['usuario'])) {
        header("location: pags/Principal.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión en PASTEMANIAS!!!</title>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3ec83c960a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/Estilos.css?v123456">
</head>
<body>

    <header>
        <nav class="menu">
            <div class="logo">
                <h1>PASTEMANIAS</h1>
                <img src="img/logo.ico" alt="">
            </div>
        </nav>
    </header>

    <div class="contenedor__formulario">
        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electrónico" name="correo">
            <input type="password" placeholder="Contraseña" name="contraseña"><br><br>
            <button>Entrar</button><br><br>
            <a href="Registro.php">¿No tienes una cuenta? Has clic aquí para registrate!</a>
        </form>
    </div>
    
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