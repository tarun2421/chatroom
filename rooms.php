<!DOCTYPE html>
<html>

<head>
  <title>Chat Room</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      margin: 0 auto;
      max-width: 800px;
      padding: 0 20px;
    }

    .container {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    nav {
      max-width: 100%;
      height: 150px;
      color: white;
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding-top: 30px;
      border-color: #ccc;
      background-color: #ddd;
    }

    .logo {
      font-size: 2em;
      letter-spacing: 2px;
      color: black;
      font-family: 'Courier New', Courier, monospace;
    }

    .menu a {
      text-decoration: none;
      color: black;
      padding: 10px 20px;
      font-size: 20px;
      position: relative;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .menu a:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      border-bottom: 2px solid indianred;
      transition: 0.4s linear;
    }

    .menu a:hover:before {
      width: 90%;
      transition: 0.4s;
    }

    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }

    .container::after {
      content: "";
      clear: both;
      display: table;
    }

    .container img {
      float: left;
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
    }

    .container img.right {
      float: right;
      margin-left: 20px;
      margin-right: 0;
    }

    .time-right {
      float: right;
      color: #aaa;
    }

    .time-left {
      float: left;
      color: #999;
    }

    .anyclass {
      height: 350px;
      overflow-y: scroll;
    }
  </style>
</head>

<body>
  <nav>
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

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">

  </script>

  <script>
    
    function runFunction(){
      $.post("htcont.php",{room:'<?php echo $roomname ?>'},
      function (data,status){
        document.getElementByIdClassName('anyClass')[0].innerHTML = data;
      }
      
      )
    }
    setInterval(runFunction, 1000);

    $(document).ready(function() {
      $("#submitmsg").click(function() {
        var clientmsg = $("#usermsg").val();
        $.post(
          "postmsg.php", {
            text: clientmsg,
            room: $('#roomname').text(),
            ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'
          },
          function(data, status) {
            $(".anyclass").append(data);
          }
        );
        $("#usermsg").val("");
        return false;
      });

      $("#usermsg").keypress(function(event) {
        if (event.which === 13) {
          $("#submitmsg").click();
        }
      });

      // Assuming you have a form with id="chat-form" and an input with id="text"
      $('#chat-form').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.post('your_server_script.php', formData, function(response) {
          $('#chat-container').append(response); // Append the newly inserted message to the chat container
          $('#text').val(''); // Clear the input field
        });
      });


      setInterval(loadChat, 1000);
    });

    function loadChat() {
      var roomname = $('#roomname').text();
      $.post(
        "getmsg.php", {
          room: roomname
        },
        function(data, status) {
          $(".anyclass").html(data);
        }
      );
    }
  </script>
</body>

</html>