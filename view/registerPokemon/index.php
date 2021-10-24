<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require 'view/header.php' ?>

  <div class="row my-5 mx-2 animTopToBottom">
    <form action="add.php" method="POST">
      <div class="container card">
        <!-- <h1><?php echo $this->mensaje ?></h1> -->

        <div class="row">
          <div class="col-md-4 mt-4">
            <h3 class="form-subtitle">Pokemon</h3>
            <h2 class="form-title">Formulario de registro</h2>
          </div>
          <div class="col-md-8">
            <div class="row my-4">
              <div class="col-lg-6 col-md-12 mt-4">
                <label for="name" class="form-label">Nombre pokemon:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese un nombre..." required>
              </div>

              <div class="col-lg-6 col-md-12 mt-4">
                <label for="image_svg" class="form-label">Imagen SVG:</label>
                <input type="file" class="form-control" name="image_svg" id="image_svg" required>
              </div>

              <div class="col-lg-6 col-md-12 mt-4">
                <label for="image_png" class="form-label">Imagen PNG:</label>
                <input type="file" class="form-control" name="image_png" id="image_png" required>
              </div>
            </div>
          </div>
        </div>
        <div class="d-grid d-md-flex justify-content-md-end">
          <button type="submit" class="button-card">Registrar</button>
        </div>
      </div>
    </form>
  </div>

  <?php require 'view/footer.php' ?>
</body>

</html>