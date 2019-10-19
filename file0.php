<!-- for entering student and book data in the database -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>test1</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="for_this.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript" src="prop.js"></script>  
<style>
.outbox{
	margin-top:15px;background-color:#FFFF99;width:450px;padding:3px;
	border-radius:3px;
	
}

</style>
</head>
<body>

<nav class="typ">
<ul>
  <li> <a href="test.php" id="link1" > Home </a> </li>
  <li> <a href="rental.php" id="link2" style="background-color:#707070;"> Rental </a> </li>
  <li> <a href="userdata.php" id="link3"> User data </a> </li>
</ul>
</nav>

<div class="container">
  <div style="margin-top:15px;">
    <?php 
	echo "<b>Student name:</b> ".$_SESSION["std_name"]."<br/>"; 
	echo "<b>Student ID:</b> ".$_SESSION["std_id"]."<br/>";
	echo "<b>Date:</b> ".$_SESSION["is_date"];
	?> 	
  
  </div>
 
  <div class="form1" style="width:500px;margin-top:30px;height:250px;">
    <h2 align="center">Book Entry Form</h2>
	    <form method="POST">
		    <div class="form-group" style="margin:22px;margin-top:25px;">
              <label for="bk_name">Book Name:</label>
              <input type="text" class="form-control" id="bk_name" placeholder="Enter book name" name="bk_name">
            </div>
            <input type="submit" class="btn btn-primary" style="margin:22px;" value="Add new" name="add" />&nbsp &nbsp
			<input  type="submit" class="btn btn-primary" style="margin:22px;" name="done" value="Done" />
	  </form>
  </div>


<div class="outbox">
<?php


$conn = new mysqli("localhost","root","","library");
if(mysqli_connect_error()){	
	echo "unsuccessful connection!";
	die();
}

if(isset($_POST["add"])){
	$student_name = $_SESSION["std_name"];
    $student_id = $_SESSION["std_id"];
    $issue_date = $_SESSION["is_date"];
	$book_name = $_POST["bk_name"];
	
	$stmt = $conn->prepare("insert into users values(?,?,?,?)");
    $stmt->bind_param("ssss",$book_name,$student_name,$student_id,$issue_date);
	if($stmt->execute()){
	     echo "Data entered sucessfully";
	}
	else{
		echo "Sorry! An error occured!";
	}


    $stmt->close();
}

$conn->close();


if(isset($_POST["done"])){
	header("Location: rental.php");
}

?>


</div>
</div>
</body>
</html>
