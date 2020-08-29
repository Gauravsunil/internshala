<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html lang="en">
  <head>
    <title>Success</title>
    <?php 
    include 'head.php';
    ?>
    </head>
  <body>
<?php
include 'header.php';
 ?>
<br><br><br><br>
<div class="container">
  <?php
  if(!isset($_SESSION['email'])){
    header('location.index.php');
  } else {

  $user_id = $_SESSION['user_id'];

  //We will change the status of the items purchased by the user to 'Confirmed'
  $query = "UPDATE users_items SET status='confirmed' WHERE user_id='$user_id' AND status='added to cart'";
  mysqli_query($con, $query) or die($mysqli_error($con));
}
  ?>
  <div class="col-xs-8 col-xs-offset-2">
    <div class="jumbotron">
      <center><h2>Your Order Has Been Placed</h2>
      <h3>Thakyou.</h3>
      <h4><a href="product.php">Click here</a> to add more items. </h4></center>
    </div>

  </div>

</div>
</body>
</html>
