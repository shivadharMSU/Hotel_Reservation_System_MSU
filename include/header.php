<?php include("include/session.php") ?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Header with Logo and Navigation Bar</title>

    <style>
        .logo {
            height: 50px;
        }
        .navbar {
            background-color: white !important; /* Change background color to white */
        }

        .nav-link {
            color: black !important; /* Change text color to black */
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 2000 // Change slide every 2 seconds
            });
        });
    </script>
</head>

<body>
    

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav navbar-menu mr-auto">
                <li class="nav-item active">
                <img class="nav-link menulist" src="images/hotel-logo.jpg" style="width: 200px; height: 50px; padding: 5px;" href="index.php"">
                    <!-- <a class="nav-link menulist" href="index.php">Home</a> -->
                </li>

                <?php if ($loggedIn): ?>
                    <!-- Admin customer -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roomDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Manage Rooms
                        </a>
                        <div class="dropdown-menu" aria-labelledby="roomDropdown">
                            <a class="dropdown-item" href="adminAddRoom.php">Add Room</a>
                            <a class="dropdown-item" href="updateAdminRoom.php">Update Room</a>
                            <a class="dropdown-item" href="deleteAdminRoom.php">Delete Room</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage Room Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="addRoomType.php">Add Room Category</a>
                            <a class="dropdown-item" href="updateRoomType.php">Update Room Category</a>
                            <a class="dropdown-item" href="deleteRoomType.php">Delete Room Category</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="viewRooms.php">View Rooms</a>
                    </li>
                    <!-- Admin customer -->
                <?php else: ?>
                    <!-- inside customer -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bookingDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bookings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="bookingDropdown">
                            <a class="dropdown-item" href="newBooking.php">New Booking</a>
                            <a class="dropdown-item" href="viewBooking.php">View Booking</a>
                            <a class="dropdown-item" href="cancelBooking.php">Cancel Booking</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customerRating.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dining.php">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salonAndSpa.php">Salon and Spa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="localAttaction.php">Local Attractions</a>
                    </li>
                <?php endif; ?>
                <!-- inside customer -->
            </ul>

            <ul class="navbar-nav navbar-menu">


                <?php if ($loggedIn): ?>
                    <li class="nav-item">
                        <a class="nav-link logout" href="logout.php?logout=true">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

 
</body>
</html>