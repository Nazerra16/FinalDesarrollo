<?php

require_once __DIR__ .'/../Model/Materia.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];

    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->create();

    header('Location: ../Controllers/indexMateria.php');

}

require_once __DIR__ .'/../Views/createMateria.view.php';
