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
        <?php
            $servername = "db";
            $username   = "usuario";
            $password   = "12345";
            $dbname     = "socialService";

            // Crear conexión
            $connection = new mysqli($servername, $username, $password, $dbname);
            if ($connection->connect_error) {
                die("Error de conexión: " . $connection->connect_error);
            }

            // MATRÍCULA del alumno a mostrar (puedes cambiarla o tomarla de sesión)
            $matricula = "MD2837474"; 

            // Consulta de un solo alumno
            $queried = false;
            try {
                $sql = "SELECT nombres, apellidos, matricula, email FROM alumnos WHERE matricula = ?";
                $stmt = $connection->prepare($sql);
                if ($stmt) {
                    $stmt->bind_param("s", $matricula);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $queried = true;
                }
            } catch (mysqli_sql_exception $e) {
                // Fall back to singular table name 'alumno' if 'alumnos' doesn't match schema
                try {
                    $sql = "SELECT nombres, apellidos, matricula, email FROM alumno WHERE matricula = ?";
                    $stmt = $connection->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("s", $matricula);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $queried = true;
                    }
                } catch (mysqli_sql_exception $e2) {
                    // both attempts failed; log error and show friendly message
                    error_log("DB query failed: " . $e2->getMessage());
                    echo "<p>Error al consultar los datos del alumno. Consulte al administrador.</p>";
                    $queried = false;
                }
            }

            if ($queried && $result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo "<p><strong>Matrícula:</strong> " . htmlspecialchars($row['matricula']) . "</p>";
                echo "<br>";
                echo "<p><strong>Nombre:</strong> " 
                    . htmlspecialchars($row['nombres']) . " " 
                    . htmlspecialchars($row['apellidos']) . "</p>";

                echo "<br>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
            } elseif ($queried) {
                echo "<p>No se encontró el alumno con la matrícula especificada.</p>";
            }

            if (isset($stmt) && $stmt) {
                $stmt->close();
            }
            $connection->close();
        ?>
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
