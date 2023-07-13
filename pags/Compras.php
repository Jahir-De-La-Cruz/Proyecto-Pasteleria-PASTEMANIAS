<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar Productos de PASTEMANIAS</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3ec83c960a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/Comprar.css?v12">
</head>
<body>

    <header>
        <nav class="menu">
            <div class="logo">
                <h1>PASTEMANIAS</h1>
                <img src="../img/logo.ico" alt="">
            </div>
        </nav>
    </header>

    <?php
        // Obtener los valores de producto y precio desde la URL
        $producto = $_GET['producto'];
        $precio = $_GET['precio'];
    ?>

    <div class="contenedor__formulario">
        <form action="../php/confirmar-compra.php" method="POST" class="formulario__login" id="formulario-compra">
            <h2>Llene el formulario para comprar</h2>
            <input type="text" name="nombre" id="input_nombre" placeholder="Nombre">
            <input type="text" name="apellido" id="input_apellido" placeholder="Apellido">
            <input type="text" name="telefono" id="input_telefono" placeholder="Telefono">
            <input type="text" name="direccion" id="input_direccion" placeholder="Dirección">
            <label class="lbldetalle" for="producto">Producto a Comprar</label>
            <input type="text" name="producto" id="input_producto" value="<?php echo $producto; ?>" readonly>
            <label class="lbldetalle" for="precio">Precio del Producto</label>
            <input type="text" name="precio" id="input_precio" value="<?php echo $precio; ?>" readonly><br><br>
            <button type="submit">Comprar Producto</button>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../js/functions.js"></script>

</body>
</html>
