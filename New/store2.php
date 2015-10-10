<?php
session_start();

$mysqli = new mysqli("127.0.0.1","root","","oecms",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if

//if the role variable is set, an admin is being created or else its a normal user

$user= $_SESSION["id"];
$rno = $_POST["roomnumber"];
$complaint = $_POST["complaint"];
$component = $_POST["comp"];



$insert = "insert into complaint (complaint_id, component_name, complaint_date, rectify_date, room_no, staff_id,status,defect, report) values ('','$component','25-03-2015','','$rno','$user','P','$complaint','')";

if ($mysqli->query($insert)) 
{
    echo "Complaint lodged successfully :) <br> Click <a href=\"login.html\">here</a> to sign out";
} else {
    echo "Error: " . mysqli_error($mysqli);
    echo "Complaint lodge Failed :(";
}

$mysqli->close();

?>