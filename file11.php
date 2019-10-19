<?php

session_start();

$_SESSION["std_name"] = $_POST["sname"];
$_SESSION["std_id"] = $_POST["stud_id"];
$_SESSION["ses_date"] = $_POST["issue_date"];

$name = $_POST["sname"];
$fname = $_POST["stud_id"];

$conn = new mysqli("localhost","root","","library");
if(mysqli_connect_error()){	
	echo "unsuccessful connection!";
	die();
}

$stmt = $conn->prepare("insert into users values('hlo',?,?,'2/3/15')");
$stmt->bind_param("ss",$name,$fname);

if($stmt->execute()){
	echo "yup";
}


$stmt->close();
$conn->close();

?>