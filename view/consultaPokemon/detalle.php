<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php require 'view/header.php'?>
  
  <form class="container" action="<?php echo constant('URL') . 'consultaPokemon/updatePokemon' ?>" method="POST">
    <h1><?php echo $this->mensaje?></h1>

    <div class="row my-4">
      <div class="col-md-4">
        <label for="name" class="form-label">Nombre pokemon:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese un nombre..." value="<?php echo $this->pokemon->name ?>">
      </div>

      <div class="col-md-4">
        <label for="image_svg" class="form-label">Imagen SVG:</label>
        <input type="file" class="form-control" name="image_svg" id="image_svg" value="<?php echo $this->pokemon->name; ?>">
      </div>

      <div class="col-md-4">
        <label for="image_png" class="form-label">Imagen PNG:</label>
        <input type="file" class="form-control" name="image_png" id="image_png">
      </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-primary block">Registrar</button>
    </div>
  </form>

  <?php require 'view/footer.php'?>
</body>
</html>