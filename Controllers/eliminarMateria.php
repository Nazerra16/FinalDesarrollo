<?php

require_once __DIR__ .'/../Model/Materia.php';

$id = $_GET['id'];

$materia = Materia::getById($id);

if ($materia) {
    $materia->eliminarMateriasAl();
    $materia->eliminarMateriasPro();
    $materia->delete();
    header('Location: ../Controllers/indexMateria.php');
}
