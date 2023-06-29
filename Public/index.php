<?php @session_start(); 


if (isset($_SESSION["isLoggedIn"])) {
	header('location: home.php');
}
	
	

?>
<?php include '../App/connection.php' ?>
<?php include '../App/login.php' ?>






<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	

</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center ">
					<h2>Login form</h2>
				</div>
				<div class="card-body">
					<form action="../App/login.php" method="post" autocomplete="off">
						<div class="form-group">
							<label for="Username">Username</label>
							<input type="text" class="form-control" name="username" />
							<p class="error username-error"></p>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" />
							<p class="error username-error"></p>
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Login" name="logbutton">
					</form>
				</div>
				<div class="card-footer text-right">

				</div>
			</div>
		</div>
	</div>
</body>
</html>