<?php
  class main extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->mensaje = "Hola, mi nombre es Juan Bryan Cuesta Vera. Soy Ingeniero de Sistemas";
    }

    function render() {
      $this->view->render('main/index');
    }

    function saludo() {
      //
    }
  }
?>