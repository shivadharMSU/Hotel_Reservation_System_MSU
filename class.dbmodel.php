<?php

class dbmodel
{
    public $db;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=shivadharDharaniPallavidatabase';
        $username = 'shivadharDharaniPallavi';
        $password = 'shivadharDharaniPallaviPass';

        try {
            $this->db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo $error_message;
            exit();
        }
    }

    function delete($roomNo)
    {
        $query = "DELETE FROM `rooms` WHERE room_number = :roomNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateRoom($roomNo, $roomType, $roomBooked, $roomFeatured, $checkin, $checkout, $noOfPersons)
    {
        $query = "UPDATE `rooms` SET `room_type` = :roomType, `room_featured` = :roomFeatured, `room_booked` = :roomBooked, `check_in_date` = :checkin, `check_out_date` = :checkout, `room_capacity` = :noOfPersons WHERE `room_number` = :roomNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':roomFeatured', $roomFeatured);
        $stmt->bindParam(':roomBooked', $roomBooked);
        $stmt->bindParam(':checkin', $checkin);
        $stmt->bindParam(':checkout', $checkout);
        $stmt->bindParam(':noOfPersons', $noOfPersons);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function insertRoom($roomNo, $price, $roomType, $noOfPersons, $amenities, $checkinDate, $checkOutDate, $booking, $roomFeatured)
    {
        $query = "INSERT INTO `rooms`(`room_number`, `room_type`, `check_in_date`, `check_out_date`, `room_capacity`, `room_featured`) VALUES (:roomNo, :roomType, :checkinDate, :checkOutDate, :noOfPersons, :roomFeatured)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':checkinDate', $checkinDate);
        $stmt->bindParam(':checkOutDate', $checkOutDate);
        $stmt->bindParam(':noOfPersons', $noOfPersons);
        $stmt->bindParam(':roomFeatured', $roomFeatured);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    // start room
    function deleteRoomType($roomTypeId)
    {
        $query = "DELETE FROM `room_category_details` WHERE id = :roomTypeId";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomTypeId', $roomTypeId);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateRoomType($price, $amenities, $roomTypeId)
    {
        $query = "UPDATE `room_category_details` SET `price` = :price, `aminities` = :amenities WHERE `id` = :roomTypeId";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':amenities', $amenities);
        $stmt->bindParam(':roomTypeId', $roomTypeId);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function insertRoomType($roomTypeName, $price, $amenities)
    {
        $query = "INSERT INTO `room_category_details`(`category_name`, `price`, `aminities`) VALUES (:roomTypeName, :price, :amenities)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomTypeName', $roomTypeName);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':amenities', $amenities);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function deleteCustomerBooking($bookingRefNo)
    {
        $query = "DELETE FROM `customer_bookings` WHERE bookingRefId = :bookingRefNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':bookingRefNo', $bookingRefNo);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateRoomBookingDetails($bookingRefNo)
    {
        $query = "UPDATE `rooms` SET `room_booked` = '0', `booking_ref_id` = '' WHERE `booking_ref_id` = :bookingRefNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':bookingRefNo', $bookingRefNo);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getDataWithEmail($email)
    {
        $query = "SELECT COUNT(*) AS count FROM `customer_bookings` WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $row["count"];

        return $count;
    }

    function getRooms($email)
    {
        $query = "SELECT COUNT(*) AS count FROM `customer_bookings` WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $row["count"];

        return $count;
    }

    function getAvailableRooms($checkin, $checkout, $noOfPersons)
    {
        $query = "SELECT room_type, COUNT(*) AS noOfRooms FROM rooms WHERE room_featured = '1' AND room_booked = '0' AND check_in_date <= :checkin AND check_out_date >= :checkout AND room_capacity >= :noOfPersons GROUP BY room_type";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':checkin', $checkin);
        $stmt->bindParam(':checkout', $checkout);
        $stmt->bindParam(':noOfPersons', $noOfPersons);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getRoomTypes($roomType)
    {
        $query = "SELECT id, category_name, price, aminities FROM room_category_details WHERE id = :roomType";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->execute();
        $rowRoomType = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rowRoomType;

    }


    function saveRatings($email, $name, $rating, $feedback)
    {
        $query = "INSERT INTO customer_ratings (email,cust_name, rating, feedback) VALUES (:email, :custName, :rating, :feedback)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':custName', $name, PDO::PARAM_STR);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
        $stmt->bindParam(':feedback', $feedback, PDO::PARAM_STR);
        $result = $stmt->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}


?>