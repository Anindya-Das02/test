<?php
session_start();
if($_SESSION["logged"]!='yes'){
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
  <li> <a href="test.php" id="link1"  style="background-color:#707070;"> Home </a> </li>
  <li> <a href="rental.php" id="link2"> Rental </a> </li>
  <li> <a href="userdata.php" id="link3"> User data </a> </li>
  <li style="float:right;" title="logout" > <a href="logout.php" ><span class="glyphicon glyphicon-off"> </span> </a></li>
</ul>
</nav>
<div class="container"> 
 <div class="row">
   <div class="col-md-12" style="background-color:#b3b3ff;height:300px;margin-top:35px;">
     <h2 align="center">Welcome to Digital Library</h2>
   
   
   
   </div>
 </div>
 
</div>



</body>
</html>
