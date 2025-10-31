<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css">

</head>
<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="">
                <img src="logo.png" alt="Logo" class="logo">
                <h2>Ingresar</h2>
                <input type="email" name="email" placeholder="Correo Electronico" required>
                <input type="password" name="password" placeholder="Contraseña" required>

                <button type="submit" class="btn">Ingresar</button>
                <a href="#" onClick="showForm('password-form')">¿Olvidaste tu contraseña?</a>

            </form>
        </div>

        <div class="form-box" id="password-form">
            <form action="">
                <img src="logo.png" alt="Logo" class="logo">
                <h2>Recuperar Contraseña</h2>
                <input type="email" name="email" placeholder="Correo Electronico" required>
                <button type="submit" class="send">Enviar</button>
                <a href="#" onClick="showForm('login-form')">Volver al login</a>

            </form>
        </div>
    </div>

    <script src="scriptlogin.js"></script>
</body>
</html>