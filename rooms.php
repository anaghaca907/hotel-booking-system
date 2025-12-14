<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Available Rooms</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2 class="center">Available Rooms</h2>
  <div class="room-container">
    <?php
      $result = mysqli_query($conn, "SELECT * FROM rooms");
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='room-card'>
          <img src='{$row['image']}' alt='Room Image'>
          <h3>{$row['room_name']}</h3>
          <p>Type: {$row['room_type']}</p>
          <p>Price: ₹{$row['price']}/night</p>
          <a href='book.php?id={$row['id']}' class='btn'>Book Now</a>
        </div>";
      }
    ?>
  </div>
</body>
</html>