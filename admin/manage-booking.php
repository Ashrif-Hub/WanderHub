<?php
$sql = "SELECT * FROM bookings";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['destination']}</td>";
    echo "<td>{$row['status']}</td>";
    
    // Change button based on status
    if ($row['status'] === 'Confirmed') {
        echo "<td><span class='confirmed-btn'>Confirmed</span></td>";
    } else {
        echo "<td><a href='update_booking.php?action=confirm&id={$row['id']}' class='action-btn'>Confirm</a></td>";
    }

    echo "</tr>";
}
?>
