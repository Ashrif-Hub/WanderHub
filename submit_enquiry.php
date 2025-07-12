
<?php
$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "travel";    

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['name'] ?? '';
$contact = $_POST['contact'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';


$sql = "INSERT INTO enquiries (name, contact, email, message)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $contact, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Enquiry submitted successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
