<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>
<br>
<?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        $query = "SELECT id,category_name FROM `room_category_details`";
       ?>
<div class="container container d-flex justify-content-center align-items-center container">
    <h2>Update Room</h2>
</div>
<div class="container">

    <br>
    <form method="POST">
        <div class="row justify-content-center">
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="roomNo">Room No:</label>
                <input type="text" class="form-control" name="roomNo" required>
            </div>
        </div>

        <div class="container container d-flex justify-content-center align-items-center container">

            <button type="submit" class="btn btn-primary savebtn" name="fetchRoom">Get Rom Details</button>

        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fetchRoom'])) {

    $roomNo = $_POST["roomNo"];

    

    $query = "SELECT room_number, room_type, room_featured, room_booked, check_in_date, check_out_date, room_capacity FROM rooms WHERE room_number = :roomNo";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':roomNo', $roomNo, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Close the database connection

        ?>

        <div class="container">

            <br>
            <form method="POST" action="RoomDetailUpdateController.php">


                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="checkin">Room No:</label>
                        <input type="text" class="form-control" name="rooNo" value="<?php echo $row['room_number'] ?>" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="Room Type">Room Type:</label>
                        <select class="form-control" id="roomTypeId" name="roomType">
                            <?php
                          $query = "SELECT id, category_name FROM room_category_details";
                          $stmt = $conn->query($query);
                          
                          if ($stmt->rowCount() > 0) {
                              while ($row2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <option value="<?php echo $row2['id'] ?>" <?php if ($row && $row['room_type'] == $row2['id'])
                                           echo 'selected'; ?>><?php echo $row2['category_name'] ?></option>

                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="gender">Room Booked:</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="roomBooked" id="1" value="1" <?php if ($row && $row['room_booked'] == '1')
                                echo 'checked'; ?> required>
                            <label class="form-check-label" for="yes">yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="roomBooked" id="0" value="0" <?php if ($row && $row['room_booked'] == '0')
                                echo 'checked'; ?>>
                            <label class="form-check-label" for="no">no</label>
                        </div>
                    </div>
                </div>





                <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
                        <label for="gender">Room Featured:</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="roomFeatured" id="1" value="1" <?php if ($row && $row['room_featured'] == '1')
                                echo 'checked'; ?> required>
                            <label class="form-check-label" for="yes">yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="roomFeatured" id="0" value="0" <?php if ($row && $row['room_featured'] == '0')
                                echo 'checked'; ?>>
                            <label class="form-check-label" for="no">no</label>
                        </div>
                    </div>
                </div>

        </div>

        <div class="row justify-content-center">
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="checkin">check in date:</label>
                <input type="date" class="form-control" name="checkin" id="checkin" value="<?php echo $row['check_in_date'] ?>" required min="<?php echo date('Y-m-d'); ?>" onchange="updateCheckOutDate()">
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="checkout">Checkout date:</label>
                <input type="date" class="form-control" name="checkout" id="checkout" value="<?php echo $row['check_out_date']; ?>" required>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="checkin">Max no of persons:</label>
                <input type="number" class="form-control" name="noOfPersons" value="<?php echo $row['room_capacity'] ?>"
                    required>
            </div>

        </div>

        <div class="container container d-flex justify-content-center align-items-center container">

            <button type="submit" class="btn btn-primary savebtn" name="updateRoom">Save</button>

        </div>

        </form>
        </div>

        <script>
            function updateCheckOutDate() {
                var checkinDate = document.getElementById("checkin").value;
                var checkoutInput = document.getElementById("checkout");

                checkoutInput.value = ""; // Clear previous value
                checkoutInput.setAttribute("min", checkinDate); // Set minimum value for checkout

                // Enable the input field after setting the minimum value
                checkoutInput.removeAttribute("readonly");
            }
        </script>
        <?php
    } else {
        // No record found
        echo "No record found.";
    }
}
?>
<?php
        }
    ?>
<?php include("include/footer.php") ?>