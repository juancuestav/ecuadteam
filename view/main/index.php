<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/main.css' ?>">
</head>

<body>
  <?php require 'view/header.php' ?>

  <!-- Banner -->
  <div class="banner">
    <div class="row g-0">
      <div class="col text-center">
        <img id="logo" height="140px" src="<?php echo constant('URL') . 'public/images/logo_vertical.svg' ?>">
      </div>
    </div>
    <div class="mt-5 d-grid md-flex justify-content-center">
      <div class="col-12 mt-2">
        <a class="button" href="<?php echo constant('URL') . 'contacto' ?>">Contáctame</a>
      </div>
    </div>
  </div>

  <!-- Perfil -->
  <div class="container p-4 mt-4">
    <div class="row g-0">
      <div class="col text-center text-primary">
        <h3>Perfil profesional</h3>
      </div>
    </div>
    <div class="row g-0 animationHideToShow">
      <div class="col-lg-4 col-md-6 text-center p-4">
        <img class="w-50 rounded " src="<?php echo constant('URL') . 'public/images/perfil.jpg' ?>">
      </div>
      <div class="col-lg-8 col-md-6 mt-4">
        <span class="text-lg-start text-md-start text-center typed fs-5"></span>
        <div id="cadenas-texto">
          <p>Hola, mi nombre es <span class="text-secondary">Juan Cuesta.</span></br>
            Soy <span class="text-secondary">Ingeniero de Sistemas.</span></br>
            Fundador de <span class="text-secondary">ECUADteam.</span></p>
        </div>
        <p class="mt-4 text-lg-start text-md-start text-center">Graduado de la carrera de Ingeniería de Sistemas en la Universidad Técnica de Machala,
          institución en donde he logrado desarrollar un alto nivel de compromiso y organización a fin
          de explotar mis estudios aplicándolos a diferentes proyectos, desarrollando nuevas habilidades.
          Siendo capaz de adaptarme a cualquier circunstancia y dar siempre lo mejor en cualquier área de trabajo,
          al mismo tiempo que me empeño por trabajar en equipo y fomentar valores como los del compañerismo.</p>
      </div>
    </div>
  </div>

  <!-- Portafolio -->
  <div class="row g-0 px-4 mt-2 header-portfolio">
    <h3 class="text-center h5 form-subtitle animationTopToBottom">ECUADTEAM</h3>
    <h2 class="text-primary text-center h1 animationTopToBottom">Bienvenido</h2>
    <p class="text-white text-center mt-2 animationTopToBottom">Nuestro equipo le brindará la solución a la medida de su necesidad, y así potenciar su negocio ¡juntos!</p>
    <img class="mt-5" src="<?php echo constant('URL') . 'public/images/torres.png' ?>">
  </div>
  <div class="row g-0 pt-4">
    <div class="col text-center p-4 text-primary">
      <h3>Portafolio de proyectos</h3>
    </div>
  </div>

  <div class="row g-0 p-4 d-flex justify-content-center">
    <!-- Card PokeApi -->
    <div class="col-lg-3 col-md-4 mt-3 mx-2 card">
      <img width="120px" class="my-2 mx-auto" src="<?php echo constant('URL') . 'public/images/pokemon.svg' ?>">
      <h4 class="mt-5">PokeApi: API Rest</h4>
      <p>Desarrollada en PHP y basada en la API utilizando el patrón MVC.<a href="https://pokeapi.co/">https://pokeapi.co</a>.</p>
      <p>Proporciona todos los datos de Pokémon que necesarios, en un solo lugar,
        fácilmente accesible a través de una API RESTful moderna.</p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-end align-items-end h-100">
        <button type="submit" class="button-card">Ver aplicación</button>
      </div>
    </div>

    <!-- Card PokeDex WebApp -->
    <div class="col-lg-3 col-md-4 mt-3 mx-2 card">
      <img width="120px" class="my-2 mx-auto" src="<?php echo constant('URL') . 'public/images/pokemon.svg' ?>">
      <h4 class="mt-5">PokeDex: WebApp</h4>
      <p>Desarrollada en PHP - HTML5, CSS, Javascript, Bootstrap, MySQL. Utilizando el patrón MVC.</p>
      <p>Una aplicación web donde se puede ver a todos los pokemons existentes, realizar búsquedas y revisar en detalle cuáles son las principales características de un Pokémon. Tiene una vista detallada de cada pokemon y paginación.</p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-end align-items-end h-100">
        <button type="submit" class="button-card">Ver aplicación</button>
      </div>
    </div>

    <!-- Card Website PHP -->
    <div class="col-lg-3 col-md-4 mt-3 mx-2 card">
      <img width="40px" class="my-2 mx-auto" src="<?php echo constant('URL') . 'public/images/logo_only_square.svg' ?>">
      <h4 class="mt-5">ECUADteam: WebSite</h4>
      <p>Desarrollada en PHP - HTML5, CSS, Javascript, Bootstrap, MySQL. Utilizando el patrón MVC.</p>
      <p>Todos los datos de Pokémon que necesitarás en un solo lugar,
        fácilmente accesible a través de una API RESTful moderna.</p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-end align-items-end h-100">
        <button type="submit" class="button-card">Ver aplicación</button>
      </div>
    </div>

    <!-- Card LinuxNotes -->
    <div class="col-lg-3 col-md-4 mt-3 mx-2 card">
      <img width="90px" class="my-2 mx-auto" src="<?php echo constant('URL') . 'public/images/linuxnotes.svg' ?>">
      <h4 class="mt-5">LinuxNotes: Android App</h4>
      <p>Aplicación desarrollada en Java.</p>
      <p>LinuxNotes es una herramienta especialmente desarrollada para aquellos entusiastas de GNU/Linux. Contiene un repertorio de comandos organizados por categorías para todos los niveles. El objetivo principal es facilitar el aprendizaje y dominio de los comandos logrando gestionar eficientemente su sistema al tener todo lo que necesitas a la mano.</p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-end align-items-end h-100">
        <a type="button" class="button-card" href="https://play.google.com/store/apps/details?id=com.ecuadteam.linuxnotes&hl=es" target="_blank">Ver aplicación</a>
      </div>
    </div>

    <!-- Card PokeDex Android -->
    <div class="col-lg-3 col-md-4 mt-3 mx-2 card">
      <img width="120px" class="my-2 mx-auto" src="<?php echo constant('URL') . 'public/images/pokemon.svg' ?>">
      <h4 class="mt-5">PokeDex: Android App</h4>
      <p>Aplicación desarrollada en Kotlin.</p>
      <p>Una aplicación Android donde se puede ver a todos los pokemons existentes, realizar búsquedas y revisar en detalle cuáles son las principales características de un Pokémon. Tiene una vista detallada de cada pokemon y paginación.</p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-end align-items-end h-100">
        <button type="submit" class="button-card">Ver aplicación</button>
      </div>
    </div>
  </div>

  <script src="<?php echo constant('URL') . 'public/js/typed.js' ?>"></script>
  <script src="<?php echo constant('URL') . 'public/js/main.js' ?>"></script>
  <?php require 'view/footer.php' ?>
</body>

</html>