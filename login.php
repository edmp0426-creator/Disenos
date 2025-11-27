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

// Handling the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user is a maestro (admin)
    $sql_maestro = "SELECT * FROM maestro WHERE email = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql_maestro);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result_maestro = $stmt->get_result();

    if ($result_maestro->num_rows > 0) {
        // Admin found, set session and redirect
        $admin = $result_maestro->fetch_assoc();
        $_SESSION['user_id'] = $admin['id'];
        $_SESSION['role'] = 'admin';
        header('Location: home_admi.php'); // Redirect to admin home
        exit();
    }

    // Query to check if the user is an alumno (student)
    $sql_alumno = "SELECT * FROM alumno WHERE email = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql_alumno);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result_alumno = $stmt->get_result();

    if ($result_alumno->num_rows > 0) {
        // Student found, set session and redirect
        $student = $result_alumno->fetch_assoc();
        $_SESSION['user_id'] = $student['id'];
        $_SESSION['role'] = 'student';
        header('Location: home_alumnos.php?id=' . $student['id']); // Redirect to student home with ID
        exit();
    }

    // If no user matches, show an error
    $error_message = 'Usuario o contraseña incorrectos.';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css">
</head>
<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form method="POST" action="">
                <img src="logo.png" alt="Logo" class="logo">
                <h2>Ingresar</h2>
                <input type="email" name="email" placeholder="Correo Electronico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" class="btn">Ingresar</button>
                <?php if (isset($error_message)) { echo "<p style='color:red;'>$error_message</p>"; } ?>
            </form>
        </div>
    </div>
</body>
<script src="scriptlogin.js"></script>
</html>
