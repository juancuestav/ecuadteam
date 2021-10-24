<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php require 'view/header.php'?>

  <table class="container table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <!-- <th>Imagen SVG</th> -->
        <!-- <th>Imagen PNG</th> -->
      </tr>
    </thead>
    <tbody>
      <?php 
        include_once 'model/pokemon.php';
        foreach($this->alumnos as $row) {
          $pokemon = new Pokemon();
          $pokemon = $row;
      ?>
      <tr>
        <th scope="row"><?php echo $pokemon->id; ?></th>
        <td><?php echo $pokemon->name; ?></td>
        <td><a href="<?php echo constant('URL') . 'consultaPokemon/verPokemon/' . $pokemon->id ?>">Modificar</a></td>
        <td><a href="<?php echo constant('URL') . 'consultaPokemon/deletePokemon/' . $pokemon->id ?>">Eliminar</a></td>
        <!-- <td><?php echo $pokemon->image_svg; ?></td> -->
        <!-- <td><?php echo $pokemon->image_png; ?></td> -->
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php require 'view/footer.php'?>
</body>
</html>