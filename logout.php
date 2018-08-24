<?php
session_start();
if($_SESSION['phone']){
	session_destroy();
	header("location:index.php");
}else{
	header("location:index.php");
}

?>