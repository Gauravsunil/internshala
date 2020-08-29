<!DOCTYPE html>
<?php
include 'common.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
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
      <div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-4 block" id="banner-content1">
        <center>
          <img  src="./images/lockicon.svg" alt="" width="72" height="72">
          <h2>Sign Up</h2>
        </center>
        <?php
    if(isset($_GET["error"])){
       echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
}
?>         
        
        <form action="signup_script.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="user" required="true" placeholder="Name">

        </div>
        <div class="form-group">
          <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"placeholder="Email">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" pattern=".{6,}" name="password" required = "true" placeholder="Password">

        </div>
        <div class="form-group">
        <input type="radio"  id="student" name="role" value="customer">Customer &nbsp&nbsp
          <input type="radio" id="employee" name="role" value="restaurent">Restaurent
          </div>
        <div class="form-group">
        <select name="type" id="type" class="form-control">
        <option value="veg">Veg</option>
        <option value="non veg">Non Veg</option>
        </select>
        </div>
        <div class="form-group"><br>
          <input type="text" class="form-control" pattern=".{10,10}" name="contact" placeholder="Contact">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="city"  placeholder="City" required>

        </div>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                </form>
      </div>
    </div> 

</body>
</html>



