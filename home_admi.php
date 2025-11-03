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
                    <li><a href="crud_maestros.php">Maestros</a></li>
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
                    $matricula = "TD09374"; 

                    // Consulta de un solo alumno
                    $queried = false;
                    try {
                        $sql = "SELECT nombres, apellidos, matricula, materia FROM maestro WHERE matricula = ?";
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
                            $sql = "SELECT nombres, apellidos, matricula, materia FROM maestro WHERE matricula = ?";
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
                            echo "<p>Error al consultar los datos del maestro. Consulte al administrador.</p>";
                            $queried = false;
                        }
                    }

                    if ($queried && $result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();

                        echo "<p><strong>Nombre:</strong> " 
                            . htmlspecialchars($row['nombres']) . " " 
                            . htmlspecialchars($row['apellidos']) . "</p>";

                        echo "<br>";
                        echo "<p><strong>Materia:</strong> " . htmlspecialchars($row['materia']) . "</p>";
                    } elseif ($queried) {
                        echo "<p>No se encontró el maestro con la matrícula especificada.</p>";
                    }

                    if (isset($stmt) && $stmt) {
                        $stmt->close();
                    }
                    $connection->close();
                ?>

            </div>

            <div class="test-section">
                <h3>Test</h3>
                <button class="btn-green">Test Allport</button>
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
