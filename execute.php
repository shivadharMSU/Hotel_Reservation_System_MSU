<?php
require_once 'admin/connect.php';

function updateRoom($query)
{
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "UPDATE `rooms` set `room_type` = '$roomType', `room_featured` = '$roomFeatured', `room_booked` = '$roomBooked', `check_in_date` = '$checkin', `check_out_date` = '$checkout', `room_capacity` = '$roomNo' WHERE `room_number` = '$roomNo'";
    echo $query;
    // Execute the query
    $result = $conn->query($query) or die(mysqli_error());

    if ($result === true) {
        return true;
    } else {
        return false;
    }
}
?>