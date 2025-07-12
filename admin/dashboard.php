<?php include 'auth.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">

   
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="bookings.php">Manage Booking</a>
        <a href="managepackage.php">Manage Package</a>
        <a href="guests.php">Manage Users</a>
        <a href="enquiries.php">Manage Enquiries</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="topbar">
        <h1>WANDERHUB ADMIN DASHBOARD</h1>
        <div>Welcome, Admin</div>
    </div>

    <div class="card-container">
        <div class="card" style="background-color:#e74c3c;color:white;">
            <h3>Users</h3>
            <div class="count">
                <?php
                $res = $conn->query("SELECT COUNT(*) as count FROM guestlogin");
                echo $res->fetch_assoc()['count'];
                ?>
            </div>
        </div>
        <div class="card" style="background-color:#27ae60;color:white;">
            <h3>Enquiries</h3>
            <div class="count">
                <?php
                $res = $conn->query("SELECT COUNT(*) as count FROM enquiries");
                echo $res->fetch_assoc()['count'];
                ?>
            </div>
        </div>
        <div class="card" style="background-color:#8e44ad;color:white;">
            <h3>Bookings</h3>
            <div class="count">
                <?php
                $res = $conn->query("SELECT COUNT(*) as count FROM bookings");
                echo $res->fetch_assoc()['count'];
                ?>
            </div>
        </div>
         <div class="card" style="background-color:#00FFFF	;color:white;">
            <h3>Packages</h3>
            <div class="count">
                <?php
                $res = $conn->query("SELECT COUNT(*) as count FROM packages");
                echo $res->fetch_assoc()['count'];
                ?>
            </div>
        </div>
        
    </div>
    
</body>
</html>
