<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>
<div class="container container d-flex justify-content-center align-items-center container">
    <h2>Edit Room</h2>
</div>
<div class="container d-flex justify-content-center align-items-center container">

    <br>
    <form method="POST">

        <div class="form-group">
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

        <button type="submit" class="btn btn-primary savebtn" name="fetchRoomCategory">Fetch Category Details</button>
    </form>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fetchRoomCategory'])) {
    $roomTypeId = $_POST["roomTypeId"];


    $query = "SELECT id, category_name, price, aminities FROM room_category_details WHERE id = :roomTypeId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':roomTypeId', $roomTypeId);
    $stmt->execute();

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <br><br>
        <div class="container">

            <form method="POST" action="RoomTypeUpdateController.php">

                <div class="row justify-content-center">
                    <div class="form-group">
                        <label for="roomTypeId">Room type id:</label>
                        <input type="hidden" class="form-control" name="roomTypeId" value="<?php echo $row['id'] ?>" required>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>" required>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label for="aminities">Aminities:</label>
                        <input type="text" class="form-control" name="amenities" value="<?php echo $row['aminities'] ?>"
                            required>
                    </div>
                </div>

                <div class="container container d-flex justify-content-center align-items-center container">
                    <button type="submit" class="btn btn-primary savebtn" name="updateRoomCategory">Save</button>
                </div>

            </form>
        </div>
        <?php
    } else {
        ?>

        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>No records found</h2>
        </div>
        <?php
    }
}
?>
<?php include("include/footer.php") ?>