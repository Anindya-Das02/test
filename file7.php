<?php

$conn = new mysqli("localhost","root","","library");
if(mysqli_connect_error()){
	echo "connection failed!";
	die();
}
if(isset($_POST["login"])){
	$staff_id = $_POST["staff_id"];
	$staff_psd = $_POST["staff_psd"];
	$sql = "select * from staff where id='$staff_id' and password='$staff_psd'";
	$result = $conn->query($sql);
	$row = $result->num_rows ;
	if($row > 0){
		header("Location: test.php");
	}
	else{
		echo "login failed";
	}
	
}
$conn->close();

?>