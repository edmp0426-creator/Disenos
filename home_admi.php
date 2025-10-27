<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="css/estilohomeadmi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Crud Alumnos</h1>
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

        <!-- Columna izquierda -->
        <aside class="sidebar">
            <div class="profile-card">
                <img src="user_logo.jpg" alt="Foto de usuario" class="profile-img">

            </div>

            <div class="test-section">
                <h3>Test</h3>
                <button class="btn-green">Test name</button>
                <button class="btn-green">Test name</button>
            </div>
        </aside>

        <!-- Sección central -->
        <main class="main-content">
            <div class="header">
                <img src="logo.png" alt="Logo CECYTEM" class="logo">
                <h1>Home Admin</h1>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Alumnos</th>
                            <th>Resultados</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Yamil Alcala</td>
                            <td><button class="btn-green">Test name</button></td>
                            <td><button class="btn-green">Test name</button></td>
                        </tr>
                        <tr>
                            <td>Yamil Alcala</td>
                            <td><button class="btn-green">Test name</button></td>
                            <td><button class="btn-green">Test name</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>
</html>
