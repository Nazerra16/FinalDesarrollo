<?php

require_once __DIR__ .'/../Model/Materia.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->create();

    header('Location: ../Controllers/indexProfesor.php');

}

require_once __DIR__ .'/../Views/createProfesor.view.php';