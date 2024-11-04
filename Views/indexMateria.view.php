<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DataTables Server-side procesado con PHP y MYSQL</title>
    <!-- DataTables CSS library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables JBootstrap -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }

        nav {
            background-color: #808080;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #666;
        }
    </style>
</head>

<body>

    <body>
        <nav>
            <a href="indexGrafico.php">Inicio</a>
            <a href="indexAlumno.php">Alumnos</a>
            <a href="indexProfesor.php">Profesores</a>
            <a href="indexMateria.php">Materias</a>
        </nav>
        <div class="bs-example">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <a href="createMateria.php" class="btn btn-success float-right">Agregar Materia</a>
                            <h2 class="pull-left">Lista de Materias</h2>
                        </div>
                        <table id="listaMaterias" class="table table-sm table-striped table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($materias as $materia) { ?>
                                    <tr>
                                        <td><?= $materia->id; ?></td>
                                        <td><?= $materia->nombre; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="editarMateria.php?id=<?= $materia->id; ?>"
                                                    class="btn btn-warning btn-sm">Editar</a>
                                                <a href="eliminarMateria.php?id=<?= $materia->id; ?>"
                                                    class="btn btn-danger btn-sm">Eliminar</a>

                                            </div>
                                        </td>
                                    </tr>

                                <?php }

                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function () {
            $('#listaMaterias').DataTable({});
        });
    </script>

</html>