<!DOCTYPE html>
<hmtl lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
    <link rel="stylesheet" href="css/crudalumnos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
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
                    <li><a href="login.php" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
            <h2 >Lista de Alumnos</h2>
            <br>
            <button class="btn-agregar"><a class="agregar" href="alumnos/agregar_alumoos.php">Agregar Alumno</a></button>
            <br>
            <table class="tabla-alumnos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Matricula</th>
                        <th>Nombre(s)</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Fecha de creacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Aquí iría el código PHP para obtener y mostrar los alumnos desde la base de datos
                    $servername = "db";
                    $username = "usuario";
                    $password = "12345";
                    $dbname = "socialService";

                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar conexión
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

                    // Consulta SQL para obtener los alumnos
                    $sql = "SELECT * FROM alumno";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("Consulta fallida: " . $conn->error);
                    }

                    // Mostrar los datos de cada alumno
                    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[matricula]</td>
                            <td>$row[nombres]</td>
                            <td>$row[apellidos]</td>
                            <td>$row[email]</td>
                            <td>$row[contrasena]</td>
                            <td>$row[creat_at]</td>
                            <td>
                                <button class='btn-editar' href='/DISENO/editar_Alumno.php?id=$row[id]'>Editar</button>
                                <button class='btn-eliminar' href='/DISENO/eliminar_Alumno.php?id=$row[id]'>Eliminar</button>
                            </td>
                        </tr>
                        ";

                    }

                    ?>
                </tbody>
            </table>
    </div>

    </body>
</hmtl>