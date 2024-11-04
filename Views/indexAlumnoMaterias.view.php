<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materias del Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        nav {
            background-color: #808080;
            padding: 10px;
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
    </style>
</head>

<body>
    <nav>
        <a href="indexGrafico.php">Inicio</a>
        <a href="indexAlumno.php">Alumnos</a>
        <a href="indexProfesor.php">Profesores</a>
        <a href="indexMateria.php">Materias</a>
    </nav>
    <div class="container">
        <h1 class="mb-4">Editar Materias</h1>
        <form action="" method="post">
            <div class="form-group">
                <?php foreach ($todasLasMaterias as $materia): ?>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="materia_<?= $materia->id ?>"
                            name="materias[]" value="<?= $materia->id ?>" <?= in_array($materia, $alumno->materias()) ? 'checked' : '' ?>>
                        <label class="custom-control-label"
                            for="materia_<?= $materia->id ?>"><?= $materia->nombre ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" name="guardarMaterias" class="btn btn-primary">
                Guardar Cambios
            </button>
        </form>
    </div>
</body>

</html>