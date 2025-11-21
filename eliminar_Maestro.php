<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $servername = "db";
        $username = "usuario";
        $password = "12345";
        $dbname = "socialService";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "DELETE FROM maestro WHERE id=$id";
        $conn->query($sql);

    }

    header("location: crud_maestros.php");
    exit;
?>