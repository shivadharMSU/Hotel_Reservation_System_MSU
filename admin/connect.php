<?php
	//$conn = new mysqli("localhost", "root", "", "hotel") or die(mysqli_error());
	//$conn;

	$dsn = 'mysql:host=localhost;dbname=hotel';
 $username = 'root';
 $password = '';
 try {
 $conn = new PDO($dsn, $username, $password);
 } catch (PDOException $e) {
 $error_message = $e->getMessage();
 //include('database_error.php');
 echo $error_message ;
 exit();
 }
?>