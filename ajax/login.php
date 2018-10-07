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
		$password = $_POST['password'];

		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists - try to log them in
			$User = $findUser->fetch(PDO::FETCH_ASSOC);
			$user_id = (int) $User['user_id'];
			$hash = $User['password'];

			if(password_verify($password, $hash)) {
				//user is signed in
				$return['redirect'] = '/dashboard.php';
				$_SESSION['user_id'] = $user_id;

			} else {
				//invalid user / password combo
				$return['error'] = "Invalid email / password combination.  Please try again.";
			}



		} else {
			// User does not exist, add user

			$return['error'] = "Hmmm. It seems you don't have an account.  Please <a href='/register.php'>register</a>.";

		}

		

		echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		// DIE - kill the script
		exit('Invalid URL');
	}

?>
