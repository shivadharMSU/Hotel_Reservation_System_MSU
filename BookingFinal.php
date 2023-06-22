<?php include("include/header.php"); ?>
<?php
require_once 'admin/connect.php';

if (isset($_POST['personalInfo'])) {
    $name = $_POST["fullname"];
    echo @$name;
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $streetname = $_POST["streetname"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $roomType = $_POST["roomType"];
    $price = $_POST["price"];
    $originalPrice = $_POST["originalPrice"];
    $offerApplied = $_POST["offerApplied"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $noOfAdults = $_POST["noOfAdults"];
    $noOfChildren = $_POST["noOfChildren"];
    $roomCapacity = $_POST["roomCapacity"];
    $noOfRooms = $_POST["noOfRooms"];
    $noOfDays = $_POST["noOfDays"];

    try {
        // $dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $roomquery = "SELECT room_number, room_type FROM rooms WHERE room_type = :roomType AND room_featured = '1' AND room_booked = '0' AND check_in_date <= :checkin AND check_out_date >= :checkout AND room_capacity >= :roomCapacity LIMIT :noOfRooms";
        $stmt = $conn->prepare($roomquery);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':checkin', $checkin);
        $stmt->bindParam(':checkout', $checkout);
        $stmt->bindParam(':roomCapacity', $roomCapacity);
        $stmt->bindParam(':noOfRooms', $noOfRooms, PDO::PARAM_INT);
        $stmt->execute();
        $roomqueryResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        if (count($roomqueryResult) >= $noOfRooms) {
            $query = "INSERT INTO `customer_bookings` (`name`, `mobile`, `email`, `address`, `streetname`, `city`, `state`, `roomType`, `offer_applied`, `original_price`, `price`, `no_of_adults`, `no_of_children`, `no_of_rooms`, `no_of_persons`, `no_of_days`, `checkin`, `checkout`) VALUES (:name, :mobile, :email, :address, :streetname, :city, :state, :roomType, :offerApplied, :originalPrice, :price, :noOfAdults, :noOfChildren, :noOfRooms, :roomCapacity, :noOfDays, :checkin, :checkout)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':streetname', $streetname);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':roomType', $roomType);
            $stmt->bindParam(':offerApplied', $offerApplied);
            $stmt->bindParam(':originalPrice', $originalPrice);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':noOfAdults', $noOfAdults);
            $stmt->bindParam(':noOfChildren', $noOfChildren);
            $stmt->bindParam(':noOfRooms', $noOfRooms);
            $stmt->bindParam(':roomCapacity', $roomCapacity);
            $stmt->bindParam(':noOfDays', $noOfDays);
            $stmt->bindParam(':checkin', $checkin);
            $stmt->bindParam(':checkout', $checkout);
            $stmt->execute();

            $lastInsertId = $conn->lastInsertId();
            $refid = 'HTS' . $lastInsertId;
            $queryUpdate = "UPDATE `customer_bookings` SET `bookingRefId` = :refid WHERE id = :lastInsertId";
            $stmt = $conn->prepare($queryUpdate);
            $stmt->bindParam(':refid', $refid);
            $stmt->bindParam(':lastInsertId', $lastInsertId);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                foreach ($roomqueryResult as $roomRow) {
                    $roomNo = $roomRow['room_number'];
                    $queryRoomUpdate = "UPDATE `rooms` SET `room_booked` = 1, `booking_ref_id` = :refid WHERE room_number = :roomNo";
                    $stmt = $conn->prepare($queryRoomUpdate);
                    $stmt->bindParam(':refid', $refid);
                    $stmt->bindParam(':roomNo', $roomNo);
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                        ?>
                        <h2>Thanks for booking with us <?php echo $refid; ?></h2>
                        <?php
                    }   
                }
            }
        } else {
            ?>
            <h2>Oops! Rooms no longer available, Please try booking again </h2>
            <?php
        }

        $conn = null; // Close the connection
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<?php include("include/footer.php"); ?>
