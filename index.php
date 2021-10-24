<?php
  require_once 'libs/database.php';
  require_once 'libs/model.php';
  require_once 'libs/view.php';
  require_once 'libs/controller.php';
  require_once 'libs/app.php';
  require_once 'config/config.php';
  $app = new App();

  /* include_once 'model/apipokemon.php';

  $api = new ApiPokemon();
  if (isset($_GET['id'])) {
    if (is_numeric($_GET['id']))
      $api->getById($_GET['id']);
    else
      $api->error("El campo id debe ser un entero.");
  } else {
    $api->getAll();
  } */
?>