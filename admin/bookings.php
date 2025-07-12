<?php include 'auth.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .action-btn {
    background-color: #007bff;
    color: white;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 4px;
    margin-right: 10px;
}

.confirmed-btn {
    background-color: #28a745;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
}

.action-btn.red {
    background-color: #dc3545;
}

    </style>
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

<div class="topbar"><h2>Manage Bookings</h2></div>

<div style="margin-left:240px;padding:20px;">
<?php
$result = $conn->query("SELECT * FROM bookings");
while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>
        <h3>{$row['destination']}</h3>
        <p><strong>People:</strong> {$row['people_count']}</p>
        <p><strong>Email:</strong> {$row['email']}</p>
        <p><strong>Date:</strong> {$row['start_date']} to {$row['end_date']}</p>
        <p><strong>User:</strong> {$row['user_details']}</p>";

    if ($row['status'] === 'Confirmed') {
        echo "<span class='confirmed-btn'>Confirmed</span>";
    } else {
        echo "<a href='update_booking.php?action=confirm&id={$row['id']}' class='action-btn'>Confirm</a>";
    }

    echo " <a href='update_booking.php?action=cancel&id={$row['id']}' class='action-btn red'>Cancel</a>
    </div><br>";
}
?>

</div>
</body>
</html>
