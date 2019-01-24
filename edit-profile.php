<?php
session_start();
?>
<?php include 'config/head.php'; ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.html"><b>Segurin</b>CRM</a>
    </div>
    <!-- /.login-logo -->
  </div>
  <div class="container">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mi perfil</h3>
      </div>
      <!-- /.box-header -->
      <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
      {
      } else {
          echo "<div class='alert alert-danger' role='alert'>
          <h4>You need to login to access this page.</h4>
          <p><a href='login.html'>Login Here!</a></p></div>";
          exit;
      }
          // checking the time now when home page starts
          $now = time();
          if ($now > $_SESSION['expire'] )
          {
              session_destroy();
              echo "<div class='alert alert-danger' role='alert'>
              <h4>Your session has expire!</h4>
              <p><a href='login.html'>Login Here</a></p></div>";
              exit;
          }
      ?>
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="Email">Correo Electronico:</label>
            <input type="email" class="form-control" id="Email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="Password">Contraseña:</label>
            <input type="password" class="form-control" id="Password" placeholder="Password">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
      <p><a href="crm.php">Regresar al CRM</a></p>
      <p><a href="logout.php">Logout</a></p>
    </div>
  </div>
  <?php include 'config/body.php'; ?>
</body>

</html>
