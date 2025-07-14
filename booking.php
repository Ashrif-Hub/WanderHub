<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $host = "localhost";
    $username = "root";
    $password = ""; 
    $database = "travel";


    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $destination = $_POST['destination'];
    $howMany = $_POST['howMany'];
    $email = $_POST['email'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $userDetails = $_POST['userDetails'];
    $createdAt = date("Y-m-d H:i:s");  


    $stmt = $conn->prepare("INSERT INTO bookings (destination, people_count,email, start_date, end_date, user_details, created_at) VALUES (?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sisssss", $destination, $howMany,$email, $startDate, $endDate, $userDetails, $createdAt);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!');</script>";
    } else {
        echo "<script>alert('Booking failed: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Your Tour</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages.php">Packages</a>
              </li>
              
           
             
            </ul>
            
           
        </div>
      </nav>
    <!-- Navbar End -->

  <style>
    .main-text h1 {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    .main-text h1 span {
      color: #007bff;
    }

    .submit {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .submit:hover {
      background-color: #0056b3;
    }

    .book {
      padding: 60px 0;
    }

    textarea.form-control {
      resize: none;
    }

    /* Navbar Start */


#navbar {
    background: #eeedee;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    height:70px;
    
   
}

#logo {
    font-size: 36px;
    font-weight: 550;
    color: black;
    text-shadow: 0px 1px 1px black;
    margin-bottom: 5px;
}

#logo span {
    color: #ffa500;
}

.navbar-toggler span {
    color: #ffa500;
}

.navbar-nav {
    margin-left: 20px;
    
}

.nav-item .nav-link {
    font-size: 16px;
    font-weight: 550;
    color: black;
    letter-spacing: 1px;
    border-radius: 3px;
    transition: 0.5s ease;
}

.nav-item .nav-link:hover {
    background: #ffa500;
    color: white;
}

#navbar form button {
    background: orange;
    color: white;
    border: none;
}
.book {
  padding: 60px 0;
  padding-top: 100px; 
}




/* Navbar End */
  </style>
</head>
<body>

  <section class="book" id="book">
    <div class="container">

      <div class="main-text">
        <h1><span>B</span>ook</h1>
      </div>
      
      <div class="row align-items-center">

        <div class="col-md-6 py-3">
          <div class="card border-0 shadow-sm">
            <img src="./images/book-img.png" class="img-fluid" alt="Booking Image">
          </div>
        </div>

        <div class="col-md-6 py-3">
          <form action="" method="POST">

            <input type="text" class="form-control mb-3" name="destination" placeholder="Where To" required>
            <input type="text" class="form-control mb-3" name="howMany" placeholder="How Many People" required>
            <input type="email" class="form-control mb-3" name="email" placeholder="Enter Your Email" required>
            <input type="date" class="form-control mb-3" name="startDate" required>
            <input type="date" class="form-control mb-3" name="endDate" required>
            <textarea class="form-control mb-3" rows="5" name="userDetails" placeholder="Enter Your Name & Details" required></textarea>
            <input type="submit" value="Book Now" class="submit">

          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
