<?php
session_start();
if($_SESSION["logged"]!='yes'){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>user data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="for_this.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript" src="prop.js"></script>  
<style>
.formx{

border:2px solid blue;
border-radius:10px;
height:350px;
background-color: #ccccff;	
}
</style>
<script>
function func(){
	var opt = document.getElementById("sel").value;
	var bx1 = document.getElementById("form1");
	var bx2 = document.getElementById("form2");
	var bx3 = document.getElementById("form3");
	if(opt == 'by_name'){
		bx1.style.display = 'block';
		bx2.style.display = 'none';
		bx3.style.display = 'none';
	}
	if(opt == 'by_book'){
		bx1.style.display = 'none';
		bx2.style.display = 'block';
		bx3.style.display = 'none';
	}
	if(opt == 'by_date'){
		bx1.style.display = 'none';
		bx2.style.display = 'none';
		bx3.style.display = 'block';
	}
}


</script>

</head>
<body>
<nav class="typ">
<ul>
  <li> <a href="test.php" id="link1" > Home </a> </li>
  <li> <a href="rental.php" id="link2"> Rental </a> </li>
  <li> <a href="userdata.php" id="link3" style="background-color:#707070;"> User data </a> </li>
  <li style="float:right;" title="logout" > <a href="logout.php" ><span class="glyphicon glyphicon-off"> </span> </a></li>
</ul>
</nav>	

<div class="container">
<div style="margin-top:20px;">
  Select:
<select id="sel">
  <option value="by_name">by name</option>
  <option value="by_book">by book</option>
  <option value="by_date">by date</option>
</select>
<button onclick="func()">click</button>
</div>
<p> </p>
<div id="form1">
 <div class="formx" style="width:40%;height:255px;">
	    <form action="user_details.php" method="POST">
		 <div class="form-group" style="margin:22px;">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="user_name">
         </div>
         <div class="form-group" style="margin:20px;">
           <label for="stud_id">Student id:</label>
           <input type="text" class="form-control" id="stud_id" placeholder="Enter student id" name="stud_id">
         </div>
         <input type="submit" class="btn btn-primary" name="Submit1" style="margin:22px;" value="Submit" />
	  
	    </form>
	  </div> 	  
</div>

<div id="form2" style="display:none;" >
  <div class="formx" style="width:40%;height:200px;">
	    <form action="user_details.php" method="post">
		 <div class="form-group" style="margin:22px;">
            <label for="bk_name">Book Name:</label>
            <input type="text" class="form-control" id="bk_name" placeholder="Enter book name" name="book_name">
         </div>
         <input type="submit" class="btn btn-primary" name="Submit2" style="margin:22px;" value="Submit" />
	    </form>
	  </div> 
	  

</div>

<div id="form3" style="display:none;">
  <div class="formx" style="width:40%;height:200px;">
	    <form action="user_details.php" method="post">
		 <div class="form-group" style="margin:22px;">
            <label for="is_date">Issue Date:</label>
            <input type="date" class="form-control" id="is_date" placeholder="Enter date" name="issue_date">
         </div>
         <input type="submit" class="btn btn-primary" name="Submit3" style="margin:22px;" value="Submit" />
	    </form>
	  </div>
</div>


</div>
</body>
</html>