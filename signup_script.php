<?php
include 'common.php';
$n=$_POST['user'];
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['city'];
$cont=$_POST['contact'];
$type=$_POST['type'];
$e=$_POST['role'];

$query="select email from users where email='$a'";
$r=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($r)>0){

 header('location:signup.php?error=user already exists');

}else {
  $m="insert into users(name,email,password,contact,city,role,type) values('$n','$a','$b','$cont','$c','$e','$type')";
  $result=mysqli_query($con,$m)or die(mysqli_error($con));
  $p=mysqli_insert_id($con);
  $_SESSION['user_id']=$p;
  header('location:signup.php?error=Account created successfully');
}?>
