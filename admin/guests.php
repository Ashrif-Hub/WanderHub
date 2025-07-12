<?php include 'auth.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Guests</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="bookings.php">Manage Booking</a>
    <a href="guests.php">Manage Users</a>
    <a href="enquiries.php">Manage Enquiries</a>
    <a href="logout.php">Logout</a>
</div>

<div class="topbar"><h2>Manage Users</h2></div>

<div style="margin-left:240px;padding:20px;">
<?php
$result = $conn->query("SELECT * FROM guestlogin");
while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>
        <h3>{$row['firstName']} {$row['lastName']}</h3>
        <p>{$row['email']}</p>
        <a href='remove_guest.php?id={$row['id']}' class='action-btn red'>Remove</a>
    </div><br>";
}
?>
</div>
</body>
</html>
