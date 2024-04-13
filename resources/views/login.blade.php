<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario y la contraseña son correctos (ejemplo muy básico)
    if ($_POST["username"] == "usuario" && $_POST["password"] == "contraseña") {
        // Iniciar sesión y redirigir a una página de bienvenida
        $_SESSION["loggedin"] = true;
        header("location: welcome.php");
        exit;
    } else {
        // Mostrar un mensaje de error si el inicio de sesión falla
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"> <!-- Agrega tu archivo CSS aquí -->
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="post">
            <h2>Iniciar Sesión</h2>
            <div class="input-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
