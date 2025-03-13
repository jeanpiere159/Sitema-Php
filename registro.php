<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <div class="contenedor">
            <h1>Registro</h1>
            <form action="validacion_registro.php" method="post">
                <br><br>

                <label for="">Nombre</label>
                <br>
                <input type="text" name="nombre" required>
                <br><br>
                <label for="">Usuario</label>
                <br>
                <input type="text" name="usuario" required>
                <br><br>
                <label for="">Contrasena</label>
                <br>
                <input type="password" name="contrasena" required>
                <br><br>
                <label for="">Correo</label>
                <br>
                <input type="email" name="email" required>
                <br>
                <button class="button">Registrate</button>
            </form>

            <p class="registrate"></p>
            <p class="vinculo"><a href="login.php">Login</a></p>
        </div>
    </div>
</body>

</html>