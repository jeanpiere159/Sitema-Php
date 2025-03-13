<?php
session_start();
include("db.php");

if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT id_usuario, usuario, contrasena FROM usuario WHERE usuario = ?";
    $stmt = $conexion->prepare($query);

    if (!$stmt) {
        die("Error en la consulta: " . $conexion->error);
    }

    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();
        $hash_contrasena = $fila['contrasena']; 

        if (password_verify($contrasena, $hash_contrasena)) {
            $_SESSION['usuario'] = $usuario; 
            $_SESSION['id_usuario'] = $fila['id_usuario'];

            header("Location: home.php"); 
        } else {
            echo " Contraseña incorrecta";
        }
    } else {
        echo " Usuario no encontrado";
    }

    $stmt->close();
} else {
    echo " Por favor, completa todos los campos";
}

$conexion->close();
