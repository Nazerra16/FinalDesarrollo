<?php
require_once __DIR__ . '/../Model/Alumno.php';
require_once __DIR__ . '/../Model/Materia.php';

$id = $_GET['id']; //obtenemos la id del alumno por url
$profesor = Profesor::getById($id); //lo buscamos en la bd por esa id
$todasLasMaterias = Materia::all(); //mostramos una lista de materias

if (isset($_POST['guardarMaterias'])) {
    //si se aprieta el boton, primero se borran todas las materias del alumno por el metodo
    $profesor->quitarMaterias();

    //si hay  materias seleccionadas, se asignan
    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $profesor_id) {
            $profesor->asignarMateria($profesor_id);
        }
    }

    header('Location: indexProfesor.php');
    exit;
}

require_once __DIR__ . '/../Views/indexProfesorMaterias.view.php';