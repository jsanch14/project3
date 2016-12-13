
<?php
include 'db-info.php';
$firstname = Trim(stripslashes($_POST['Firstname']));
$lastname = Trim(stripslashes($_POST['Lastname']));
$phone = Trim(stripslashes($_POST['Phone']));
$email = Trim(stripslashes($_POST['EMail']));
$message = Trim(stripslashes($_POST['comment']));


$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);





$query = "INSERT INTO contact (FN, LN, PH, EM, TA)
VALUES ('$firstname', '$lastname', '$phone', '$email','$message')";
$result = mysqli_query($connection, $query);
$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('No records were written to the database. Waaaa!');
} 
mysqli_close($connection);
header("Location: databases-read.php");
?>