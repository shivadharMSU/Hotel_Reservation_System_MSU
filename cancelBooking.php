<?php include("include/header.php") ?>


<?php

    // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        $query = "SELECT id,category_name FROM `room_category_details`";

        ?>

<div class="container">
        <br>
<div class="container container d-flex justify-content-center align-items-center container">
            <h2>Cancel Booking</h2>
        </div>
    <br>
    <form method="POST" action="CancelBookingController.php">
    <div class="row justify-content-center">
                    <div class="form-group col-md-4 col-md-offset-1 align-center">
            <label for="checkin">Book Reference Number:</label>
            <input type="text" class="form-control" name="BookingRef" required>
        </div> 
    </div>

    <div class="container container d-flex justify-content-center align-items-center container">
    <button type="submit" class="btn btn-primary savebtn" name="cancelBooking">Cancel</button>
</div>
         
        
    </form>
  
  
       
</div>

<?php
         }
        ?>
<?php include("include/footer.php") ?>
