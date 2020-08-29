
<?php
include ("common.php");
if (isset($_SESSION['email']))
 {
  header('location: product.php');
 }
 ?>
<!DOCTYPE html>
<html>
 <head> <!---- The page has a title Lifestyle Store-->
    <title>Xingo Shop</title>
    <!---- External css file index.css placed in the folder css is linked-->
    <?php 
    include 'head.php';
    ?>
    </head>
    <body>
      <?php
      include 'header.php';
?>
   <div id="banner-image">
     <div class="container">
       <div id="banner-content">
         <br>
         <h1>Xingo Shop</h1><br>
         <p>Place of your Choice </p><br>
         <a href="product.php" class="btn btn-danger btn-lg">Order Now</a>
      </div>
    </div>
     </div>

</body>
 </html>
