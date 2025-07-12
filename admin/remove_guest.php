<?php include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM guestlogin WHERE id = $id");
}
header("Location: guests.php");
?>
