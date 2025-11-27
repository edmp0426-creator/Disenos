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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Resultado Alumno - Test Allport</title>
    <link rel="stylesheet" href="estiloresind.css" />
</head>
<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Resultados individuales</h1>
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

    <div class="resultado-alumno">

    <!-- COLUMNA IZQUIERDA: INFO DEL ALUMNO -->
    <div class="columna-info">
        <div class="header-alumno">
        <a href="home_admi.php" class="icono-back">←</a>
        <div>
            <h1><?php echo $nombres; ?></h1>
            <p class="fecha">23/10/2025</p>
        </div>
        </div>

        <hr class="separador" />

        <h2 class="titulo-seccion">Resumen general</h2>

        <p class="texto">
        El sistema de valores se orienta principalmente hacia las relaciones humanas,
        la empatía y la cooperación con los demás.
        </p>

        <h3 class="subtitulo">Valor Social</h3>

        <p class="texto">
        El valor social se caracteriza por el interés genuino en las personas y en las
        relaciones humanas. Quienes destacan en este ámbito encuentran satisfacción en
        ayudar, comprender y convivir con los demás. Valoran la empatía, la justicia y
        la cooperación, y suelen sentirse motivados por el bienestar colectivo más que
        por logros materiales o intelectuales.
        </p>

        <p class="texto">
        Las personas con un alto puntaje en este valor suelen orientarse hacia profesiones
        o actividades donde puedan servir, acompañar o mejorar la vida de otros, como la
        educación, la psicología, el trabajo social, la enfermería o la comunicación.
        </p>
    </div>

    <!-- COLUMNA DERECHA: GRÁFICA RADAR -->
    <div class="columna-grafica">
        <canvas id="radarAllport"></canvas>
    </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Tu JS -->
    <script src="res_ind.js"></script>

</body>
</html>
