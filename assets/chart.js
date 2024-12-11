import Chart from 'chart.js/auto';  // Importer Chart.js

export default function renderChart() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Terminé', 'Non terminé'],
            datasets: [{
                label: 'Tâches',
                data: [60, 40],  // Remplacez ces données par vos statistiques
                backgroundColor: [
                    '#F7A7B8', // Rose clair
                    '#D4A5F7'  // Violet clair
                ],
                borderColor: ['#F7A7B8', '#D4A5F7'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.raw + '%';
                        }
                    }
                }
            },
            aspectRatio: 1, // Pour garder la forme circulaire
            width: 100, // Ajustez la taille ici
            height: 100 // Ajustez la taille ici
        }
    });
}
