<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "sampledb";	


$con = mysqli_connect($server,$user,$pass,$db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$userid =1;
$fname =mysqli_real_escape_string($con, $_POST['fname']);
$lname=mysqli_real_escape_string($con, $_POST['lname']);
$phone=mysqli_real_escape_string($con, $_POST['cell']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$gymmaster=mysqli_real_escape_string($con, $_POST['gymmaster']);
$country=mysqli_real_escape_string($con, $_POST['country']);

$sql = "UPDATE `user`
      SET uid=1,fname='$fname',lname='$lname',phone='$phone',city='$city',
	gymmaster='$gymmaster',country='$country'
      WHERE uid=$userid";




if ($con->query($sql) == TRUE) {
    echo "<h3>Updating... <h3>";
	header('Location:userProfile.html');
}



?>