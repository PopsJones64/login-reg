<?php
	//force login or redirect
	function forceLogin() {
		if(isset($_SESSION['user_id'])) {
			//user is logged in

		} else {
			header("Location: /login.php"); exit;
		}
	}

?>