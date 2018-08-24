<?php
session_start();
include_once("connect.php");
if($_SERVER['REQUEST_METHOD']=='GET'){
	$id = $_GET['id'];
	$sql = mysqli_query($con,"DELETE FROM orders_table where order_id = '$id'");
	if($sql){
		header("location:home.php");
	}
}else{
	echo "Heki";
}


?>