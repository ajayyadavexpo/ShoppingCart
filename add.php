<?php
session_start();
if($_SESSION['phone']){

}
else{
	header("Location: login.php");
}
include_once("connect.php");

$item_id = $_GET['id'];
$useres_phone = $_SESSION['phone'];
$sql = mysqli_query($con,"SELECT header,price,disc,pic FROM items WHERE id='$item_id'");
$query = mysqli_query($con,"SELECT name,address,pincode,country,landmark FROM users WHERE phone='$useres_phone'");
$items = mysqli_fetch_array($sql);
$users = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<style type="text/css">
		body{background-color: #dbf3fa;}
		#now{margin-top: 20px;}
		#now form{background-color: #A9E1F9;padding: 20px;}
		#now form select{padding: 2px 8px 2px 2px;border:1px solid grey;border-radius: 4px;margin-right: 5px;}
		.col-sm-4{padding: 2%;border:1px solid #A9E1F9;}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php" class="navbar-brand">ShoppingCart</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
	</button>
	<div id="myNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="home.php"><?php echo "Welcome ".$users['name'];   ?></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container" id="now">
	<div class="row">
		<div class="col-sm-4">
			<?php echo '<img src="'.$items['pic'].'" width="200"></img><br>'.$items['header']; ?>
		</div>
		<div class="col-sm-4">
			<?php echo $items['disc']?>;
		</div>
		<div class="col-sm-4">
			<?php echo $users['address'].'<br>'.$users['landmark'].'<br>'.$users['pincode'].'<br>'.$users['country']; ?>
		</div>
	</div>
	<br>
	<div class="text-center" >
		<form method="POST">
			<?php echo $items['price']; ?> * <select name="quentity">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					</select>
					<button type="submit" class="btn btn-primary">Buy now</button>
					</form>

	</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$quentity = intval($_POST['quentity']);
	$input_str = $items['price'];
	$pattern = "(\d+)";
	$price = 0;
	if (preg_match_all($pattern, $input_str, $out)) {
		for($i=0;$i<count($out[0]);$i++){
			$price = $price.''.$out[0][$i];
		}	
	}
	$total = intval($price) * $quentity;
	$address = $users['address'].' '.$users['landmark'].' '.$users['pincode'].$users['country'];
	$disc = $items['header'].'<br> '.$items['disc'];
	$pic = $items['pic']; 
	$date = date("d/m/Y");
	$insert = mysqli_query($con,"INSERT INTO orders_table(order_address,order_disc,order_pic,order_total,order_date,order_phone)
		values('$address','$disc','$pic','$total','$date','$useres_phone')");
	if($insert){
		header("location:home.php");
	}else{
		die("Error.. Try again..".mysqli_error($con));
	}
}

?>