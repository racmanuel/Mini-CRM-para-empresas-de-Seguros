<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Check Login and create session</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">

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
		echo "<div class='alert alert-danger' role='alert'>Email or Password are incorrects!
		<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";
	}
?>
