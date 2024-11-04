<?php

require_once __DIR__ .'/../Model/Alumno.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecnac = $_POST['fecnac'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecnac = $fecnac;
    $alumno->create();

    header('Location: ../Controllers/indexAlumno.php');
}

require_once __DIR__ .'/../Views/createAlumno.view.php';
