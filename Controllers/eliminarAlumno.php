<?php

require_once __DIR__ .'/../Model/Alumno.php';

$id = $_GET['id'];

$alumno = Alumno::getById($id);

if ($alumno) {
    $alumno->eliminarMaterias();
    $alumno->delete();
    header('Location: ../Controllers/indexAlumno.php');
}