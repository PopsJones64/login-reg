<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "include/config.php"; 

	forceLogin();
  exit;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Member Page | Dashboard</title>

    <base href="/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body>

  	<div class="container">
  		<h3>Dashboard Page</h3>
      <?php echo "You are logged in as " . $_SESSION['user_id'] . ". <a href = 'logout.php'>Logout</a>"; ?>
  	</div>

  	<?php require_once "include/footer.php"; ?> 
  </body>
</html>
