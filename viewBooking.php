<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>
<br>
<div class="container">
    <form method="POST" action="">
        <div class="row justify-content-center">
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="bopkingrefno">Booking Ref No:</label>
                <input type="text" class="form-control" name="BookingRef" required>
            </div>
            <div class="form-group col-md-4 col-md-offset-1 align-center">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>

        <div class="container container d-flex justify-content-center align-items-center container">
            <button type="submit" class="btn btn-primary savebtn" name="getBookings">Submit</button>
        </div>


    </form>

</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['getBookings'])) {
    $bookingRef = $_POST["BookingRef"];
    $email = $_POST["email"];

    $query = "SELECT `name`, `email`, `address`, `mobile`, `city`, `state`, `email`, `checkin`, `checkout`, `no_of_adults`, `no_of_children`, `no_of_persons`, `no_of_rooms`, `no_of_days`, (SELECT `category_name` FROM `room_category_details` WHERE `id` = `roomType`) AS `room_type`, `price` FROM customer_bookings WHERE `bookingRefId` = :bookingRef and `email` = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':bookingRef', $bookingRef);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        ?>
        <!-- #region -->
        <div class="container">

            <div class="container container d-flex justify-content-center align-items-center container">
                <h2>Booking Details</h2>
            </div>
            <div class="row">
                <div class="col-md-12 center">
                    <table class="table center table-striped">

                        <tbody>

                            <tr>
                                <th scope="row">Booking Ref Id</th>

                                <td>
                                    <?php echo $bookingRef ?>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Name</th>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>
                                    <?php echo $row['mobile']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <?php echo $row['address']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>
                                    <?php echo $row['city']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>
                                    <?php echo $row['state']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Check-in-Date</th>
                                <td>
                                    <?php echo $row['checkin']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Check-out-date</th>
                                <td>
                                    <?php echo $row['checkout']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No of adults</th>
                                <td>
                                    <?php echo $row['no_of_adults']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>no of children</th>
                                <td>
                                    <?php echo $row['no_of_children']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No Of Persons</th>
                                <td>
                                    <?php echo $row['no_of_persons']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No Of Rooms</th>
                                <td>
                                    <?php echo $row['no_of_rooms']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No Of Days</th>
                                <td>
                                    <?php echo $row['no_of_days']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Room Category</th>
                                <td>
                                    <?php echo $row['room_type']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <?php echo $row['price']; ?>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        $conn = null;
    } else {
        ?>
        <br>
        <br>
        <div class="container container d-flex justify-content-center align-items-center container">
            <h1>No booking details with this ref id</h1>
        </div>
        <?php

    }
}
?>
<?php include("include/footer.php") ?>