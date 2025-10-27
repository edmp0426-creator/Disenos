<!DOCTYPE html>
<hmtl lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Maestros</title>
    <link rel="stylesheet" href="css/crudmaestros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Crud Mestros</h1>
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
            <h2 >Lista de Mestros</h2>
            <br>
            <button class="btn-agregar"><a class="agregar" href="agregar_alumoos.php">Agregar Alumno</a></button>
            <br>
            <table class="tabla-alumnos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Matricula</th>
                        <th>Nombre(s)</th>
                        <th>Apellido</th>
                        <th>Materia que imparte</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se colocara el php simulacion -->
                    <tr>
                        <td>1</td>
                        <td>MD2023001</td>
                        <td>Juan Alcachofa</td>
                        <td>Godofedo Smith</td>
                        <td>Ingles</td>
                        <td>juanitoAlcachof@gmail.com</td>
                        <td>123456</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
    </div>

    </body>
</hmtl>