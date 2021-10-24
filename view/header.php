<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <title>ECUADteam</title>
</head>

<body>

    <!-- <div id="particles-js"></div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo constant('URL') ?>"><img src="<?php echo constant('URL') . 'public/images/logo.svg' ?>" height="35px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center">
                    <a class="nav-link active" href="<?php echo constant('URL'); ?>main">Inicio</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PokeApi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo constant('URL') . 'pokeapi'?>">API Rest</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>registerPokemon">Aplicación web</a></li>
                            <!-- <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>registerPokemon">Registrar pokemon</a></li>
                            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>consultaPokemon">Consultar pokemon</a></li> -->
                        </ul>
                    </li>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>contacto">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Particles.js -->
    <script src="<?php echo constant('URL'); ?>public/js/particles.min.js"></script>
    <!-- <script src="<?php echo constant('URL'); ?>public/js/app.js"></script> -->
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- FontAwesome-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

    <script src="<?php echo constant('URL') . 'public/js/scrollreveal.js' ?>"></script>
    
    <script src="<?php echo constant('URL'); ?>public/js/default.js"></script>
</body>

</html>