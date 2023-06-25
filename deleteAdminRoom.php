<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    ?>

    <div class="container">
        <br>
        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Delete Room</h2>
        </div>
        <br>
        <form method="POST" action="RoomDetailUpdateController.php">
            <div class="row justify-content-center">
                <div class="form-group col-md-4 col-md-offset-1 align-center">
                    <label for="checkin">Room No:</label>
                    <input type="text" class="form-control" name="roomNo" pattern="[0-9]*" title="Room No should contain only numbers" required>
                </div>
            </div>
            <div class="container container d-flex justify-content-center align-items-center container">
                <button type="submit" class="btn btn-primary savebtn" name="deleteRoom">Delete</button>
            </div>
        </form>

    </div>
    <?php
}else{
    ?>
    <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Please login</h2>
        </div>
        <?php
}
?>

<?php include("include/footer.php") ?>