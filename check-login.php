<?php
session_start();
?>
<?php include 'config/head.php'; ?>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Segurin</b>CRM</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <div class='col'>
          <div class='box box-default'>
            <div class='box-header'>
              <i class='fa fa-bullhorn'></i>
                <h3 class='box-title'>Alerta</h3>
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
              <div class='callout callout-danger'>
                <h4>Email o Contraseña incorrectos!</h4>
                <p><a href='index.php'><strong>Porfavor intentelo de nuevo!</strong></a></p></div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
<?php

	// Connection info. file
	include 'conn.php';

	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// data sent from form login.html
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Query sent to database
	$result = mysqli_query($conn, "SELECT Email, Password, Name FROM root WHERE Email = '$email'");

	// Variable $row hold the result of the query
	$row = mysqli_fetch_assoc($result);

	// Variable $hash hold the password hash on database
	$hash = $row['Password'];

	/*
	password_Verify() function verify if the password entered by the user
	match the password hash on the database. If everything is ok the session
	is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
	*/
	if (password_verify($_POST['password'], $hash)) {
    session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $row['Name'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;
		header('Location: crm.php');
	} else {
		echo "

    </div>";
	}
?>
<?php include 'config/body.php'; ?>
</body>
</html>
