<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home del Alumno</title>
    <link rel="stylesheet" href="css/estilohomealumnos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Home</h1>
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

    <div class="perfil-container">
    

    <div class="perfil-foto">
        <img src="user_logo.jpg" alt="Foto del alumno">
    </div>


    <div class="perfil-info">
        <p><strong>Nombre:</strong> Nombre del alumno</p>
        <br>
        <p><strong>Matrícula:</strong> al019238456</p>
        <br>
        <p><strong>Correo electrónico:</strong> alumno@gmail.com</p>
    </div>


    <div class="acciones">
        <a href="#" class="action-btn">
        <img src="test_Allport.png" alt="Iniciar Test Allport">
        <p>Iniciar Test Allport</p>
        </a>

        <a href="#" class="action-btn">
        <img src="results.png" alt="Mis resultados">
        <p>Mis resultados</p>
        </a>
    </div>
    </div>

</body>
</html>
