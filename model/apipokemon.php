<?php
  include_once 'pokemonModel.php';

  class ApiPokemon {
    private $imagen;
    private $error;

    function getAll() {
      $pokemon = new PokemonModel();
      $pokemons = array();
      $pokemons["results"] = array();

      $res = $pokemon->obtenerPokemons();
      if($res->rowCount()) {
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
          $item = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'image_svg' => $row['image_svg'],
            'image_png' => $row['image_png'],
          );
          array_push($pokemons["results"], $item);
        }
        $this->printJSON($pokemons);
      } else {
        $this->error('NO hay elementos registrados.');
      }
    }

    function getById($id) {
      $pokemon = new PokemonModel();
      $pokemons = array();
      $pokemons["results"] = array();

      $res = $pokemon->obtenerPokemon($id);
      if($res->rowCount() == 1) {
        $row = $res->fetch();
        $item = array(
          'id' => $row['id'],
          'name' => $row['name'],
          'image_svg' => $row['image_svg'],
          'image_png' => $row['image_png'],
        );
        array_push($pokemons["results"], $item);
        
        $this->printJSON($pokemons);
      } else {
        $this->error('NO hay elementos registrados.');
      }
    }

    function printJSON($array) {
      echo json_encode($array);
    }

    function add($item) {
      $pokemon = new PokemonModel();
      $res = $pokemon->registerPokemon($item);
      $this->exito('Pokemon registrado!');
    }

    function exito($mensaje) {
      echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>';
    }

    function error($mensaje) {
      echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>';
    }

    function subirImagen($file) {
      $directorio = "images/";

      $this->imagen = basename($file['name']);
      $archivo = $directorio . basename($file['name']);

      $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
      // valida que es imagen
      $checarSiImagen = getimagesize($file['tmp_name']);

      if ($checarSiImagen != false) {
        // validando tamaño del archivo
        $size = $file['size'];

        if ($size > 500000) {
          $this->error = "El archivo tiene que ser mnor a 500kb";
          return false;
        } else {
          // validar tipo de imagen
          if ($tipoArchivo == 'jpg' || $tipoArchivo == 'jpeg') {
            if (move_uploaded_file($file['tmp_name'], $archivo)) {
              // subido
              return true;
            } else {
              $this->error = "Hubo un error al subir imagen";
              return false;
            }
          } else {
            $this->error = "Solo se admiten archivos jpg/jpeg";
            return false;
          }
        }
      } else {
        $this->error = "El archivo no es una imagen";
        return false;
      }
    }

    function getImagen() {
      return $this->imagen;
    }

    function getError() {
      return $this->error;
    }
  }
?>