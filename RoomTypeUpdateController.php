<?php
include_once 'class.dbmodel.php';
$dbmodel = new Dbmodel();
if (isset($_POST['addRoomCategory'])) {

    $roomTypeName = $_POST["roomTypeName"];
    $price = $_POST["price"];
    $amenities = $_POST["amenities"];

    $result = $dbmodel->insertRoomType($roomTypeName, $price, $amenities);

    if ($result) {
        header('Location: addRoomTypeConfirmation.php');
    }

}


if (isset($_POST['deleteRoomCategory'])) {
    $roomTypeId = $_POST["roomTypeId"];
    $result = $dbmodel->deleteRoomType($roomTypeId);

    if ($result) {
        header('Location: deleteRoomTypeConfirmation.php');
    }


}


if (isset($_POST['updateRoomCategory'])) {


    $price = $_POST["price"];
    $amenities = $_POST["amenities"];
    $roomTypeId = $_POST["roomTypeId"];

    $result = $dbmodel->updateRoomType($price, $amenities, $roomTypeId);

    if ($result) {
        header('Location: updateRoomTypeConfirmation.php');

    } else {
        header('Location: error.php');
    }


}
?>