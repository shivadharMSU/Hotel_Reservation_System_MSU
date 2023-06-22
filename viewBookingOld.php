
    <div class="container">
        <h1>Customer Bookings</h1>

        <?php
        // Replace database credentials with your own
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database_name";

        // Create a new MySQLi instance
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape the email to prevent SQL injection
        $email = $conn->real_escape_string($_GET['email']);

        // Prepare and execute the query
        $query = "SELECT `name`, `email`, `address`, `mobile`, `city`, `state`, `email`, `checkin`, `checkout`, `no_of_adults`, `no_of_children`, `no_of_persons`, `no_of_rooms`, `no_of_days`, (SELECT `category_name` FROM `room_category_details` WHERE `id` = `roomType`) AS `room_type`, `price` FROM `customer_bookings` WHERE `email` = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo '<table class="table table-borderless">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Email</th>';
            echo '<th>Address</th>';
            echo '<th>Mobile</th>';
            echo '<th>City</th>';
            echo '<th>State</th>';
            echo '<th>Check-In</th>';
            echo '<th>Check-Out</th>';
            echo '<th>No. of Adults</th>';
            echo '<th>No. of Children</th>';
            echo '<th>No. of Persons</th>';
            echo '<th>No. of Rooms</th>';
            echo '<th>No. of Days</th>';
            echo '<th>Room Type</th>';
            echo '<th>Price</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['checkin']; ?></td>
                    <td><?php echo $row['checkout']; ?></td>
                    <td><?php echo $row['no_of_adults']; ?></td>
                    <td><?php echo $row['no_of_children']; ?></td>
                    <td><?php echo $row['no_of_persons']; ?></td>
                    <td><?php echo $row['no_of_rooms']; ?></td>
                    <td><?php echo $row['no_of_days']; ?></td>
                    <td><?php echo $row['room_type']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
                <?php
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No bookings found for the given email.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>

