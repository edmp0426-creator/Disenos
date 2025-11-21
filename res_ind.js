document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById("radarAllport");

  // Datos de ejemplo (puedes cambiarlos por los valores reales)
    const datosValores = [75, 40, 60, 90, 35, 20]; 
  // Orden: [Teórico, Económico, Estético, Social, Político, Religioso]

    new Chart(ctx, {
    type: "radar",
    data: {
        labels: ["Teórico", "Económico", "Estético", "Social", "Político", "Religioso"],
        datasets: [{
        label: "Perfil de valores",
        data: datosValores,
        backgroundColor: "rgba(0, 128, 96, 0.4)",   // relleno verde translúcido
        borderColor: "rgba(0, 128, 96, 1)",         // borde verde
        pointBackgroundColor: "rgba(0, 128, 96, 1)",
        pointBorderColor: "#ffffff",
        pointRadius: 3,
        borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false
        }
        },
        scales: {
        r: {
            beginAtZero: true,
            suggestedMax: 100,
            ticks: {
            display: false    // ocultamos los números de los radios
            },
            grid: {
            color: "#cccccc"
            },
            angleLines: {
            color: "#cccccc"
            },
            pointLabels: {
            font: {
                size: 12
            },
            color: "#333"
            }
        }
        }
    }
    });
});
