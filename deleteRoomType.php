<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>

<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    ?>
    <div class="container">

        <br>
        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Delete Room Category</h2>
        </div>
        <br>
        <form method="POST" action="RoomTypeUpdateController.php">
            <div class="row justify-content-center">
                <div class="form-group col-md-4 col-md-offset-1 align-center">
                    <label for="Room Type">Room Type:</label>
                    <select class="form-control" id="roomTypeId" name="roomTypeId">
                        <?php


                        $query = "SELECT id, category_name FROM room_category_details";
                        $stmt = $conn->query($query);

                        if ($stmt && $stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></option>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="container container d-flex justify-content-center align-items-center container">
                <button type="submit" class="btn btn-primary savebtn" name="deleteRoomCategory">Delete</button>
            </div>
        </form>


    </div>

    <?php
    $conn = null;
} else {
    ?>
    <div class="container container d-flex justify-content-center align-items-center container">
        <h2>Please login</h2>
    </div>
    <?php
}
?>
<?php include("include/footer.php") ?>