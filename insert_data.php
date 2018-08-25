<?php
include_once("connect.php");
session_start();
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
      header("Location: home.php");
      }else{
      die("Error".mysqli_error($con));
    }
  }

}
?>