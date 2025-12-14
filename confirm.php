<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmed</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="confirm-box">
    <h2>Booking Confirmed!</h2>
    <p>Thank you <strong><?php echo $_GET['name']; ?></strong> for booking with us.</p>
    <a href="rooms.php" class="btn">Back to Rooms</a>
  </div>
</body>
</html>