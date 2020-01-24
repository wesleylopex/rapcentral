<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("application/views/painel/utils/start.php") ?>
</head>

<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <h3 class="text-center">Sign In To Admin</h3>
      <?= form_open("painel/login/logar", ["class" => "login-form"]) ?>
      <!-- <div class="login-form"> -->
      <div class="form-group form-floating-label">
        <!-- <label for="username" class="placeholder">Username</label> -->
        <input name="usuario" type="text" class="form-control input-border-bottom" autocomplete="off" placeholder="Usuário">
      </div>
      <div class="form-group form-floating-label">
        <!-- <label for="password" class="placeholder">Password</label> -->
        <input name="senha" type="password" class="form-control input-border-bottom" autocomplete="off" placeholder="Senha">
        <div class="show-password">
          <i class="flaticon-interface"></i>
        </div>
      </div>
      <div class="form-action">
        <button class="btn btn-primary btn-rounded btn-login">Entrar</button>
      </div>
      </form>
    </div>
  </div>
  <?php include_once("application/views/painel/utils/end.php") ?>
</body>

</html>