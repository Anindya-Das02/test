<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Lib login page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<style>
body{
	background-image:url('grass2.jpg');
	background-size:cover;
}
.bx1{
	border:2px solid blue;
	border-radius:12px;
	background-color:#5DADE2;height:300px;
	
}
.topname{
	background-color:blue;
	height:50px;
	margin-left:-15px;
	margin-right:-15px;
	margin-top:-20px;
	border-radius:11px 11px 0px 0px;
	
}

</style>
</head>
<body>
<div class="container">
 <div class="row" style="margin-top:50px;">
  <div class="col-xs-6 col-xs-offset-3 bx1">
    <div class="topname">
	  <h2 style="color:white;text-align:center;padding:5px;">Library Login Portal</h2>
	</div>
	
	<form method="post">
	  <div class="form-group" style="margin:20px;">
	    <label for="staff_id">Enter Staff Id:</label>
		<input type="text" class="form-control" name="staff_id" placeholder="Enter staff id" />
	  </div>
	  <div class="form-group" style="margin:20px;">
	    <label for="staff_psd">Enter Password:</label>
		<input type="password" class="form-control" name="staff_psd" placeholder="Enter password" />
	  </div>
	  <input type="submit" value="login" class="btn btn-primary" name="login" style="margin:20px;" />	
	</form>
   </div>
 </div>
 <center>
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
		$_SESSION["logged"]="yes";
		header("Location: test.php");
	}
	else{
		$_SESSION["logged"] = "no";
		echo "<span style='color:red;' >*login failed</span>";
	}
	
}
$conn->close();

?>
 
 </center>
 
</div>


</body>
</html>