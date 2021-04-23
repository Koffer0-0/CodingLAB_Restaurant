<?php
	session_start();

	if ($_SESSION['user']) {
	    header('Location: ../index.php');
	}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity = "sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin = "anonymous">

	<title>
		Login
	</title>
	<style>
		body {
		    height: 100vh;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}
		button { 
			margin: 15px 0;
		}

	</style>
</head>
<body>
<main>
	<div class = "container">
			<section>
			<form action = "SignIn.php" method = "post">
				<label for = "Login">Login:</label>
				<input type = "text" name = "Login" id = "Login" class = "form-control" placeholder = "Write your login">
				
				<label for = "Password">Password:</label>
				<input type = "Password" name = "Password" id = "Password" class = "form-control" placeholder = "Password">

				<button class = "form-control bg-success text-light" name = "log">Sign in</button>
			</form>
			<div class = "col-12">
				<p>
		            New user? <a href = "registration.php">Sign up</a>!
		        </p>
				<?php
		            if ($_SESSION['message']) {
		                echo '<p class = "msg"> '.$_SESSION['message'] .'</p>';
		            }
		            unset($_SESSION['message']);
		        ?>	
			</div>
			</section>
	</div>
	
	
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity = "sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin = "anonymous"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity = "sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin = "anonymous"></script>
</main>
</body>
</html>