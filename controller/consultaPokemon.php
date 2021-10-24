<?php
  class consultaPokemon extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->alumnos = [];
    }

    function render() {
      $alumnos = $this->model->get();
      $this->view->alumnos = $alumnos;
      $this->view->render('consultaPokemon/index');
    }

    function verPokemon($params = null) {
      $idPokemon = $params[0];
      $pokemon = $this->model->obtenerPokemonById($idPokemon);

      session_start();
      $_SESSION['idPokemon'] = $pokemon->id;

      $this->view->pokemon = $pokemon;
      $this->view->mensaje = "";
      $this->view->render('consultaPokemon/detalle');
    }

    function updatePokemon() {
      session_start();
      $id = $_SESSION['idPokemon'];
      $name = $_POST['name'];
      $image_svg = $_POST['image_svg'];
      $image_png = $_POST['image_png'];

      unset($_SESSION['idPokemon']);

      if ($this->model->updatePokemon(['id' => $id, 'name' => $name, 'image_svg' => $image_svg, 'image_png' => $image_png])) {
        $pokemon = new Pokemon();
        $pokemon->id = $id;
        $pokemon->name = $name;
        $pokemon->image_svg = $image_svg;
        $pokemon->image_png = $image_png;

        $this->view->pokemon = $pokemon;
        $this->view->mensaje = "Pokemon actualizado correctamente.";
      } else {
        $this->view->mensaje = "No se pudo actualizar.";
      }
      $this->view->render('consultaPokemon/detalle');
    }

    function deletePokemon($params) {
      $idPokemon = $params[0];

      if ($this->model->deletePokemon(['id' => $idPokemon])) {
        $this->view->mensaje = "Pokemon eliminado correctamente.";
      } else {
        $this->view->mensaje = "No se pudo eliminar.";
      }
      $this->render();
    }
  }
?>