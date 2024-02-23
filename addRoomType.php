<?php include("include/header.php") ?>
<div class="container">

    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

        ?>
        <br>
        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Add Room category</h2>
        </div>

        <br>

        <div class="container">
            <form method="POST" action="RoomTypeUpdateController.php">
                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="roomCategory">Room Category:</label>
                        <input type="text" class="form-control" required pattern="[A-Za-z\s\W]]+" name="roomTypeName"
                            title="Room category name should contain only alphabets" required>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" required pattern="[0-9]*" min="100"
                            title="Price should contain only digits" required>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="amenities">Amenities:</label>
                        <input type="text" class="form-control" name="amenities" required>
                    </div>
                </div>

                <div class="container container d-flex justify-content-center align-items-center container">
                    <button type="submit" class="btn btn-primary savebtn" name="addRoomCategory">Save</button>
                </div>

            </form>
        </div>
        <?php
    } else {
        ?>
        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Please login</h2>
        </div>
        <?php
    }
    ?>

</div>
<?php include("include/footer.php") ?>