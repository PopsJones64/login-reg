<?php 
	
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
		<h3>Please Login</h3>
		<form>
		  <div class="form-group">
		  	<div class="form-row">
		  		<div class="col-md-4">
		  			<label for="inputEmail">Email address</label>
				    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter Your email" required>
		  		</div>
		  		<div class="col-md-8">
		  			<hr>
		  			<h4>Your email address will be kept private</h4>
		  			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  		</div>
		  	</div>
		    <div class="form-row">
		    	<div class="col-md-4">
		    		<label for="inputPassword">Password</label>
		    		<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Your Password" required>
		    	</div>
		    	<div class="col-md-8">
		    		<hr>
		    		<h4>Keep Your Password Private</h4>
		    		<small class="form-text text-muted">We certainly will.</small>
		    		<hr>
		    	</div>
		    </div>
		    
		  </div>
		  <button type="submit" class="btn btn-outline-dark">Submit</button>
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
