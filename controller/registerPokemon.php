<?php
  class registerPokemon extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->mensaje = "Registrar un nuevo Pokemon";
    }

    function render() {
      $this->view->render('registerPokemon/index');
    }

    function registerPokemon() {
      $name = $_POST['name'];
      $image_svg = $_POST['image_svg'];
      
      $mensaje = "";
      if($this->model->registerPokemon(['name' => $name, 'image_svg' => $image_svg])) {
        $mensaje = "Pokemon creado";
      } else {
        $mensaje = "Este pokemon ya está registrado";
      }
      $this->view->mensaje = $mensaje;
      $this->render();
    }
  }
?>