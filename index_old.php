<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Vertical</title>
    
     <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">

</head>
<body>
<aside>
    <a href="index.php"><img src="images/images.png" width="70"/></a>
    <ul>
        <!-- Enlaces con parámetros GET -->
         
        <li><a href="index.php?seccion=inicio">Estudiantes</a></li>
        <li><a href="index.php?seccion=consultas">Docentes</a></li>
        <li><a href="index.php?seccion=reportes">Administrativos</a></li>
    </ul>

</aside>   

<main>
    <?php
    // Recogemos la sección enviada por la URL; si no hay ninguna, asignamos 'inicio' por defecto
    $seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'inicio';

    // Definimos qué archivo cargar según la opción seleccionada
    switch ($seccion) {
        case 'inicio':
            include('estudiantes.php');
            break;
        case 'consultas':
            include('docentes.php');
            break;
        case 'reportes':
            include('administrativos.php');
            break;
        default:
            echo "<h2>Página no encontrada</h2>";
            break;
    }
    ?>
</main> 

  </body>
</html>
