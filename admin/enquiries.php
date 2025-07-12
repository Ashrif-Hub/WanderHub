<?php include 'auth.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Enquiries</title>
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

<div class="topbar"><h2>Manage Enquiries</h2></div>

<div style="margin-left:240px;padding:20px;">
<?php
$result = $conn->query("SELECT * FROM enquiries");
while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>
        <h3>{$row['name']}</h3>
        <p><strong>Email:</strong> {$row['email']} | <strong>Contact:</strong> {$row['contact']}</p>
        <p>{$row['message']}</p>
        <p><em>Submitted on: {$row['submitted_at']}</em></p>
    </div><br>";
}
?>
</div>
</body>
</html>
