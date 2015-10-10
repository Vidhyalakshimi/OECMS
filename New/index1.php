<?php
session_start();
?>


<html>
<script src="jquery1.js"></script>
<script src="jquery.js"></script>

<head>
<style>
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:white;
            font-size:16px;
            font-weight:600;
            color:DeepSkyBlue;
            transition:all linear 0.15s;
        }
 
        .tab-links a:hover {
            background:white;
            text-decoration:none;
        }
 
    li.active a, li.active a:hover {
        background:black;
        color:DeepSkyBlue;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:black;
    }
 
        .tab {
            display:none;

        }
 
        .tab.active {
            display:block;
        }

table#t01
{
width:100%;
background-color: black;
font-family: 'Exo', sans-serif;
	font-size: 15px;
	font-weight: 200;
color:DeepSkyBlue;
 border: 1px grey;
 padding: 15px;
text-align: left;
height:50px;

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
</style>
	<title>Complaint list</title>
</head>
<body>

<div class="body">
<br>
<br>
<h1 align="center"><font face="cooper black"><b>Online E-Learning Complaint Management System</b></font></h1>
<p align="right"><a href="login.html">Logout</a></p>
<br>
<br>

<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Pending complaints</a></li>
        <li><a href="#tab2">Rectified complaints</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <table id=t01 border="13">
            <tr>
            <th>Complaint ID</th>
            <th>Faculty</th>
            <th>Complaint date</th>
            <th>Defect</th>
            <th>Room number</th>
            </tr>
          <tr>
          
<?php
     $mysqli = new mysqli("127.0.0.1","root","","oecms",3306);   
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
    
    $sql="select * from complaint;";
    $result=$mysqli->query($sql);

    if($result->num_rows>0)
    {
    while ($row = $result->fetch_assoc())
    {   if($row["status"]=="P")
        {
        echo "<tr><td>".$row["complaint_id"]."</td>";
        echo "<td>".$row["staff_id"]."</td>";
        echo "<td>".$row["complaint_date"]."</td>";
        echo "<td>".$row["defect"]."</td>";
        echo "<td>".$row["room_no"]."</td></tr>";
        }
    }
    }


?>
</td><tr>
</table>
          
        </div>
 
        <div id="tab2" class="tab">
            <table id=t01 border="13">
            <tr>
            <th>Complaint ID</th>
            <th>Staff</th>
            <th>Complaint date</th>
            <th>Rectification date</th>
            <th>Status</th>
            <th>Defect</th>
            <th>Rectification report</th>
            <th>Room</th>
             </tr>
          <tr>
 <?php
     $mysqli = new mysqli("127.0.0.1","root","","oecms",3306);   
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
    
    $sql="select * from complaint;";
    $result=$mysqli->query($sql);

    if($result->num_rows>0)
    {
    while ($row = $result->fetch_assoc())
    {   if($row["status"]=="R")
        {
        echo "<tr><td>".$row["complaint_id"]."</td>";
        echo "<td>".$row["staff_id"]."</td>";
        echo "<td>".$row["complaint_date"]."</td>";
        echo "<td>25-03-2015</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>".$row["defect"]."</td>";
        echo "<td>Bought a new component</td>";
        echo "<td>".$row["room_no"]."</td></tr>";
        }
    }
    }


?>
</td><tr>
</table>
            
        </div>
 
    </div>
</div>
</body>
</html>