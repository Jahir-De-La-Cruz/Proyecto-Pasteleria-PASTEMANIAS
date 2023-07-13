<?php

    include 'conexion.php';

    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['usuario']);
    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contraseña']);
    $contraseña = hash('sha512', $contraseña);
    $fecha = date("d/m/y");

        //Verificar que el correo no se repita en la base de datos
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM registros WHERE Correo ='$correo' ");
        if (mysqli_num_rows($verificar_correo) > 0 ) {
            echo '<script>
                    alert("Este correo ya existe");
                    window.location = "../Registro.php";
                </script>';
            exit();
        }
    
        //Verificar que el nombre de usuario no se repita en la base de datos
        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registros WHERE Usuario ='$usuario' ");
        if (mysqli_num_rows($verificar_usuario) > 0 ) {
            echo '<script>
                    alert("Este nombre de usuario ya esta en uso, prueba otro");
                    window.location = "../Registro.php";
                </script>';
            exit();
        }

    $consulta = "INSERT INTO registros (Nombre_Completo, Usuario, Correo, Contraseña, FechaIngreso) 
    VALUES ('$nombre','$usuario','$correo','$contraseña','$fecha')";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo '<script>
            alert("Usuario registrado exitosamente, Ya puedes iniciar sesión!!");
            window.location = "../index.php";
        </script>';
    } else {
        echo '<script>
            alert("Error al registrar, intenta nuevamente");
            window.location = "../Registro.php";
        </script>';
    }

?>