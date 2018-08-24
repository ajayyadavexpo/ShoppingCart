<?php
include_once("connect.php");
$keyword = 0;
$keyword = $_POST['keyword'];
if(strlen($keyword)>0){
	$print = mysqli_query($con,"SELECT * FROM items where header like '%{$keyword}%' or type like '%{$keyword}%'");
}else{
	$print = mysqli_query($con,"SELECT * FROM items");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
while($row = mysqli_fetch_array($print)){

echo '
<div class="col-sm-3" style="margin-bottom:5px;">
<div class="card">
<img src="'.$row["pic"].'" width="60%" height="150px" style="margin:auto;">
<div class="card-body text-center">
<p><b>'.$row['header'].'</p></b>
<p>'.$row['disc'].'</p>
<span style="margin-right:5px;">Rs.'.$row['price'].'</span>
<a href=add.php?id='.$row["id"].' class="btn btn-info">Add to cart</a>

</div>
</div>
</div>
';
}
?>
</body>
</html>