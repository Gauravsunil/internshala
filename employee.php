<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html lang="en">
  <head>
    <title>Restaurent</title>
    <?php 
    include 'head.php';
    ?>
    </head>
  <body>

<?php
include ('header.php');

 ?>

<br><br><br>
  <br><br>
 <div class="container">
  <div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-4">
    <div class="row">
      <h3>Add Items to the MENU</h3>
      <form method="POST" action="employee_script.php" >
        <div class="form-group">
          <input type="text" class="form-control" name="dish" required="true" placeholder="Dish Name">

        </div>
        <div class="form-group"><br>
          <input type="text" class="form-control" required="true" name="price" placeholder="Price">
        </div>
        <div class="form-group">
        <input type="radio"  id="veg" name="type" value="veg">Veg &nbsp&nbsp
          <input type="radio" id="non veg" name="type" value="non veg">Non Veg
  
        </div>
          
    <div>
    </div>
    <input type="submit" name="submit1" class="btn btn-primary" value="ADD">
      </form>

    </div>

  </div>

</div>


</div>
<br><br><br><br>
</body>
</html>
