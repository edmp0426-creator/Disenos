<?php
                    session_start(); // Start the session

                    // Database credentials
                    $servername = "db";
                    $username = "usuario";
                    $password = "12345";
                    $dbname = "socialService";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Check if the user is logged in as admin
                    if (isset($_SESSION['user_id']) && $_SESSION['role'] === 'admin') {
                        $user_id = $_SESSION['user_id'];

                        // Fetch user details from the 'maestro' table (admin)
                        $sql = "SELECT * FROM maestro WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            $admin = $result->fetch_assoc();
                        } else {
                            die("User not found.");
                        }
                    } else {
                        // If the user is not logged in or is not an admin
                        header('Location: login.php');
                        exit();
                    }
                ?>
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
                <h1 class="tituloHeader">Home</h1>
                <ul class="nav-links">
                    <li><a href="crud_alumnos.php">Alumnos</a></li>
                    <li><a href="crud_maestros.php">Maestros</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="container">

        <!-- Columna izquierda -->
        <aside class="sidebar">
            <div class="profile-card">
                <img src="user_logo.jpg" alt="Foto de usuario" class="profile-img">
                <br>
                <p><strong>Nombre: </strong><?php echo $admin['nombres'] . " ". $admin['apellidos']; ?></p>
                <br>
                <p><strong>Materia: </strong><?php echo $admin['materia']; ?></p>

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
                            <td>$row[nombres]</td>
                            <td><a class='btn-green' href='res_ind.php?id=$row[id]'>Resultados</a></td>
                            <td><a class='btn-green' href='detalles_estudiante.php?id=$row[id]'>Detalles</a></td>
                            </tr>
                            ";

                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>
</html>
