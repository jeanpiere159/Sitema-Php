Características :

✅ Registro de usuarios con hash de contraseña (bcrypt)

✅ Inicio de sesión seguro con verificación de credenciales

✅ Manejo de sesiones para mantener a los usuarios autenticados

✅ Interfaz sencilla con HTML y CSS

✅ Código estructurado y validaciones básicas


Requisitos

Servidor local con PHP y MySQL (XAMPP, WAMP, LocalWP, etc.)

Base de datos MySQL con una tabla usuario que almacene id_usuario, nombre, usuario, contrasena y correo

CREATE DATABASE IF NOT EXISTS login;

USE login;

CREATE TABLE usuario (

    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(100) NOT NULL,
    
    usuario VARCHAR(50) UNIQUE NOT NULL,
    
    contrasena VARCHAR(255) NOT NULL,
    
    correo VARCHAR(100) UNIQUE NOT NULL
    
);

Uso

Accede a registro.php para crear una cuenta

Inicia sesión en login.php

Una vez autenticado, serás redirigido a home.php

