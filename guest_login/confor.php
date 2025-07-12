<!-- <?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        // $query=mysqli_query($conn, "SELECT guestlogin.* FROM `users` WHERE users.email='$email'");
        $query = mysqli_query($conn, "SELECT * FROM `guestlogin` WHERE email = '$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
      <a href="">Go To Home</a>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .confirmation-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
            text-align: center;
        }
        h2 {
            color: green;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: orange;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h2>Login Sucessfully!!!</h2>
        <p>Go to HomePage</p>
        <a href="../index.php">Go Back to Home</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>