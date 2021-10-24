<?php
  include_once 'apipokemon.php';
  $api = new ApiPokemon();

  if (isset($_POST['name']) && isset($_FILES['imagen'])) {
    if ($api->subirImagen($$_FILES['image_svg'])) {
      // insertar datos
      $item = array(
        'name' => $_POST['name'],
        'imagen_svg' => $api->getImagen()
      );
      $api->add($item);
    } else {
      $api->error('Error con el archivo: ' . $api->getError());
    }
  } else {
    $api->error('Error al llamar a la API');
  }
?>