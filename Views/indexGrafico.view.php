<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gráfico de Torta Compacto</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    /* Aquí tus estilos CSS */
    body {
      margin: 0;
      background-color: #f0f0f0;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }

    nav {
      width: 100%;
      background-color: #808080;
      padding: 10px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      margin: 0 5px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #666;
    }

    canvas {
      max-width: 100%;
      max-height: 90%;
    }
  </style>
</head>

<body>
  <nav>
    <a href="indexGrafico.php">Inicio</a>
    <a href="indexAlumno.php">Alumnos</a>
    <a href="indexProfesor.php">Profesores</a>
    <a href="indexMateria.php">Materias</a>
  </nav>

  <canvas id="myPieChart"></canvas>

  <script>
    const labels = ['Alumnos', 'Profesores', 'Materias'];
    const dataValues = [<?php echo $datos['alumnos']; ?>, <?php echo $datos['profesores']; ?>, <?php echo $datos['materias']; ?>];

    const ctx = document.getElementById('myPieChart').getContext('2d');
    const myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: labels,
        datasets: [{
          data: dataValues,
          backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
    });
  </script>
</body>

</html>