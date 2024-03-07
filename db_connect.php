<?php
// creating database connection

$conn = mysqli_connect("localhost","root","","chatroom");
//checking connection

if(!$conn){
	die("failed to connect". mysqli_connect_error());
}

?>