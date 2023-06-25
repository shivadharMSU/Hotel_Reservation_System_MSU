<?php include("include/header.php") ?>
<?php
require_once 'admin/connect.php';

global $loggedIn;

if (isset($_SESSION['username'])) {
    header('Location: adminAddRoom.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT `user_name`,`password` FROM `users` WHERE `user_name` = :username AND `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        $loggedIn = true;
        header('Location: adminAddRoom.php');
        exit();
    } else {
        header('Location: error.php');
    }
}
?>
<?php include("include/footer.php") ?>