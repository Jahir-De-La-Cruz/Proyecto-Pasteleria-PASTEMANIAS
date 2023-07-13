<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $fechaCompra = date("d/m/y");

    // Utilizar una consulta preparada con marcadores de posición
    $query = "INSERT INTO compras (Nombre, Apellido, Telefono, Direccion, Producto, Precio, FechaCompra) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $statement = mysqli_prepare($conexion, $query);

    // Vincular los parámetros a los marcadores de posición en la consulta
    mysqli_stmt_bind_param($statement, "sssssss", $nombre, $apellido, $telefono, $direccion, $producto, $precio, $fechaCompra);

    // Ejecutar la consulta preparada
    $comprobar_resultados = mysqli_stmt_execute($statement);

    if ($comprobar_resultados) {
        echo '<script>
            alert("La compra fue realizada exitosamente, tu pedido llegará en aproximadamente una hora.");
            window.location = "../pags/Principal.php";
        </script>';
    } else {
        echo '<script>
            alert("Error al comprar, intenta nuevamente");
            window.location = "../pags/Compras.php";
        </script>';
    }

    // Cerrar la declaración y la conexión
    mysqli_stmt_close($statement);
    mysqli_close($conexion);

?>