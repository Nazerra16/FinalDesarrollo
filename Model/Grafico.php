<?php

require_once 'Conexion.php';
require_once 'Materia.php';
require_once 'Profesor.php';

class Grafico extends Conexion
{

    public static function obtenerDatos()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $resultAlumnos = mysqli_query($conexion->con, "SELECT COUNT(*) FROM alumnos");
        $alumnosD = mysqli_fetch_array($resultAlumnos)[0];


        $resultProfesores = mysqli_query($conexion->con, "SELECT COUNT(*) FROM profesores");
        $profesoresD = mysqli_fetch_array($resultProfesores)[0];


        $resultMaterias = mysqli_query($conexion->con, "SELECT COUNT(*) FROM materias");
        $materiasD = mysqli_fetch_array($resultMaterias)[0];

        
        mysqli_close($conexion->con);
        return [
            'alumnos' => $alumnosD,
            'profesores' => $profesoresD,
            'materias' => $materiasD,
        ];
    }
}