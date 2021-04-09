
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo TITLE_NAME; ?></title>
  <link rel="icon" type="image/png" href="<?php echo ICONO_PAGEWEB; ?>">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-6">
            <img src="https://cdn.pixabay.com/photo/2016/11/10/05/09/bitcoin-1813503_960_720.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-6">
            <div class="card-body">
            <p class="login-card-description">Ingresa a tu cuenta</p>
              <form action="<?php echo URL_BASE."controllers/UsuarioController.php"; ?>" method="POST">
                <div class="form-group">
                <label for="email_celular" class="sr-only">Corero Electrónico o número de celular</label>
                <input type="email_celular" name="email_celular" id="email_celular" class="form-control" placeholder="Corero Electrónico o número de celular">
                </div>
                <div class="form-group mb-4">
                <label for="password" class="sr-only">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                </div>
                <input type="submit" name="login" id="login" class="btn btn-block login-btn mb-4"  value="Iniciar Sesión">
              </form>
              <a href="#!" class="forgot-password-link">¿Olvidaste tu contraseña?</a>
              <p class="login-card-footer-text">¿No tienes una cuenta? <a href="<?php echo URL_BASE."views/signup"; ?>" class="text-reset">Registrate aqui</a></p>
              <nav class="login-card-footer-nav">
                <a href="../legal/terms/update">Términos de uso  </a> 
                <!-- | <a href="#!">Política de privacidad</a> -->
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
