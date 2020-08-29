<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html lang="en">
  <head>
    <title>Menu</title>
    <?php 
    include 'head.php';
    ?>
   </head>
  <body>

<?php
include ('header.php');
 ?>

<div class="container" style="margin-top:50px">
  <h1>MENU</h1>
  <hr>
  <div class="row">
  <div class="col-xs-12 col-md-6" style="padding-top:6px;">
<center> <h2>VEG</h2></center>
<hr>
<?php
$projects = array();
// fetch data from the database
$records = mysqli_query($con,'select * from items ') or die("Query fail: " . mysqli_error());

if ( mysqli_num_rows($records) >=1   )
{
  while($row = mysqli_fetch_array($records)){
    if($row['type']== 'veg'){

echo'      <div class="col-xs-12 box" ">

    <h1>'.$row['name'].'</h1>
    <p>Price Rs.' .$row['price'].'</p>
    </div>
    ';
}

}
} 
?>
</div>

<div class="col-xs-12 col-md-6" style="padding-top:6px;">
<center> <h2>NON VEG</h2></center>
<hr>
<?php
$projects = array();
// fetch data from the database
$records = mysqli_query($con,'select * from items ') or die("Query fail: " . mysqli_error());

if ( mysqli_num_rows($records) >=1   )
{
  while($row = mysqli_fetch_array($records)){
    if($row['type']== 'non veg'){

echo'      <div class="col-xs-12 box">

    <h1>'.$row['name'].'</h1>
    <p>Price Rs.' .$row['price'].'</p>
    </div>
    ';
}

}
} 
?>

</div>
 </div>

</div>

</body>
</html>

