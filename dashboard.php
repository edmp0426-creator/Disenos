<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Test Allport</title>
    <link rel="stylesheet" href="estilogeneral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<!-- ======== js para moverse entre pestanas ======== -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab');
    const secciones = {
        resumen: document.getElementById('tab-resumen'),
        alumnos: document.getElementById('tab-alumnos')
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const objetivo = tab.dataset.tab; // "resumen" o "alumnos"

            // Cambiar estilo de los botones
            tabs.forEach(t => t.classList.remove('activo'));
            tab.classList.add('activo');

            // Mostrar/ocultar secciones
            Object.values(secciones).forEach(sec => sec.classList.remove('activa'));
            secciones[objetivo].classList.add('activa');
        });
    });
});
</script>

<!-- ======== grafica ======== -->
<script>
document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById("graficaAllport");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Teórico", "Económico", "Estético", "Social", "Político", "Religioso"],
            datasets: [{
                label: "Cantidad de alumnos",
                data: [8, 12, 10, 16, 7, 3], // Puedes cambiar estos números
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });

});
</script>

<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Dashboard</h1>
                <ul class="nav-links">
                    <li><a href="home_admi.php" class="active">Home</a></li>
                    <li><a href="crud_alumnos.php">Alumnos</a></li>
                    <li><a href="crud_maestros.php">Maestros</a></li>
                    <li><a href="login.php" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1 class="titulo">Resultados Test Allport</h1>

    <!-- Tabs -->
    <div class="tabs">
    <button class="tab activo" data-tab="resumen">Resumen general</button>
    <button class="tab" data-tab="alumnos">Resultados alumnos</button>
    </div>

    <!-- ======== SECCIÓN RESUMEN GENERAL ======== -->
    <div id="tab-resumen" class="seccion-tab activa">

        <div class="tarjeta">
            <p>Alumnos evaluados</p>
            <h2>50</h2>
        </div>

        <div class="tarjeta">
            <p>Valor predominante</p>
            <h2>Social</h2>
        </div>

        <div class="tarjeta">
            <p>Valor minoritario</p>
            <h2>Religioso</h2>
        </div>

        <div class="tarjeta">
            <p>Porcentaje con valores dominantes similares</p>
            <h2>38%</h2>
        </div>

        <div class="tarjeta">
            <p>Perfil más común</p>
            <h2>Idealista moral</h2>
        </div>

        <!-- Gráfica -->
        <div class="grafica">
            <h3>Test Allport</h3>
            <!-- Inserta Chart.js aquí -->
            <canvas id="graficaAllport"></canvas>
        </div>
    </div>

    <!-- ======== SECCIÓN TABLA DE ALUMNOS ======== -->
    <div id="tab-alumnos" class="seccion-tab">

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Valor predominante</th>
                    <th colspan="6">Resultados</th>
                    <th>Acciones</th>
                </tr>

                <tr class="subencabezado">
                    <th></th><th></th><th></th><th></th>
                    <th>Teórico</th><th>Económico</th><th>Estético</th>
                    <th>Social</th><th>Político</th><th>Religioso</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Alumno 1</td>
                    <td>alumno1@gmail.com</td>
                    <td>17/10/2025</td>
                    <td class="predominante social">Social</td>
                    <td>10%</td><td>12%</td><td>14%</td><td>38%</td><td>35%</td><td>10%</td>
                    <td>
                        <a class="ver" href="detalles_estudiante.php">Ver</a>
                        <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <!-- DUPLICA ESTE TR BLOQUE LAS VECES QUE NECESITES -->
            </tbody>
        </table>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>
