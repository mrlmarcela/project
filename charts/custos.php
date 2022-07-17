<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<canvas id="custos"></canvas>
<script>
    const custo = document.getElementById('custos').getContext('2d');
    const custos = new Chart(custo, {
        type: 'bar',
        data: {
            labels: ['Planejado', 'Realizado', ],
            datasets: [{
                label: 'Custos',
                data: [12, 50],
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
    });
</script>