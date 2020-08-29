<!DOCTYPE html>
<?php
include 'common.php';

 ?>
<html lang="en">
  <head>
    <title>Settings</title>
    <?php 
    include 'head.php';
    ?>
    </head>
  <body>
<?php
include 'header.php';
 ?>
<br><br><br>
<div class="container">
  <div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-4">
    <div class="row">
      <h3>Change Password</h3>
      <form method="POST" action="setting_script.php" >
        
        <?php
                        if(isset($_GET["error"])){
                          echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
                        }
                        ?>

        
        <div class="form-group">
          <input type="password" class="form-control" name="old"  pattern=".{6,}" required="true" placeholder="Old Password">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="new"  pattern=".{6,}" required="true" placeholder="New Password">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confirm" pattern=".{6,}" required="true" placeholder="Confirm Password">

        </div>
                      <br>
        <button name="button" class="btn btn-primary">Change</button>
      </form>

    </div>

  </div>

</div>
</body>
</html>
