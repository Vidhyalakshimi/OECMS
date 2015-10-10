<?php
session_start()
?>
<html>
<head>
	<title>Complaint form</title>
	<link rel="stylesheet" href="style1.css">
</head>

<body background=bg.png>

	<h1 align="center"><font face="cooper black"><b>Online E-Learning Complaint Management System</b> 
	<h2><?php 
 	echo "Welcome ".$_SESSION["id"]."!<br>";
	?></h2>	

	</font></h1>

	<section class="complaintform cf">

<form  name="complaint" action="./store2.php" method="post">
 <fieldset>
  <legend><h2><font color="#32CD32" face="Comic Sans MS">Fill the complaint form:</font></h2></legend>

<ul>
			<li>

				<label for="Room number"><b><h3>Room number</h3></b></label>
				<input type="text" name="room number" placeholder="Class room number" required>
			</li>
			<br>
			<li>
				<label for="Complaint"><b><h3>Complaint</h3></b></label>
				<textarea name="complaint" rows="10" cols="70" placeholder="Enter your complaint here"></textarea>
			</li>
			<br>
			<li>
				<label for="Component"><b><h3>Component</h3></b></label>					
 				<name="component">
				<select>
					<option value="Laptop">Laptop</option> 
					<option value="Projector">Projector</option> 
					<option value="Screen">Screen</option> 
					<option value="Remote">Remote</option> 
				</select>
			</li>
			<br>
			<li>
				<input type="submit" align="center" value="Submit" >
			</li>
</ul>

 </fieldset>
</form>
</section>
</body>

</html>