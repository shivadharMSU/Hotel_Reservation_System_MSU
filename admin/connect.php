<?php
	

	$dsn = 'mysql:host=localhost;dbname=shivadharDharaniPallavidatabase';
 $username = 'shivadharDharaniPallavi';
 $password = 'shivadharDharaniPallaviPass';
 try {
 $conn = new PDO($dsn, $username, $password);
 } catch (PDOException $e) {
 $error_message = $e->getMessage();
 //include('database_error.php');
 echo $error_message ;
 exit();
 }
?>