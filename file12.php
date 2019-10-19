<?php

$conn = new mysqli("localhost","root","","library");
if(mysqli_connect_error()){
	echo "error!";
	die();
}
$sno = 1;
$sql = "select * from users order by studentName";
$result = $conn->query($sql);
    
if($result->num_rows > 0){
	echo "<table border='1'>";
	echo "<tr><td><b>sno</b></td><td><b>student name</b></td><td><b>student id</b></td><td><b>book name</b></td><td><b>issue date</b></td></tr> ";
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$sno."</td><td>".$row['studentName']."</td><td>".$row['studentId']."</td><td>".$row['bookName']."</td><td>".$row['issueDate']."</td></tr>" ;
	    $sno++;			
	}	
	echo "</table>";
}
else{
	echo "0 results";
}






?>