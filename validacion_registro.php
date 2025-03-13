<?php
include("db.php");

if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contrasena']) && !empty($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $correo = $_POST['email'];

    $query = "INSERT INTO usuario (nombre, usuario, contrasena, correo) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);

    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conexion->error);
    }

    $stmt->bind_param("ssss", $nombre, $usuario, $contrasena, $correo);

    if ($stmt->execute()) {
        echo "Registro exitoso!";
        header("Location: login.php");
        exit();
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Todos los campos son obligatorios.";
}

$conexion->close();
