<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>E-learning complaint system</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image:url("tower.jpg");
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
       color: #5379fa;
font-family: 'Exo', sans-serif;
	font-size: 15px;
	font-weight: 200;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
float: left;
	color: white;
	font-family: 'Exo', sans-serif;
	font-size: 10px;
	font-weight: 200;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}


</style>
    <script src="js/prefixfree.min.js"></script>
    <title>Complaint form</title>

</head>

<body>


  <div class="body">
<br>
<br>
<h1 align="center"><b>Online E-Learning Complaint Management System</b></h1>
<h3 align="center">
<?php 
	
	$user=$_SESSION["id"];
 	echo "	Welcome ".$user."!<br>";
?>
</h3>
</div>
<div class="grad">
<br>
<br><br><br><br><br><br><br><br>

<form  name="complaint" action="store2.php" method="post">
 <fieldset>
  <legend><h2><font color=#5379fa face="Comic Sans MS"> &nbsp &nbsp &nbsp Fill the complaint form:</font></h2></legend>

<ul>
			<li>
				<label for="Room number"><b><h3>Room number</h3></b></label>
				<input type="text" name="roomnumber" placeholder="Class room number" required>
			</li>
			<br>
			<li>
				<label for="Complaint"><b><h3>Complaint</h3></b></label>
				<textarea name="complaint" rows="10" cols="70" placeholder="Enter your complaint here"></textarea>
			</li>
			<br>
			<li>
				<!--
				<label for="Component"><b><h3>Component</h3></b></label>					
 				<name="comp">
				<select>
					<option value="Laptop">Laptop</option> 
					<option value="Projector">Projector</option> 
					<option value="Screen">Screen</option> 
					<option value="Remote">Remote</option> 
				</select>-->
				<label for="Component"><b><h3>Defective Component</h3></b></label>
				<input type="text" name="comp" placeholder="Component" required>
			</li>
			<br>
			<li>
				<input type="submit" align="center" value="Submit" >
			</li>
</ul>

 </fieldset>
</form>

</div>
</body>
</html>