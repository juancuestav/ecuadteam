<?php
  include_once 'model/apipokemon.php';
  class pokeapi extends Controller{
    function __construct(){
      parent::__construct();
      // $this->view->mensaje = "Hola, mi nombre es Juan Bryan Cuesta Vera. Soy Ingeniero de Sistemas";
      }

    function render() {
      /* $api = new ApiPokemon();
      if (isset($_GET['id'])) {
        if (is_numeric($_GET['id']))
          $api->getById($_GET['id']);
        else
          $api->error("El campo id debe ser un entero.");
      } else {
        $api->getAll();
      }  */
    }
  }
?>
