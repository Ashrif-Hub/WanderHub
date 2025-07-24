<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "travel");


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch packages
$sql = "SELECT * FROM packages";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Packages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
         h1 {
           font-size: 36px;
           font-weight: bold;
           text-align: center;
           margin-bottom: 30px;
        }
         h1 span {
           color: #ffa500;
        }
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 300px;
            overflow: hidden;
            transition: 0.3s;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            padding: 20px;
        }
        .card h3 {
            margin-top: 0;
        }
        .stars {
            color: orange;
            font-size: 1.1em;
        }
        .price {
            font-weight: bold;
            margin-top: 10px;
        }
        .btn {
            background: orange;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1><span>O</span>ur <span>T</span>ravel <span>P</span>ackages</h1>
<div class="container">
<?php while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <?php
            $imagePath = "admin/" . $row['image'];
            if (file_exists($imagePath)) {
                echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row['name']) . '">';
            } else {
                echo '<p>Image not found</p>';
            }
        ?>
        <div class="card-body">
            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
            <div class="stars">
                <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo $i <= $row['rating'] ? "★" : "☆";
                    }
                ?>
            </div>
            <div class="price">Price: <span>$<?php echo $row['price']; ?></span></div>
            <a href="booking.php?destination=<?php echo urlencode($row['name']); ?>" class="btn">Book Now</a>
        </div>
    </div>
    <?php endwhile; ?>
</div>

</body>
</html>

<?php
$mysqli->close();
?>
