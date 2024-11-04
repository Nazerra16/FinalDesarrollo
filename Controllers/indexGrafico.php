<?php

require_once '../Model/Grafico.php';

$datos = Grafico::obtenerDatos();

require_once '../Views/indexGrafico.view.php';