<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="contenedor">
            <h1>Login</h1>
            <form action="validacion.php" method="post">
                <br><br>
                <label for="usuario">Usuario</label>
                <br>
                <input type="text" name="usuario" required>
                <br><br>
                <label for="contrasena">Contrasena</label>
                <br>
                <input type="password" name="contrasena" required>
                <br><br>
                <button type="submit">Ingresar</button>
            </form>
            <p class="registrate"></p>
            <p class="vinculo"><a href="registro.php">Registrate</a></p>
        </div>
    </div>

</body>

</html>