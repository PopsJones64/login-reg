<?php 
	// authorize config file for this page
	define('__CONFIG__', true);
	// include config file
	include_once "../include/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		// header('Content-Type: application/json');

		$return = [];

		// Make sure user does not already exist
		$email = Filter::String ( $_POST['email'] );

		$findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists
			$return['error'] = "Email already exists.  Please <a href='login.php'>login</a>.";
			$return['is_logged_in'] = false;
		} else {
			// User does not exist, add user

			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$addUser = $con->prepare("INSERT INTO users (email, password) VALUES(LOWER(:email), :password)");
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->LastInsertId();

			$_SESSION['user_id'] = (int) $user_id;

			$return['redirect'] = '/dashboard.php?message=welcome';
			$return['is_logged_in'] = true;

		}

		

		echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		// DIE - kill the script
		exit('Invalid URL');
	}

?>

