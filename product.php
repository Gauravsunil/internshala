<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html lang="en">
  <head>
    <title>Products</title>
    <?php 
    include 'head.php';
    ?>
  </head>
  <body>

<?php
include ('header.php');
include 'check-if-added.php';
 ?>

<div class="container">
  <div class="jumbotron">
    <h1>Xingo Shop Menu</h1>
  </div>


<div class="row">
<div class="col-xs-12 col-md-6" style="padding-top:6px;">
<center><h2>VEG</h2></center>
<?php
$projects = array();
// fetch data from the database
$records = mysqli_query($con,'select * from items ') or die("Query fail: " . mysqli_error());

if ( mysqli_num_rows($records) >=1   )
{
  while($row = mysqli_fetch_array($records)){
    if($row['type']== 'veg'){
      ?>
      <div class="col-xs-12 box">
      <?php 
    echo '
    <h1>'.$row['name'].'</h1>
    <p>Price Rs.' .$row['price'].'</p>
    ';
    ?>
    <?php
if(!isset($_SESSION['email'])) {
 ?>
        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
      } else {
          //We have created a function to check whether this particular product is added to cart or not.
        if(check_if_added_to_cart($row['pid'])) { //This is same as if(check_if_added_to_cart != 0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
      } else {
        ?>
        <a href=<?php echo 'cart-add.php?id='.$row['pid']?> name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
      <?php
    }
    }
      ?>
      </div>
<?php
    }
}
} 
?>

</div>
<div class="col-xs-12 col-md-6" style="padding-top:6px;">
<center> <h2>NON VEG</h2></center>
<?php
$projects = array();
// fetch data from the database
$records = mysqli_query($con,'select * from items ') or die("Query fail: " . mysqli_error());

if ( mysqli_num_rows($records) >=1   )
{
  while($row = mysqli_fetch_array($records)){
    if($row['type']== 'non veg'){
      ?>
      <div class="col-xs-12 box">
      <?php 
    echo '
    <h1>'.$row['name'].'</h1>
    <p>Price Rs.' .$row['price'].'</p>
    ';
    ?>
    <?php
if(!isset($_SESSION['email'])) {
 ?>
        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
      } else {
          //We have created a function to check whether this particular product is added to cart or not.
        if(check_if_added_to_cart($row['pid'])) { //This is same as if(check_if_added_to_cart != 0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
      } else {
        ?>
        <a href=<?php echo 'cart-add.php?id='.$row['pid']?> name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
      <?php
    }
    }
      ?>
      </div>
<?php
    }
}
} 
?>

</div>

 </div>
</div>

</body>
<script>
$("img").hover(function(){
  $(this).css("transform","scale(1.1)")
},function(){
  $(this).css("transform","scale(1)")
})
</script>
</html>

