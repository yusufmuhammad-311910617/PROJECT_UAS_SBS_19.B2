<!DOCTYPE html>
<html>
	<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/css.php"); ?>

<br>
<br>
<br>

<center> <p><img src="image/logo.png"  style="width:200px;height:150px;"></p> </center>
         <meta charset="utf-8">
			<title>Login</title>
			<link rel="stylesheet" href="css/stylee.css" />
		</head>
		
		<body>
		<header>

    <?php include("login/atasan.php"); ?>

  </header>
			<?php
				require('db.php');
				session_start();
				// If form submitted, insert values into the database.
				if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "
			<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to 
				<a href='login.php'>Login</a>
			</div>";
				}
    }else{
?>
			<div class="form">
				<h1>Log In</h1>
				<form action="" method="post" name="login">
					<input type="text" name="username" placeholder="Username" required />
					<input type="password" name="password" placeholder="Password" required />
					<input name="submit" type="submit" value="Login" />
				</form>
				<p>Belom Registrasi? 
					<a href='registration.php'>Silahkan Klik Disini</a>
				</p>
			</div>
			
			<?php } ?>
			
		</body>
		
	</html>
