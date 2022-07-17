<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<canvas id="projetosClientes"></canvas>
<script>
    const projeto = document.getElementById('projetosClientes').getContext('2d');
    const projetosClientes = new Chart(projeto, {
        type: 'pie',
        data: {
            labels: ['Insole', 'CBTEC', 'Cesar school', 'Softex'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 10],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "right",
                    align: "middle"
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
        }
    });
</script>