<html>
 <head>
  <style>
    *{padding: 0; margin: 0; box-sizing: border-box;}
	body{
	  line-height: 1.5;
	  font-family: 'poppins', sans-serif;
	  
	}
	header{
	  width: 100%;
	  height: 100vh;
	  background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url('Optimized-Illustration-from-Adobe-Stock-for-ITC-Post-on-AI-in-Game-Development-scaled.jpeg');
	  background-size: cover;
	  font-family: sans-serif;
	}
	
	nav{
	  max-width: 100%;
	  height: 100px;
	  color: white;
	  display: flex;
	  justify-content: space-around;
	  align-items: center;
	  padding-top: 30px;
	}
	.logo{
	  font-size: 2em;
	  letter-spacing: 2px;
	  font-family: 'Courier New', Courier, monospace;
	}
	.menu a{
	  text-decoration: none;
	  color: white;
	  padding: 10px 20px;
	  font-size: 20px;
	  position: relative;
	  font-family:Verdana, Geneva, Tahoma, sans-serif;
	}
	.menu a:before{
	  content: '';
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 0%;
	  height: 100%;
	  border-bottom: 2px solid indianred;
      transition: 0.4s linear;	  
	}
	.menu a:hover:before{
	  width:90%;
	  transition: 0.4s;
	}
	.reg a{
	  text-decoration: none;
	  color: white;
	  padding: 10px 20px;
	  font-size: 20px;
	  background: indianred;
	  border-radius: 8px;
	  transition: 0.4s;
	}
	.reg a:hover{
	  background: transparent;
	  border:1px solid indianred;
	}
	.h-txt{
	  max-width: 650px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%,-50%);
	  text-align: center;
	  color: white;
	}
	.h-txt span{
	  letter-spacing: 5px;
	  
	}
	.h-txt h1{
	  font-size:3.5em;
	  margin-bottom: 10px;
	}
	form{
	
	}
	button{
		text-decoration: none;
	  background-color: indianred;
	  color: white;
	  padding: 10px 20px;
	  letter-spacing: 5px;
	  transition: 0.4s;
	  margin: 50px;
	}
	.h-txt a{
	  text-decoration: none;
	  background: indianred;
	  color: white;
	  padding: 10px 20px;
	  letter-spacing: 5px;
	  transition: 0.4s;
	  margin: 50px;
	}
	.h-txt a:hover{
	  background: transparent;
	  border: 1px solid indianred;
	}
	.container{
	  max-width: 1170px;
	 
	  margin:auto;
	}
	.row{
	  display: flex;
	  flex-wrap: wrap;
	}
	ul{
	  list-style: none;
	}
	.footer{
	  background-color: #24262b;
	  padding: 70px 0;
	}
	.footer-col{
	  width: 25%;
	  padding: 0 15px;
	}
	.footer-col h4{
	  font-size: 18px;
	  color: #ffffff;
	  text-transform: capitalize;
	  margin-bottom: 35px;
	  font-weight: 500;
	  position: relative;
	  
	}
	.footer-col h4::before{
	  content: '';
	  position: absolute;
	  left: 0;
	  bottom: -10px;
	  background-color: #e91e63;
	  height: 2px;
	  box-sizing: border-box;
	  width: 50px;
	}
	.footer-col ul li:not(:last-child){
	  margin-bottom: 10px;
	}
	.footer-col ul li a{
	  font-size: 16px;
	  text-transform: capitalize;
	  color: #ffffff;
	  text-decoration: none;
	  font-weight: 300;
	  color: #bbbbbb;
	  display: block;
	  transition: all 0.3s ease;
	}
	.footer-col ul li a:hover{
	  color: #ffffff;
	  padding-left: 8px;
	}
	.footer-col .social-links a{
	  display: inline-block;
	  height: 40px;
	  width: 40px;
	  background-color: rgba(255,255,255,0.2);
	  margin: 0 10px 10px 0;
	  text-align: center;
	  line-height: 40px;
	  border-radius: 50%;
	  color: #ffffff;
	  transition: all 0.5s ease;
	}
	.footer-col .social-links a:hover{
	  color: #24262b;
	  background-color: #ffffff;
	}
	
	@media(max-width: 767px){
	  .menu{
	    width: 50%;
		margin-top: 70px;
		margin-bottom: 30px;
	  }
	}
	@media(max-width: 574px){
	  .menu{
	    width: 100%;
	  }
	}
	@media(max-width: 767px){
	  .footer-col{
	    width: 50%;
		margin-bottom:30px;
	  }
	}
	@media(max-width: 574px){
	  .footer-col{
	    width: 100%;
	  }
	}
  </style>
 </head>
  <body>
   <header>
     <nav>
	   <div class="logo">
	      Online <br> ChatRoom
	   </div>
	   <div class="menu">
	      <a href="#">Home</a>
		  <a href="#">About</a>
		  <a href="#">Contact</a>
	   </div>
	   
	 </nav>
	 <section class="h-txt">
	    <span>Enjoy</span>
		<h1>Online Chat Room</h1>
		<p style="width: 500px;">
			hey there, chat with your friends 
			without worring about the chat logs.
			 Now you can freely chat using our platform.</p>
		<br>
		<form action="claim.php" method="POST">

			<input style="margin: 30px;width: 300px;height: 30px;border-radius: 10px;" type="text" name="room" id="">
		    <input type="submit" value="lets chat">
		</form>
		<br style="">
		
	 </section>
	 
   </header>
   <footer class="footer">
	    <div class="container">
		  <div class="row">
		    <div class="footer-col">
			  <h4>company</h4>
			  <ul>
			    <li><a href="#">about us</a></li>
				<li><a href="#">our services</a></li>
				<li><a href="#">privacy policy</a></li>
				<li><a href="#">affiliate program</a></li>
			  </ul>
			</div>
			<div class="footer-col">
			  <h4>get help</h4>
			  <ul>
			    <li><a href="#">FAQ</a></li>
				<li><a href="#">shipping</a></li>
				<li><a href="#">returns</a></li>
				<li><a href="#">order status</a></li>
				<li><a href="#">payment options</a></li>
			  </ul>
			</div>
			<div class="footer-col">
			  <h4>online shop</h4>
			  <ul>
			    <li><a href="#">watch</a></li>
				<li><a href="#">bag</a></li>
				<li><a href="#">shoes</a></li>
				<li><a href="#">dress</a></li>
			  </ul>
			</div>
			<div class="footer-col">
			  <h4>follow us</h4>
			  <div class="social-links">
			    <a href="#"><img src="insta1.jpg" width=50px height=50px ></a>
				<a href="#"><img src="linkedln.jpg" width=50px height=50px ></a>
	
				<a href="#"><img src="facebook.jpg" width=50px height=50px ></a>
				<a href="#"><img src="twitter.jpg" width=50px height=50px ></a>
				<a href="#"><img src="whatsapp.jpg" width=50px height=50px ></a>
			  </ul>
			</div>
		  </div>
		</div>
   </footer>
 </body>
</html>