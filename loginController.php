<?php include("include/header.php") ?>
<?php
require_once 'admin/connect.php';

global $loggedIn;

// Check if user is already logged in
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

    // Check if the query was successful
    if ($stmt->rowCount() > 0) {
        // Fetch the record as an associative array
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        $loggedIn = true;
        header('Location: adminAddRoom.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<?php include("include/footer.php") ?>