<?php
include 'common.php';
$n=$_POST['dish'];
$a=$_POST['price'];
$type=$_POST['type'];
$query="select name from items where name='$n'";
$r=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($r)>0){

 header('location:employee.php?error=Dish already exists');

}else {
  $m="insert into items(name,price,type) values('$n','$a','$type')";
  $result=mysqli_query($con,$m)or die(mysqli_error($con));
  $p=mysqli_insert_id($con);
  $_SESSION['user_id']=$p;
  header('location:employee.php?error=Dish Added Successfully');
}?>
