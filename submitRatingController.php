<?php include("include/header.php") ?>
<?php
require_once 'admin/connect.php';
include_once 'class.dbmodel.php';
$dbmodel = new Dbmodel();

if (isset($_POST['rating'])) {


    $email = $_POST["email"];
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];

    $result = $dbmodel->saveRatings($email, $name, $rating, $feedback);

    if ($result) {
        header('Location: submitRatingConfirmation.php');
    } else {
        header('Location: error.php');
    }

}
?>
<?php include("include/footer.php") ?>