<?php
include_once 'class.dbmodel.php';
$dbmodel = new Dbmodel();
if (isset($_POST['addRoom'])) {

    $roomNo = $_POST["roomNo"];
    $roomType = $_POST["roomType"];
    $noOfPersons = $_POST["noOfPersons"];
    $checkinDate = $_POST["checkinDate"];
    $checkOutDate = $_POST["checkOutDate"];
    $booking = $_POST["openbookings"];
    $roomFeatured = $_POST["openbookings"];

    $result = $dbmodel->insertRoom(
        $roomNo,
        $price,
        $roomType,
        $noOfPersons,
        $amenities,
        $checkinDate,
        $checkOutDate,
        $booking,
        $roomFeatured
    );

    if ($result) {
        header('Location: addRoomConfirmation.php');
    }

}


if (isset($_POST['deleteRoom'])) {

    $roomNo = $_POST["roomNo"];

    $deletesuccess = $dbmodel->delete($roomNo);
    if ($deletesuccess) {
        header('Location: deleteRoomConfirmation.php');

    }


}


if (isset($_POST['updateRoom'])) {

    $roomNo = $_POST["rooNo"];
    $roomType = $_POST["roomType"];
    $roomBooked = $_POST["roomBooked"];
    $roomFeatured = $_POST["roomFeatured"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $noOfPersons = $_POST["noOfPersons"];

    $result = $dbmodel->updateRoom($roomNo, $roomType, $roomBooked, $roomFeatured, $checkin, $checkout, $noOfPersons);

    if ($result) {
        header('Location: updateRoomConfirmation.php');

    } else {
        header('Location: error.php');
    }


}
?>