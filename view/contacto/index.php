<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/contacto.css' ?>" />
</head>

<body>
  <?php require 'view/header.php' ?>

  <div class="row my-5 mx-2 animTopToBottom">
    <form id="contactForm">
      <div class="container card">
        <div class="row">
          <div class="col-md-4 mt-4">
            <h3 class="form-subtitle">CORREO</h3>
            <h2 class="form-title">Contáctame</h2>
          </div>
          <div class="col-md-8">
            <div class="row my-4">
              <div class="col-lg-6 col-md-12 mt-4">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Obligatorio" required>
              </div>

              <div class="col-lg-6 col-md-12 mt-4">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Obligatorio" required>
              </div>

              <div class="col-12 mt-4">
                <label for="message" class="form-label">Mensaje:</label>
                <textarea rows="3" class="form-control" name="message" id="message" placeholder="Obligatorio" required></textarea>
              </div>
              <div class="d-grid mt-4 d-md-flex justify-content-md-end">
                <button id="btnSendEmail" type="submit" class="button-card">Enviar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <div class="row my-5">
    <div class="col-md-4 mx-auto">
      <img class="w-100" src="<?php echo constant('URL') . 'public/images/contact_us.svg' ?>" alt="contact us">
    </div>
  </div>

  <?php require 'view/footer.php' ?>

  <script src="<?php echo constant('URL') . 'public/js/contacto.js' ?>"></script>
</body>

</html>