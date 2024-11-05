<?php
require_once __DIR__ . '/../Model/Alumno.php';
require_once __DIR__ . '/../Model/Materia.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);
$todasLasMaterias = Materia::all();

if (isset($_POST['guardarMaterias'])) {

    $profesor->eliminarMaterias();

    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $profesor_id) {
            $profesor->asignarMateria($profesor_id);
        }
    }

    header('Location: indexProfesor.php');
    exit;
}

require_once __DIR__ . '/../Views/indexProfesorMaterias.view.php';