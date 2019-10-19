<?php
session_start();

$conn = new mysqli("localhost","root","","library");
if(mysqli_connect_error()){
	echo "error";
	die();
}

if(isset($_POST["Submit1"])){
	$name = $_POST["user_name"];
	$id = $_POST["stud_id"];
	$sql = "SELECT * FROM users where studentName='$name' and studentId='$id' ";
	$result = $conn->query($sql);
	echo "<h1>user details - books issued to:</h1> ";
    echo "<h3>Student name: ".$name."</h3>";
    echo "<h3>Student Id: ".$id."</h3>";
	if ($result->num_rows > 0) {	
    echo "<table border='1'>";
	echo "<tr><td><b>book name</b></td><td><b>issue date</b></td></tr>";
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
	   echo "<td>".$row['bookName']."</td>";
	   echo "<td>".$row['issueDate']."</td>";
	   echo "</tr>";
    }
	echo "</table>";
} else {
    echo "0 results found!";
}	
}


		if(isset($_POST["Submit2"])){			
			$book = $_POST["book_name"];
			echo "<h3>users for book: ".$book."</h3>";
			$sql = "select * from users where bookName='$book' ";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
                echo "<table border='1'>";
	            echo "<tr><td><b>Student name</b></td><td><b>Student Id</b></td></tr>";
                while($row = $result->fetch_assoc()) {
                   echo "<tr>";
	               echo "<td>".$row['studentName']."</td>";
	               echo "<td>".$row['studentId']."</td>";
	               echo "</tr>";
             }
	         echo "</table>";
				
			}else{
				echo "0 results found";
			}
		}
		
		if(isset($_POST["Submit3"])){
			$date = $_POST["issue_date"];
			echo "<h2>books issued on: ".$date."</h2>";
			$sql = "select * from users where issueDate='$date' ";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
                echo "<table border='1'>";
	            echo "<tr><td><b>Student name</b></td><td><b>Student Id</b></td><td><b>book name</b></td></tr>";
                while($row = $result->fetch_assoc()) {
                   echo "<tr>";
	               echo "<td>".$row['studentName']."</td>";
	               echo "<td>".$row['studentId']."</td>";
				   echo "<td>".$row['bookName']."</td>";
	               echo "</tr>";
             }
	         echo "</table>";
				
			}else{
				echo "0 results found";
			}
		}
$conn->close();
?>