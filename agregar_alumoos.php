<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumnos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Registar Alumno</h1>
                <ul class="nav-links">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="crud_alumnos.php">Alumnos</a></li>
                    <li><a href="#">Maestros</a></li>
                    <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="form-box" id="login-form">
            <form method="post">
                <img src="user_logo.jpg" alt="Logo" class="logo">
                <h2>Registrar Alumno</h2>
                <h3>Matricula</h3>
                <input type="text" name="matricula" placeholder="Matricula" required>
                <h3>Nombres(s)</h3>
                <input type="text" name="nombres" placeholder="Nombre(s)" required>
                <h3>Apellidos</h3>
                <input type="text" name="apellidos" placeholder="apellidos" required>
                <h3>Email</h3>
                <input type="email" name="email" placeholder="Email" required>
                <h3>Contraseña</h3>
                <input type="password" name="password" placeholder="Contraseña" required>
                <h3>Escriba nuevamente la contraseña</h3>
                <input type="password" name="password" placeholder="Contraseña" required>
                
                <button type="submit" class="btn">Registrar</button>
                <button type="submit" class="btn">Cancelar</button>


            </form>
        </div>
    </div>
</body>
</html>