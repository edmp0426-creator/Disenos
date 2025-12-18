<?php
// Aquí iría el código PHP para obtener y mostrar los alumnos desde la base de datos
$servername = "db";
$username = "usuario";
$password = "12345";
$dbname = "socialService";

// Crear conexión
$connection = new mysqli($servername, $username, $password, $dbname);

$matricula = "";
$nombres = "";
$apellidos = "";
$email = "";
$contrasena = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = $_POST['password'];

    do {
        if ( empty($matricula) || empty($nombres) || empty($apellidos) || empty($email) || empty($contrasena) ) {
            $errorMessage = "Todos los campos son obligatorios";
            break;
        }

        // Agregar nuevo alumno a la base de datos

        $sql = "INSERT INTO alumnos (matricula, nombres, apellidos, email, contrasena) " .
                "VALUES ('$matricula', '$nombres', '$apellidos', '$email', '$contrasena')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Consulta fallida: " . $connection->error;
            break;
        }

        $matricula = "";
        $nombres = "";
        $apellidos = "";
        $email = "";
        $contrasena = "";

        $successMessage = "Alumno agregado correctamente";

        header("location: crud_alumnos.php");
        exit;

    }while (false);

}

?>

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
                    <li><a href="home_admi.php" class="active">Home</a></li>
                    <li><a href="crud_alumnos.php">Alumnos</a></li>
                    <li><a href="crud_maestros.php">Maestros</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="form-box" id="login-form">
            <form method="post">
                <img src="user_logo.jpg" alt="Logo" class="logo">
                <h2>Registrar Alumno</h2>

                <?php
                if (!empty($errorMessage)) {
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show text-center mx-auto' role='alert' style='max-width: 500px;'>
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
</html>