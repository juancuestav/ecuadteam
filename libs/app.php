<?php

  class App {
    function __construct(){
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      $archivoController = 'controller/' . $url[0] . '.php';

      if (file_exists($archivoController)) {
        require_once $archivoController;
        
        // inicializar controlador
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        // # elementos arreglo
        // /controlador/funcion/params
        $nparam = sizeof($url);
        
        if ($nparam > 1) {
          if ($nparam > 2) {
            $param = [];
            for($i = 2; $i < $nparam; $i++) {
              array_push($param, $url[$i]);
            }
            echo $param;
            $controller->{$url[1]}($param);
          } else {
            $controller->{$url[1]}();
          }
        } else {
          $controller->render();
        }
      } else if ($url[0] == "") {
        require_once 'controller/main.php';
        $controller = new main();
        $controller->loadModel('main');
        $controller->render();
      } else {
        require_once 'controller/error.php';
        $controller = new ErrorRecurso();
      }
    }
  }
?>