<?php
include_once 'class.dbmodel.php';
$dbmodel = new Dbmodel();
if (isset($_POST['cancelBooking'])) {

    $bookingRefNo = $_POST["BookingRef"];

    $resultDeleteCustomerBooking = $dbmodel->deleteCustomerBooking(
        $bookingRefNo
    );

    $resultUpdateRoomBookingDetails = $dbmodel->updateRoomBookingDetails(
        $bookingRefNo
    );

    if ($resultDeleteCustomerBooking && $resultUpdateRoomBookingDetails) {
        header('Location: cancelBookingConfirmation.php');
    } else {
        header('Location: error.php');

    }

}


?>