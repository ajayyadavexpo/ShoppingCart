<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="width:40%; margin:auto;background-color: orange;padding: 20px;color: white;">
	<form method="POST" enctype="multipart/form-data">
		File : <input type="file" name="pic" id="pic" class="form-control"><br>
		Name : <input type="text" name="header" id="header" class="form-control" required=""><br>
		Price : <input type="text" name="price" class="form-control" required=""><br>
		Type : <select name="type" class="form-control" required="">
			<option></option>
			<option value="mobile">Mobile</option>
			<option value="laptop">Laptop</option>
			<option value="T-shirts">T-shirts</option>
			<option value="jins">Jins</option>
			<option value="books">Books</option>
		</select><br>
		Discription : <textarea name="disc" id="disc" rows="5" class="form-control" required=""></textarea>
		<button type="submit" class="btn btn-primary" style="margin-top: 20px;margin-left: 36%;">Save</button>
	</form>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$header = mysqli_real_escape_string($con,$_POST['header']);
	$price = mysqli_real_escape_string($con,$_POST['price']);
	$type = mysqli_real_escape_string($con,$_POST['type']);
	$disc = mysqli_real_escape_string($con,$_POST['disc']);
	$upload_image = $_FILES['pic']['name'];
	$folder = "uploads/";
	$pic = $folder.$upload_image;
	if(move_uploaded_file($_FILES['pic']['tmp_name'], "$folder".$_FILES['pic']['name'])){
		$sql = mysqli_query($con,"INSERT INTO items(header,price,type,disc,pic) VALUES('$header','$price','$type','$disc','$pic')");
		if($sql){
			echo "Successfully added.....";
		}else{
			echo "Error0....";
		}
	}else{
		echo "Error1";
	}
}

?>