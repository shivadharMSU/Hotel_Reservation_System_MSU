<?php require_once 'admin/connect.php' ?>
<?php

if (isset($_POST['berf_Id'])) {

    $bookingRefNo = $_POST['berf_Id'];
    $queryCustDetails = "SELECT name, email, address, mobile, city, state, email, checkin, checkout, no_of_adults, no_of_children, no_of_persons, no_of_rooms, no_of_days, (SELECT category_name FROM room_category_details WHERE id = roomType) AS room_type, price FROM customer_bookings WHERE bookingRefId = :bookingRefNo";
    $stmtCustDetails = $conn->prepare($queryCustDetails);
    $stmtCustDetails->bindParam(':bookingRefNo', $bookingRefNo, PDO::PARAM_STR);
    $stmtCustDetails->execute();

    if ($stmtCustDetails->rowCount() > 0) {
        $rowCustDetails = $stmtCustDetails->fetch(PDO::FETCH_ASSOC);
    }

    ?>
    <div class="row">
        <div class="col">
            <p><strong>Name: </strong>
                <?php echo $rowCustDetails['name']; ?>
            </p>

        </div>
        <div class="col">
            <p><strong>Email: </strong>
                <?php echo $rowCustDetails['email']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>Mobile: </strong>
                <?php echo $rowCustDetails['mobile']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>Address: </strong>
                <?php echo $rowCustDetails['address']; ?>
            </p>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <p><strong>City: </strong>
                <?php echo $rowCustDetails['city']; ?>
            </p>

        </div>
        <div class="col">
            <p><strong>State: </strong>
                <?php echo $rowCustDetails['state']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>Email: </strong>
                <?php echo $rowCustDetails['email']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>Check-in: </strong>
                <?php echo $rowCustDetails['checkin']; ?>
            </p>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <p><strong>Check-out: </strong>
                <?php echo $rowCustDetails['checkout']; ?>
            </p>

        </div>
        <div class="col">
            <p><strong>No of adults: </strong>
                <?php echo $rowCustDetails['no_of_adults']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>No of children: </strong>
                <?php echo $rowCustDetails['no_of_children']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>No of persons: </strong>
                <?php echo $rowCustDetails['no_of_persons']; ?>
            </p>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <p><strong>No of rooms: </strong>
                <?php echo $rowCustDetails['no_of_rooms']; ?>
            </p>

        </div>
        <div class="col">
            <p><strong>No of days: </strong>
                <?php echo $rowCustDetails['no_of_days']; ?>
            </p>
        </div>
        <div class="col">
            <p><strong>Room type: </strong>
                <?php echo $rowCustDetails['room_type']; ?>
            </p>
        </div>
        <div class="col">

        </div>

    </div>
    <?php
} else {
    ?>
    <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Invalid request!</h2>
        </div>
        <?php
    echo "Invalid request";
}

?>