<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ShoppingCart</title>
  <style type="text/css">
    body{background-color: #dbf3fa;}
    .card{margin-top: 20px;}
    form{font-family: varadana;}
    h2{text-align: center;}
    label{text-align: right;}

  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php" class="navbar-brand">ShoppingCart</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
	</button>
	<div id="myNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
				<li class="nav-item active"><a class="nav-link" href="register.php">Sign up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="card" style="padding: 2%;">
  <h2>Create Account</h2>
  <form method="POST">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="firstname">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="lastname">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="col-sm-2 col-form-label">Gender</label>
      <div  class="col-sm-10">
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="gender" name="gender" value="Male">
        <label class="custom-control-label" for="gender"> Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="fgender" name="gender" value="female">
        <label class="custom-control-label" for="fgender"> Female</label>
      </div></div>
    </div>
    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
      <input type="text" name="address" class="form-control" placeholder="Address.." required="">
      </div>
    </div>
    <div class="form-group row">
          <label for="pincode" class="col-sm-2 col-form-label">Pincode</label>
          <div class="col-sm-4">
          <input type="text" name="pincode" required="" placeholder="Pincode.." class="form-control" required="">
          </div>
          <label for="country" class="col-sm-2 col-form-label">Country</label>
          <div class="col-sm-4">
          <select name="country" class="form-control" required="">
            <option value="uk">United Kingdom</option>
            <option value="India">India</option>
            <option value="Chaina">Chaina</option>
            <option value="US">United States</option>
          </select>
          </div>
    </div>
    <div class="form-group row">
      <label for="landmark" class="col-sm-2 col-form-label">Landmark</label>
      <div class="col-sm-10">
      <input type="text" name="landmark" class="form-control" placeholder="Landmark.." required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label">Phone</label>
      <div class="col-sm-10">
      <input type="text" name="phone" class="form-control" placeholder="+9189..." required="">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 17%;">Submit</button>
  </form>
</div>
</div>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $gender = mysqli_real_escape_string($con,$_POST['gender']);
  $address = mysqli_real_escape_string($con,$_POST['address']);
  $pincode = mysqli_real_escape_string($con,$_POST['pincode']);
  $country = mysqli_real_escape_string($con,$_POST['country']);
  $landmark = mysqli_real_escape_string($con,$_POST['landmark']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $name = $firstname.' '.$lastname;
  $sql = mysqli_query($con,"SELECT phone from users where phone='$phone'");
  $row = mysqli_num_rows($sql);
  if($row>0){
    echo "<script type='text/javascript'>alert('Already Registered....')</script>";
  }else{
    $query = mysqli_query($con,"INSERT INTO users(name,email,password,gender,address,pincode,country,landmark,phone)
      VALUES('$name','$email','$password','$gender','$address','$pincode','$country','$landmark','$phone')");
    if($query){
      $_SESSION['phone'] = $phone;
      header("location:home.php");
    }else{
      die("Error".mysqli_error($con));
    }
  }

}


?>