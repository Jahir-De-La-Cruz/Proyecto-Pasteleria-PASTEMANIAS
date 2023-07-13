<?php 

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512', $contraseña);

    $validar_login = mysqli_query($conexion, "SELECT * FROM registros WHERE Correo = '$correo' and 
    Contraseña = '$contraseña' ");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../pags/Principal.php");
        exit();
    } else {
        echo '<script>
            alert("El usuario ingresado no existe, por favor verifique los datos, o registrese");
            window.location = "../index.php";
        </script>';
        exit();
    }

?>