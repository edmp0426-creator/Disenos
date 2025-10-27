<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas del Test</title>
    <link rel="stylesheet" href="css/estilodetalle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header class="cabecera">
        <div>
            <img src="logo.png" alt="Logo" class="logoescuela">
            <nav class="navbar">
                <h1 class="tituloHeader">Detalles del Alumno</h1>
                <ul class="nav-links">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Maestros</a></li>
                    <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
    <!-- PANEL IZQUIERDO -->
    <aside class="sidebar">
        <div class="user-photo"></div>
        <div class="user-info">
        <p><strong>Nombre:</strong><br>Nombre del alumno</p>
        <p><strong>Matrícula:</strong><br>al019238456</p>
        <p><strong>Correo electrónico:</strong><br>alumno@gmail.com</p>
        </div>
    </aside>

    <!-- PANEL DERECHO -->
    <main class="main-content">
        <div class="header">
        <button class="btn">Respuestas del Test</button>
        <button class="btn"><i class="fa-solid fa-print"></i> Imprimir</button>
        </div>

        <div class="table-container">
        <!-- PARTE I -->
        <div class="section-title">Parte I</div>

        <div class="section">
            <div class="range">1 a 8</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <div class="section">
            <div class="range">9 a 16</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <div class="section">
            <div class="range">17 a 28</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <div class="section">
            <div class="range">14 a 30</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <!-- PARTE II -->
        <div class="section-title">Parte II</div>

        <div class="section">
            <div class="range">1 a 6</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <div class="section">
            <div class="range">7 a 11</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <div class="section">
            <div class="range">14 a 15</div>
            <div class="row">
            <div class="box">0</div><div class="box">0</div><div class="box">0</div>
            <div class="box">0</div><div class="box">0</div><div class="box">0</div><div class="box">0</div>
            </div>
            <div class="row">
            <div class="label">R</div><div class="label">S</div><div class="label">T</div>
            <div class="label">X</div><div class="label">Y</div><div class="label">Z</div>
            </div>
        </div>

        <!-- TABLA DE RESULTADOS -->
        <table class="results-table">
            <thead>
            <tr>
                <th rowspan="2">Evaluaciones parciales</th>
                <th rowspan="2">Página</th>
                <th colspan="6">Dimensiones</th>
                <th rowspan="2">Sumatoria</th>
            </tr>
            <tr>
                <th>Teórico</th><th>Económico</th><th>Estético</th>
                <th>Social</th><th>Político</th><th>Religioso</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Parte 1</td><td>Página 1</td><td>2</td><td>4</td><td>3</td><td>6</td><td>2</td><td>1</td><td>24</td></tr>
            <tr><td></td><td>Página 2</td><td>4</td><td>5</td><td>2</td><td>7</td><td>3</td><td>3</td><td>24</td></tr>
            <tr><td></td><td>Página 3</td><td>3</td><td>2</td><td>4</td><td>5</td><td>3</td><td>4</td><td>21</td></tr>
            <tr><td>Parte 2</td><td>Página 1</td><td>6</td><td>7</td><td>4</td><td>5</td><td>2</td><td>3</td><td>60</td></tr>
            <tr><td></td><td>Página 2</td><td>5</td><td>4</td><td>3</td><td>6</td><td>2</td><td>1</td><td>60</td></tr>
            <tr><td>Total</td><td></td><td>20</td><td>22</td><td>16</td><td>29</td><td>12</td><td>12</td><td>240</td></tr>
            </tbody>
        </table>

        <!-- GRÁFICO -->
        <div class="chart-container">
            <h4>VALORES E INTERESES DEL EVALUADO</h4>
            <canvas id="valoresChart"></canvas>
        </div>
        </div>
    </main>
    </div>

    <script>
    const ctx = document.getElementById('valoresChart');
    new Chart(ctx, {
        type: 'line',
        data: {
        labels: ['Teórico', 'Económico', 'Estético', 'Social', 'Político', 'Religioso'],
        datasets: [{
            label: 'Valores',
            data: [20, 22, 16, 29, 12, 12],
            borderColor: '#ffffff',
            backgroundColor: 'rgba(255,255,255,0.2)',
            borderWidth: 2,
            fill: true,
            pointBackgroundColor: '#fff'
        }]
        },
        options: {
        responsive: true,
        scales: {
            x: {
            ticks: { color: '#fff' },
            grid: { color: 'rgba(255,255,255,0.2)' }
            },
            y: {
            ticks: { color: '#fff' },
            grid: { color: 'rgba(255,255,255,0.2)' }
            }
        },
        plugins: {
            legend: { display: false }
        }
        }
    });
    </script>
</body>
</html>
