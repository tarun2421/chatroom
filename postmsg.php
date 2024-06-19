<?php
include 'db_connect.php';

        $msg = $_POST['text'];
        $room = $_POST['room'];
        $ip = $_POST['ip'];

        $sql = "INSERT INTO `msgs` (msg, room, ip, stime) VALUES ('$msg','$room','$ip', CURRENT_TIMESTAMP)";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
  

// Function to fetch the latest message for a specific room from database and return as HTML
// function fetchLatestMessage($conn, $roomname) {
//     $sql = "SELECT * FROM msgs WHERE room = ? ORDER BY stime DESC LIMIT 1";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $roomname);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($result && mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         echo '<div class="container">';
//         echo '<p>' . $row['msg'] . '</p>';
//         echo '<span class="time-right">' . date("H:i", strtotime($row['stime'])) . '</span>';
//         echo '</div>';
//     } else {
//         echo "Error: No messages found";
//     }
// }
?>
