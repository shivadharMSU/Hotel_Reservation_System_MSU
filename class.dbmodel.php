<?php

class dbmodel{



    public $db;
    public function __construct()
    {

        $this->db = new mysqli("localhost", "root", "", "hotel") or die(mysqli_error());;
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }

        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=hotel", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
    }



function delete($roomNo)
{

   

    $query = "DELETE FROM `rooms` WHERE room_number =  '$roomNo';";
    $result = $this->db->query($query) or die(mysqli_error());;

  
    if ($result) {

        return true;
    } else {
        return false;
    }
}


function updateRoom($roomNo,$roomType,$roomBooked,$roomFeatured,$checkin,$checkout,$noOfPersons)
{

    

    if ($this->db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "UPDATE `rooms` set `room_type` = '$roomType', `room_featured` = '$roomFeatured', `room_booked` = '$roomBooked', `check_in_date` = '$checkin', `check_out_date` = '$checkout', `room_capacity` = '$noOfPersons' WHERE `room_number` = '$roomNo'";
    echo $query;
    // Execute the query
    $result = $this->db->query($query) or die(mysqli_error());
  
    if ($result) {

        return true;
    } else {
        return false;
    }
}



function insertRoom($roomNo,$price,$roomType,$noOfPersons,$amenities,
$checkinDate,$checkOutDate,$booking,$roomFeatured)
{

   

    
    $query = "INSERT INTO `rooms`( `room_number`, `room_type`, `check_in_date`, `check_out_date`, `room_capacity`,`room_featured`)
     VALUES ('$roomNo','$roomType','$checkinDate','$checkOutDate','$noOfPersons','$roomFeatured')";
    
    // Execute the query
    $result = $this->db->query($query) or die(mysqli_error());

  
    if ($result) {

        return true;
    } else {
        return false;
    }
}




//start room-------------------------------------------------------------------------------------
function deleteRoomType($roomTypeId)
{

    $query = "DELETE FROM `room_category_details` WHERE id =  '$roomTypeId';";
    // Execute the query
    $result = $this->db->query($query) or die(mysqli_error());

  
    if ($result) {

        return true;
    } else {
        return false;
    }
}


function updateRoomType($price,$amenities,$roomTypeId)
{

    $query = "UPDATE `room_category_details` SET `price`='$price',`aminities`='$amenities' WHERE `id`='$roomTypeId'";
    // Execute the query
    $result = $this->db->query($query) or die(mysqli_error());
  
    if ($result) {

        return true;
    } else {
        return false;
    }
}



function insertRoomType($roomTypeName,$price,$amenities)
{

    $query = "INSERT INTO `room_category_details`(`category_name`, `price`, `aminities`) VALUES ('$roomTypeName','$price','$amenities');";
    echo $query;
    // Execute the query
    $result = $this->db->query($query) or die(mysqli_error());  
    if ($result) {

        return true;
    } else {
        return false;
    }
}


}

// start room 





?>
