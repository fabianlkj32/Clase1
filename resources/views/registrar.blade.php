<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet"  href="{{asset('css/registrar.css')}}">  <!-- Agrega tu archivo CSS aquí -->
</head>
<body>
    <div class="register-container">
        <form action="register.php" method="post">
            <h2>Registrese</h2>
            <div class="input-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="Ingrese un usuario" required>
            </div>
            <div class="input-group">
                <label for="username">Nobres:</label>
                <input type="text" id="username" name="nombres" autocomplete="off" placeholder="Ingrese sus nombres" required>
            </div>
            <div class="input-group">
                <label for="username">Apellidos:</label>
                <input type="text" id="username" name="apellidos" autocomplete="off" placeholder="Ingrese sus apellidos" required>
            </div>
            <div class="input-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="ejemplocorreo@gmail.com" autocomplete="off" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>
    <footer class="footer">
        <p>© 2024 Todos los derechos reservados.</p>
    </footer>
</body>
</html>