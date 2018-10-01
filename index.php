<?php 
	// authorize config file for this page
	define('__CONFIG__', true);
	// include config file
	include_once "include/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Registration Class</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
	
	<div class="container">
		<h3>Please Login or Register</h3>
		<?php 
			echo "Hello There!  Today is:  ";
			echo date("m d Y");
		?>
		<a href="login.php">Login</a><a href="register.php"> | Register</a>
	</div>

	<?php 
		include_once "include/footer.php";
	?>

</body>
</html>
