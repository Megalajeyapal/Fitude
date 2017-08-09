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
$blood =mysqli_real_escape_string($con, $_POST['blood']);
$height =mysqli_real_escape_string($con, $_POST['height']);
$weight=mysqli_real_escape_string($con, $_POST['weight']);
$sugar = mysqli_real_escape_string($con, $_POST['sugar']);
$diabetes = mysqli_real_escape_string($con, $_POST['diabetes']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);

session_start();

$sql = "UPDATE `health` SET `uid`=1,`height`='$height',`weight`='$weight',`gender`='$gender',`bloodgroup`='$blood',`sugar`='$sugar',`bp`='$diabetes' WHERE uid=$userid";
if ($con->query($sql) == TRUE) {
    echo "<h3>Updating... <h3>";
	header('Location:userProfile.html');
}else{
	echo"failed";
}

?>