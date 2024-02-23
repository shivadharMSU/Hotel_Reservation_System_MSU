<?php include("include/header.php") ?>
<?php
require_once 'admin/connect.php';


global $loggedIn;
// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: adminAddRoom.php');
    exit();
}

// Check if login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   

    $query = "SELECT `user_name`,`password` FROM `users` WHERE `user_name` = :username AND `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Fetch the record as an associative array
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        $loggedIn = true;
        header('Location: viewRooms.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }


}
?>

<br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-box">
                <div class="container container d-flex justify-content-center align-items-center container">
            <h3>Login</h3>
        </div>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="login.php">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-4 col-md-offset-1 align-center">

                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-4 col-md-offset-1 align-center">

                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>

                    <div class="container container d-flex justify-content-center align-items-center container">
                    <button type="submit" class="btn btn-primary savebtn">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>





<?php include("include/footer.php") ?>