<?php
include_once("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{background-color: #dbf3fa;}
		.card{margin-top: 20px;}
	</style>
	<title>ShoppingCart</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php" class="navbar-brand">ShoppingCart</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
	</button>
	<div id="myNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
				<li class="nav-item"><a class="nav-link" href="register.php">Sign up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="card" style="padding: 2%;">
				<h2 class="text-center">Log in Here</h2>
				<form method="POST">
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Phone :</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Enter name" name="phone">
					    </div>
					</div>
				    <div class="form-group row">
				    	<label for="password" class="col-sm-2 col-form-label">Password :</label>
				    	<div class="col-sm-10">
				    	<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
				        </div>
				    </div>
				    <button type="submit" class="btn btn-primary" style="margin-left: 17%">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$sql = mysqli_query($con,"SELECT phone FROM users WHERE phone = '$phone' and password = '$password'");
	$row = mysqli_num_rows($sql);
	if($row>0){
		$_SESSION['phone'] = $phone;
		header("Location: home.php");
	}else{
		echo '<p style="color:red;">Try again !!!</p>';
	}

}


?>