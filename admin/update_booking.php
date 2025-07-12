<?php include 'db.php';

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action === 'cancel') {
        $conn->query("DELETE FROM bookings WHERE id = $id");
    } elseif ($action === 'confirm') {
        // Optional: update a 'status' column if exists
        $conn->query("UPDATE bookings SET status='Confirmed' WHERE id=$id");
    }
}
header("Location: bookings.php");
?>
