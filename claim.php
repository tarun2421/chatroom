<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>chatroom</title>
</head>
<body>
  <?php
$room = $_POST['room'];


//checking for string size
if(strlen($room)>20 or strlen($room)<2)
{
	$message = "Please choose a name between 2 to 20 characters";
	echo '<script language="javascript"> '; 
    echo 'alert("'.$message.'") ;';
    echo 'window.location="http://localhost/chatroom";';
	echo '</script> ';
}

//checking for alphanumeric
else if(!ctype_alnum($room))
{
	$message = "Please choose a aphanumeric room name";
	echo '<script language="javascript"> '; 
    echo 'alert("'.$message.'") ;';
    echo 'window.location="http://localhost/chatroom";';
	echo '</script> ';
}

else{
	//connecting to the database
	include 'db_connect.php';
}
// check if room is already exists

 $sql = "SELECT * FROM rooms WHERE roomname = '$room'";

 $result = mysqli_query($conn, $sql);
 
 if($result)
 {
 	if(mysqli_num_rows($result) > 0)
 	{
		$message = "Please choose a different room name. This room is already claimed";
		echo '<script language="javascript"> '; 
		echo 'alert("'.$message.'") ;';
		echo 'window.location="http://localhost/chatroom";';
		echo '</script> ';
 	}
 	else 
 	{
 		
           

			$sql = "INSERT INTO rooms (roomname,stime) VALUES ('$room','CURRNT_TIMESTAMP')";
           if(mysqli_query($conn,$sql)){
           	$message = "your room is ready and you can chat now!";
			echo '<script language="javascript"> '; 
		    echo 'alert("'.$message.'") ;';
		    echo 'window.location="http://localhost/chatroom/rooms.php?roomname=' . $room . ' ";';
			echo '</script> ';
           }
 	}
 }
else{
	echo "ERROR: ". mysqli_error($conn);
}

?>
</body>
</html>