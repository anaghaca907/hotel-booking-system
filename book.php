<?php
include('db.php');

if (!isset($_GET['id'])) {
  die("Room not found");
}

$room_id = $_GET['id'];
$room = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM rooms WHERE id=$room_id"));

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];

  $sql = "INSERT INTO bookings (name, email, phone, room_id, checkin, checkout)
          VALUES ('$name', '$email', '$phone', '$room_id', '$checkin', '$checkout')";

  if (mysqli_query($conn, $sql)) {
    header("Location: confirm.php?name=$name");
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Room</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Book: <?php echo $room['room_name']; ?></h2>
    <form method="POST">
      <label>Name:</label>
      <input type="text" name="name" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Phone:</label>
      <input type="text" name="phone" required>

      <label>Check-in Date:</label>
      <input type="date" name="checkin" required>

      <label>Check-out Date:</label>
      <input type="date" name="checkout" required>

      <input type="submit" name="submit" value="Confirm Booking" class="btn">
    </form>
  </div>
</body>
</html>