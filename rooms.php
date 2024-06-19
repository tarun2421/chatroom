<!DOCTYPE html>
<html>

<head>
  <title>Chat Room</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav >
    <div class="logo">Online <br> ChatRoom</div>
    <div class="menu">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>
  </nav>

  <h2>Chat Messages - <span id="roomname"><?php echo isset($_GET['roomname']) ? $_GET['roomname'] : ''; ?></span></h2>

  <div class="container">
    <div class="anyclass">
      
      <!-- Chat messages will be displayed here -->
    </div>
  </div>

  <input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add message">
  <br>
  <button class="btn btn-default darker" name="submitmsg" id="submitmsg">Send</button>

  <script type="text/javascript" src="js/jquery-3.7.1.min.js">

  </script>

  <script type="text/javascript">

// cehcking for new message every 1 second
setInterval(runFunction, 1000);
function runFunction(){
  $.post("htcont.php", {room: '<?php echo $_GET['roomname']; ?>'},
    function(data,status){
      document.getElementsByClassName('anyclass')[0].innerHTML = data;
    }
  )
}

    document.getElementById("usermsg").focus();

var input = document.getElementById("usermsg");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});



// if user submits the form 
$("#submitmsg").click(function(){
    var clientmsg = $("#usermsg").val();
    $.post("postmsg.php", {
      text: clientmsg, 
      room: '<?php echo $_GET['roomname']; ?>', 
      ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'
    }, function(data, status){
      document.getElementsByClassName('anyclass')[0].innerHTML = data;
      $('#usermsg').val("");
    });
    return false;
  }); 
  </script>
</body>

</html>