<?php

// Retreving form values in $_POST
$firstname = Trim(stripslashes($_POST['firstname']));
$lastname = Trim(stripslashes($_POST['lastname']));
$phone = Trim(stripslashes($_POST['phone']));
$textarea = Trim(stripslashes($_POST['textarea']));

// 1. Create a database connection
include 'db-info.php';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// do some error checking
if (! $connection){
	die('Could not connect!');
}

// 2. Performing database query
$query = "INSERT INTO contacts (first_name, last_name, phone, message) VALUES ('$firstname', '$lastname', '$phone', '$textarea')";

$result = mysqli_query($connection, $query);

// More error checking 
$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1) {
	die('No records were entered in database. Please re-check.');
}

// 5. Close database connection
mysqli_close($connection);

header("Location: contact-thanks.html");

?>