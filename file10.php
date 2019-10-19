<?php
session_start();
if($_SESSION["logged"]!='yes'){
	echo "Please login";
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>test1</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="for_this.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript" src="prop.js"></script>  
</head>
<body>

<nav class="typ">
<ul>
  <li> <a href="test.php" id="link1" > Home </a> </li>
  <li> <a href="rental.php" id="link2" style="background-color:#707070;"> Rental </a> </li>
  <li> <a href="userdata.php" id="link3"> User data </a> </li>
  <li style="float:right;" title="logout" > <a href="logout.php" ><span class="glyphicon glyphicon-off"> </span> </a></li>
</ul>
</nav>

<div class="container" style="margin-top:22px;">
  <div class="row">
    <div class="col-lg-6 col-sm-8">
	  <div class="form1">
	    <form method="post">
		 <div class="form-group" style="margin:22px;">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="sname">
         </div>
         <div class="form-group" style="margin:20px;">
           <label for="stud_id">Student id:</label>
           <input type="text" class="form-control" id="stud_id" placeholder="Enter student id" name="stud_id">
         </div>
		 <div class="form-group" style="margin:20px;">
           <label for="date">Date:</label>
           <input type="date" class="form-control" id="date" placeholder="Enter date" name="issue_date">
         </div>
         <input type="submit" class="btn btn-primary" name="Submit" style="margin:22px;" value="Submit" />
	  
	    </form>
	  </div>  
    </div>
	
	
	<div class="col-lg-6 col-sm-4 box1">
	  <h2 align="center"> Directions for use </h2>
	  <p>Welcome to XYZ digital library.<br/>This 'Rental' page keeps the record of books issued to the students.<br/>
	  Please follow the following instructions:<br/>
	  <ol>
	    <li>First enter the student's name to whom the book is issed</li>
		<li>This data will be automatically stored</li>
		<li>Enter the student id</li>
		<li>Submit to proceed to next form</li>	  
	  </ol>
	  </p>
	
	
	</div>
  </div>
</div>
<?php

 if (isset($_POST['Submit'])) { 
  echo "ok";
  $_SESSION['std_name']=$_POST['sname'];
  $_SESSION['std_id']=$_POST['stud_id'];
  $_SESSION['is_date']=$_POST['issue_date'];
  echo "name: ".$_SESSION["std_name"];
  header("Location: data.php");
 } 

?>



</body>
</html>
