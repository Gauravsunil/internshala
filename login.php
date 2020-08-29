<!DOCTYPE html>
<?php
include 'common.php';
if (isset($_SESSION['email']))
 {
  header('location: product.php');
 }
 ?>
 ?>
<html lang="en">
  <head>

    <title>Login</title>
    <?php 
    include 'head.php';
    ?>
    </head>
  <body>
<?php
include 'header.php';
 ?><br><br><br><br>

<div class="container">
      <div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-4 block" id="banner-content1">
        <center>
          <img  src="./images/lockicon.svg" alt="" width="72" height="72">
          <h2>Log In</h2>
        </center>
        <?php
    if(isset($_GET["error"])){
       echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
}
?>         
        
        <form action="login_submit.php" method="post">
          
            <div class="form-group">
            <label htmlFor="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
          </div>
          <div class="form-group">
            <label htmlFor="Password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
      </div>
    </div> 


</body>
</html>




