<?php
require_once __DIR__ . '/../Model/Alumno.php';
require_once __DIR__ . '/../Model/Materia.php';

$id = $_GET['id'];
$alumno = Alumno::getById($id);
$todasLasMaterias = Materia::all();

if (isset($_POST['guardarMaterias'])) {

    $alumno->quitarMaterias();
    
    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $materia_id) {
            $alumno->asignarMateria($materia_id);
        }
    }

    header('Location: indexAlumno.php');
    exit;
}

require_once __DIR__ . '/../Views/indexAlumnoMaterias.view.php';