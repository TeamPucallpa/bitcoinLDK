<?php  require("../config/config.php"); ?>
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
            <p class="login-card-description">Crear cuenta nueva</p>
              <form action="<?php echo URL_BASE."controllers/ClienteController?a=save"; ?>" method="POST">
                <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="referido" class="sr-only">Referidos</label>
                    <input type="text" name="referido" id="referido" class="form-control" placeholder="Referido (opcional)" required
                    <?php 
                      if(isset($_GET['referido']))
                      {
                        if(!empty($_GET['referido']))
                        {
                          echo 'value="'.$_GET['referido'].'"';
                        }
                      }
                    ?>
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre" class="sr-only">Nombres</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="apellido" class="sr-only">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email" class="sr-only">Corero Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="celular" class="sr-only">Número de Celular</label>
                    <input type="number" name="celular" id="celular" class="form-control" placeholder="Número de Celular" 
                    required>
                  </div>  
                </div>
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Contraseña</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Registrarte">
              </form>
              <a href="#!" class="forgot-password-link">¿Olvidaste tu contraseña?</a>
              <p class="login-card-footer-text">Si ya tienes una cuenta (<a href="<?php echo URL_BASE."views/index"; ?>" class="text-reset">Iniciar Sesión</a>)</p>
              <nav class="login-card-footer-nav">
                <a href="../legal/terms/update">Términos de uso  </a> 
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
