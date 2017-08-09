<?php
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not Connected to server';
	}
	if(!mysqli_select_db($con,'sampledb'))
	{	
		echo 'database not selected';
	}
$userid = $_POST['1'];
$email = $_POST['email'];
$password=$_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$country=$_POST['country'];

$sql = "INSERT INTO Authentication(userid,email,password,phone,city,country)VALUES ('$userid','$email','$password','$phone','$city','$country')";

if(!mysqli_query($con,$sql)){
echo 'Not inserted';
}else{
echo 'inserted';
}

header("refresh:2; url=registerPage.html");

?>