<?php include 'includes/functions/functions.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto:wght@300;400;500&family=Sacramento&family=Raleway&family=Spinnaker&display=swap"
            rel="stylesheet"
        />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css" />
        <title>Dham Castell</title>
    </head>
    <body>
        <?php 
            $paginaActual = obtenerPaginaActual();
            if($paginaActual == 'index'){
                echo '<header class="inicio">';
            }else{
                echo '<header>';
            }
        ?>

            <nav class="header-navbar">
                <div class="header-inicio">
                    <a href="index.php">
                        <h2>Dham<strong>Castell</strong></h2>
                    </a>
                </div>

                <div class="header-sects">
                    <ul>
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="planes.php">Planes</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="acceso-pagina">
                    <ul>
                        <li>
                            <a href="#" class="inicia">Inicia Sesión</a>
                        </li>
                        <li>
                            <a href="#" class="btn-orng"> Registrate </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>