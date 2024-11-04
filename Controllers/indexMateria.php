<?php 

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Alumno.php';


$materias = Materia::all();


require_once __DIR__ .'/../Views/indexMateria.view.php';