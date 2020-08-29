<!DOCTYPE html>
<?php
include 'common.php';
?>
<html lang="en">
  <head>
    <title>Order History</title>
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
    <center><h3>Order History</h3></center>
  <table class="table table-striped">
    <?php
    date_default_timezone_set('Asia/Kolkata');
    $sum = 0;
    $user_id = $_SESSION['user_id'];
    $query = "SELECT items.price, items.pid, items.name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $date=date('Y-m-d H:i:s');
    if (mysqli_num_rows($result) >= 1) {
    ?>
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Order Date & Time</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            $sum+= $row["price"];
            $id= $row["pid"];
            echo "<tr>
                      <td>" . $row["name"] . "</td>
                      <td>Rs " . $row["price"] . "</td>
                      <td>" . $date . "</td>
                  </tr>";
        }
        echo "<tr>

                  <td>Total</td>
                  <td>Rs " . $sum . "</td>
                  </tr>";
        ?>
    </tbody>
    <?php
} else {
    echo "<center><h2>No order has been placed! Start Shopping!.</h2></center>";
}
?>
  </table>
</div>
</div>
</body>
</html>
