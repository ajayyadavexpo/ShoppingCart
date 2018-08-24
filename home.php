<?php
session_start();
if($_SESSION['phone']){
	$phone = $_SESSION['phone'];
}else{
	header("Location:register.php");
}
include_once("connect.php");
$sql = mysqli_query($con,"SELECT * FROM users where phone = '$phone'");
$row = mysqli_fetch_array($sql)
?>
<!DOCTYPE html>
<html>
<head>
	<title>ShoppingCart</title>
	<style type="text/css">
		body{background-color: #dbf3fa;}
		.card{margin-top: 20px;}
		.card{background-color: #A9E1F9;padding: 10px;}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php" class="navbar-brand">ShoppingCart</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
	</button>
	<div id="myNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="#"><?php echo "Welcome ".$row['name'];   ?></a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container card">
	<div class="row">
		<div class="col-sm-3">
		  <h4>Hello</h4><br>
		  	<?php echo $row['name'];  ?><br>
		  	<a href="logout.php" class="badge badge-info">Logout</a>
	    </div>
	    <div class="col-sm-9">
		<?php
				echo '
					<h4>'.$row['email'].'</h4>
					<address>
						'.$row['address'].'<br>'.$row['pincode'].'<br>'.$row['landmark'].'<br>'.$row['phone'].'<br>'.$row['country'].'
					</address>
				';
		?>
	    </div>
    </div>
</div>
<div class="container">
	<h2>Your Orders : </h2>
	<div class="text-center">
		<table class="table table-bordered">
			<thead>
				<th>S.no</th>
				<th>Image</th>
				<th>Delivery Address</th>
				<th>Booking Date</th>
				<th>Amount</th>
				<th>Order Cancel</th>
			</thead>
			<tbody>
				<?php
				$n = 1;
				$order = mysqli_query($con,"SELECT * FROM orders_table where order_phone = '$phone'");
				while($print = mysqli_fetch_array($order)){
					echo '
						<tr>
							<td>'.$n.'</td>
							<td><img src="'.$print['order_pic'].'" width="100"><br></td>
							<td>'.$print['order_address'].'</td>
							<td>'.$print['order_date'].'</td>
							<td>Rs. '.$print['order_total'].'</td>
							<td> <a class="btn btn-info" href="cancel.php?id='.$print['order_id'].'">Cancel</a></td>
						</tr>
					';	
					$n = $n+1;
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>