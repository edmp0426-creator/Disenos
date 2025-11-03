<?php
$servername = "db";
$username = "usuario";
$password = "12345";
$dbname = "socialService";

// Crear conexión
$connection = new mysqli($servername, $username, $password, $dbname);

$id = "";
$matricula = "";
$nombres = "";
$apellidos = "";
$email = "";
$contrasena = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
    // GET method: Mostrar los datos del alumno

    if ( !isset($_GET["id"]) ) {
        header("location: crud_alumnos.php");
        exit;
    }

    $id = $_GET["id"];

    // Obtener los datos del alumno
    $sql = "SELECT * FROM alumno WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if ( !$row ) {
        header("location: crud_alumnos.php");
        exit;
    }

    $matricula = $row["matricula"];
    $nombres = $row["nombres"];
    $apellidos = $row["apellidos"];
    $email = $row["email"];
    $contrasena = $row["contrasena"];
}
else {
    // POST method: Actualizar los datos del alumno
    $id = $_POST["id"];
    $matricula = $_POST["matricula"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $contrasena = $_POST["password"];

    do{
        if ( empty($matricula) || empty($nombres) || empty($apellidos) || empty($email) || empty($contrasena) ) {
            $errorMessage = "Todos los campos son obligatorios";
            break;
        }

        // Actualizar los datos del alumno en la base de datos
        $sql = "UPDATE alumno " .
                "SET matricula = '$matricula', nombres = '$nombres', apellidos = '$apellidos', email = '$email', contrasena = '$contrasena' " .
                "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Consulta fallida: " . $connection->error;
            break;
        }

        $successMessage = "Alumno actualizado correctamente";

        header("location: crud_alumnos.php");
        exit;

    }while (false);
}
?>
<!DOCTYPE html>
<hmtl lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Editar Alumnos</h1>
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
                <input type="hidden" name="id" value = "<?php echo $id; ?>">
                <img src="user_logo.jpg" alt="Logo" class="logo">
                <h2>Editar Alumno</h2>

                <?php
                if ( !empty($errorMessage) ) {
                    echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                }
                ?>

                <h3>Matricula</h3>
                <input type="text" name="matricula" placeholder="Matricula" value = "<?php echo $matricula; ?>">
                <h3>Nombres(s)</h3>
                <input type="text" name="nombres" placeholder="Nombre(s)" value = "<?php echo $nombres; ?>">
                <h3>Apellidos</h3>
                <input type="text" name="apellidos" placeholder="apellidos" value = "<?php echo $apellidos; ?>">
                <h3>Email</h3>
                <input type="email" name="email" placeholder="Email" value = "<?php echo $email; ?>">
                <h3>Contraseña</h3>
                <input type="password" name="password" placeholder="Contraseña" value = "<?php echo $contrasena; ?>">
                
                <?php
                    if ( !empty($successMessage) ) {
                        echo "
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        ";
                    }
                ?>

                <div class="button-group">
                    <button type="submit" class="btn">Registrar</button>
                    <a href="crud_alumnos.php" class="btn btn-cancel">Cancelar</a>
                </div>


            </form>
        </div>
    </div>


    </body>
</hmtl>