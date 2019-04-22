<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear Cuenta</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="node_modules/ionicons/dist/css/ionicons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <?php
    session_start();
    include 'conn.php';
  	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  	// Check connection
  	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
  	}
    if (!isset($_POST['email']))
    {
      if($_SESSION['Rol'] == 'Admin')
      {
        header("location: crm.php");
      }
      else {
        header("location: index.php");
      }
    }
  	// Query to check if the email already exist
  	$checkEmail = "SELECT * FROM root WHERE Email = '$_POST[email]' ";
  	// Variable $result hold the connection data and the query
  	$result = $conn-> query($checkEmail);
  	// Variable $count hold the result of the query
  	$count = mysqli_num_rows($result);
  	// If count == 1 that means the email is already on the database
  	if ($count == 1) {
  	echo "<br />". "That email is already in our database." . "<br />";
  	echo "<a href='index.php'>Please Retrive your Password here</a>.";
  	} else {
  	/*
  	If the email don't exist, the data from the form is sended to the database
  	and the account is created
  	*/
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$pass = $_POST['password'];
  	// The password_hash() function convert the password in a hash before send it to the database
  	$passHash = password_hash($pass, PASSWORD_DEFAULT);
  	// Query to send Name, Email and Password hash to the database
  	$query = "INSERT INTO root (Name, Email, Password) VALUES ('$name', '$email', '$passHash')";
  	if (mysqli_query($conn, $query)) {
  		echo "<div class='alert alert-success' role='alert'><h3>Your account has been created.</h3>
  		<a class='btn btn-outline-primary' href='index.php' role='button'>Login</a></div>";
  		} else {
  			echo "Error: " . $query . "<br>" . mysqli_error($conn);
  		}
  	}
  	mysqli_close($conn);
  	?>
  </body>
</html>
