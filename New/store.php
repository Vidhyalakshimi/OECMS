<?php
session_start();

$mysqli = new mysqli("127.0.0.1","root","","oecms",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if

//if the role variable is set, an admin is being created or else its a normal user

$username = $_POST["username"];
$pass = $_POST["password"];
$x=0;
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
       if( !strcmp($username,$row["username"]) && !strcmp($pass,$row["pass"]))
       {
       	$x++;
       	break;
       } 
    }
}
$_SESSION["id"]= $row["username"];
if ($x) {
    if(!strcmp($row["role"], "user"))
    {
    	header("Location: form.php");
    }
    else
    {
    	header("Location: index1.php");
    }
}
else

echo "Invalid login!!";


?>
