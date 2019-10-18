<?php include 'public/header.php'; ?>
<br><br>

  <div class="row">
    <div class="col"></div>
    <div class="col">
      <h1>Login</h1>
      <br>
      <form method="post" action="modelo_login.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
      </form>
    </div>
    <div class="col"></div>
  </div>


<?php include 'public/footer.php'; ?>
