<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Client from Segments</title>

    <!-- Incluindo a biblioteca do Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Client List</h1>
    <a href="/clients/create" class="btn btn-primary mb-3">Add Client</a>
    <a href="/clients" class="btn btn-primary mb-3">Clients List</a>

        <h1>Clientes por Segmento</h1>

        <!-- Container do gráfico -->
        <canvas id="clientsChart" width="400" height="200"></canvas>

        <script>
            // Dados do gráfico
            const segmentsData = <?php echo json_encode($segments_data); ?>;

            // Preparando os labels e os dados de contagem
            const labels = segmentsData.map(segment => segment.segment);
            const data = segmentsData.map(segment => segment.count);

            // Criando o gráfico
            const ctx = document.getElementById('clientsChart').getContext('2d');
            const clientsChart = new Chart(ctx, {
                type: 'bar', // Tipo de gráfico: barras
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Número de Clientes',
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</div>
</body>
</html>