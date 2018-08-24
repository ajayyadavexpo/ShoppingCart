<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShoppingCart</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  	#myNavbar li a{color: white;}
  	#myNavbar li a:hover{background-color: white; color: #337ab7;}
  	#first{margin-top: 10px;}
  	.col-sm-3{padding: 10px 0px 0px 0px;}
  	.col-sm-3:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
  	footer{padding: 2%;background-color: #232f3e;}
  	footer h4{color: white;}
  	footer a{color: white;}
  	footer a:hover{color:orange;}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php" class="navbar-brand">ShoppingCart</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
	</button>
	<form>
		<div class="input-group">
			<input type="text" name="search" id="search" placeholder="Search.." class="form-control" size="90">
			<div class="input-group-append">
				<button type="button" class="btn btn-default"><span class="fa fa-search"></span></button>
			</div>
		</div>
	</form>
	<div id="myNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
				<li class="nav-item"><a class="nav-link" href="register.php">Sign up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row" id="first">
		<div class="col-sm-1">
			
		</div>
		<div class="col-sm-10">
			<div class="row" id="output">
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").keyup(function(){
			var key = $(this).val();
			$.ajax({
				type:"POST",
				url:"insert.php",
				data:{keyword : key},
				success:function(html){
					$("#output").html(html).show();
				}
			});
		});
		var key  = $("#search").val();
		if(key == 0){
			$.ajax({
				type:"POST",
				url:"insert.php",
				data:{keyword : key},
				success:function(html){
					$("#output").html(html).show();
				}
			});
		}
	});
</script>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4>Get to Know us</h4>
				<a href="#">Careers</a><br>
				<a href="#">Blog</a><br>
				<a href="#">About  ShoppingCart</a><br>
				<a href="#">Investor Relations</a><br>
				<a href="#">Devices</a><br>
			</div>
			<div class="col-sm-4">
				<h4>Make money with us</h4>
				<a href="#">Sell on ShoppingCart</a><br>
				<a href="#">Sell on ShoppingCart business</a><br>
				<a href="#">Become and Affiliate</a><br>
				<a href="#">Advertise your products</a><br>
				<a href="#">Self Publish with us</a><br>
				<a href="#">Sell All</a><br>
			</div>
			<div class="col-sm-4">
				<h4>Shopping Products</h4>
				<a href="#">Reward Visa Signature Cards</a><br>
				<a href="#">Store Card</a><br>
				<a href="#">Corporate Credit Cards</a><br>
				<a href="#">Relode your Business</a><br>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
