<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css" />
	</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
  // removes backslashes
	$email = stripslashes($_POST['email']);
	//escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_POST['pass']);
	$password = mysqli_real_escape_string($con,$password);
	error_log(print_r($email, TRUE));
	error_log(print_r($password, TRUE));
	//Checking is user existing in the database or not
    echo $query = "SELECT * FROM registration WHERE email='$email'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	// error_log(print_r($result, TRUE));
	$rows = mysqli_num_rows($result);
	error_log(print_r($rows, TRUE));
  if($rows >=1){
	  $_SESSION['email'] = $email;
    // Redirect user to index.php
    error_log(print_r($_SESSION['email'], TRUE));
	  header("Location: mens_list.php");
	  exit;
  }else{
		echo "<div class='form'>
		<h3>Email/password is incorrect.</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>