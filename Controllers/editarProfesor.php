<?php

require_once __DIR__ .'/../Model/Profesor.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->update();

    header('Location: ../Controllers/indexProfesor.php');
    
} else  {
    $profesor = Profesor::getById($id);
    if ($profesor) {
        require_once __DIR__ .'/../Views/editarProfesor.view.php';
    }
}


