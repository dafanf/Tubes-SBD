<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/uf-style.css">
    <title>Login Form</title>
  </head>
  <body style="background-image: url(<?= BASEURL; ?>/img/login-background-3.jpg);">
    <div class="uf-form-signin">
      <div class="text-center">
        <img src="<?= BASEURL; ?>/img/main-logo.png" alt="company-logo" width="250" height="250"></a>
      </div>
      <form class="mt-4">
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="d-flex mb-3 justify-content-between">
          <a href="#">Forgot password?</a>
        </div>
        <div class="d-grid mb-4">
          <button type="submit" class="uf-btn-primary">Login</button>
        </div>
        <!--div class="mt-4 text-center">
          <span class="text-white">Don't have an account?</span>
          <a href="register.html">Sign Up</a>
        </div-->
      </form>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="<?= BASEURL; ?>/js/popper.min.js"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
  </body>
</html>