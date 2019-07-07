<style type = "text/css">
#container{
    padding: 0px; 
    margin:0px;
    height:200px;
    width:100%;
    position: relative;
    top:100px;
	margin-top: 250px;
    
}
#upper-footer{
    background-color: black;
    opacity:0.9;
    height:430px;
    margin-bottom: 0px;
    position: relative;
    top:60px;
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
}
#lower-footer{
    background-color:black;
    opacity:1;
    color:white;
    font-weight: bolder;
    text-align:center;
    width: 100%;
    float: left;
    margin:0px;
    height:30px;
    position: relative;
    top:60px;
    
}
.footer-row4{
    color:white;
    height: 100%;
    width:25%;
    padding: 30px;
    margin:0px;
    float:left;
    position:relative;
    font-size:20px;
    opacity:.7;
}
.footer-row1{
    color:white;
    height: 100%;
    width:25%;
    padding: 30px;
    margin:0px;
    float:left;
    position:relative;
    font-size:20px;
    opacity:.7;
}
.footer-row2{
    color:white;
    height: 100%;
    width:25%;
    padding: 30px;
    margin:0px;
    float:left;
    position:relative;
    font-size:25px;
    opacity:.7;
}
.footer-row3{
    color:white;
    height: 100%;
    width:25%;
    padding: 30px;
    margin:0px;
    float:left;
    position:relative;
    font-size:18px;
    opacity:.7;
}
.footer-row2 ul{
    list-style-type: none;
}
.footer-row3 ul{
    list-style-type: none;
}
.footer-row3 ul li{
    height: 60px;
}
.footer-row3 ul li a{
    color: white;
	text-decoration: none;
}
.footer-row2 ul li a{
    padding: 20px;
    margin:20px;
}
.footer-row2 ul li{
    border-bottom: 2px solid grey;
}
.footer-row2 ul li:hover{
    border-radius:10px;
}
.footer-row2 ul li a:hover{
    font-size: 30px;
    padding: 0px;
    padding-left: 40px;
    padding-right: 20px;
    color:white;
    font-weight: bolder;
    opacity: 1;
}
#footer-button{
    background-color:maroon;
    color:white;
    width:100px;
    height:30px;
    border-radius: 0px 5px 5px 0px;
    text-align: center;
    border:none;
    font-size: 18px;
    position: relative;
    top:2px;
}
#footer-button:hover{
    background-color: green;
    opacity:0.9;
}
 #upper-footer h4{
    font-size: 30px;
    font-weight: bold;
    padding-bottom: 20px;
    border-left:10px solid maroon;
    padding-left: 3px;
    margin-bottom: 40px;
}
#upper-footer h3{
    font-size:40px;
    font-weight:bolder;
    padding-bottom: 20px;
    color:white;
    border-left:10px solid maroon;
    padding-left: 3px;
}
#footer-input{
    background-color: white;
    opacity:0.8;
    border:1px solid maroon;
    border-radius:5px 0px 0px 5px;
    width:67.5%;
    height:30px;
    padding-left: 20px;
}
#footer-form{
    padding-top: 20px;
}
#upper-footer div:hover{
    opacity:1;
}
 #upper-footer p, #upper-footer ul{
    opacity:0.7;
}
.footer-row2 a, .footer-row3 a{
	 color: white;
	text-decoration: none;
}
</style>

<div id="container">
<div id="upper-footer">
    <div class="footer-row1">
<h3>Okolea Platform Moi University</h3>
<p>Okolea Platform is a site where you can get access to all the learning materials and resources,
    categorised per school and course.You can share the resources you think will benefit other students and at the 
    same time be able to download uploaded files. </p>
    </div>
    <div class="footer-row2">
        <h4>Important Links</h4>
        <ul class="important-links">
            <li><a href = "homepage.php">Home</a></li>
			<?php
				if(isset($_SESSION['admin_id']) or isset($_SESSION['adm_no'])){
				echo '<li><a href = "biological.php">Biological</a></li>';
				echo '<li><a href = "engineering.php">Engineering</a></li>';
				}
			?>
            <li><a href = "aboutUs.php">About Us</a></li>
            <li><a href = "contactUs.php">Contact us</a></li>
			<?php
			if(!isset($_SESSION['admin_id']) and !isset($_SESSION['adm_no'])){
				echo '<li><a href = "" id = "loginshow">Log In</a></li>';
				echo '<li><a href = "" id = "signinshow">Sign Up</a></li>';
				echo '<li><a href = "" id = "adminshow">Admin Login</a></li>';
			}
			elseif(isset($_SESSION['admin_id']) or isset($_SESSION['adm_no'])){
				echo '<li><a href = "logout.php">Log Out</a></li>';
			}
			?>
        </ul>
    </div>
    <div class="footer-row3">
       <h4>Contact Us</h4> 
       <ul>
           <li class="icons"><a href="#"><i id="fab" class="fab fa-facebook fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="fab fa-twitter fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="fab fa-instagram fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="far fa-envelope fa-2x" style="color:white;"></i>&nbsp okolea_mu@gmail.com</a></li>
           <li class="icons"><a href="#"><i class="fas fa-phone fa-2x" style="color:white;"></i></a>&nbsp 0705971336</li>
       </ul>
    </div>
    <div class="footer-row4">
       <h4>Our News Letter</h4> 
       <p>Let us email you all our news just to ensure you don't miss being notified of any changes or developements.</p>
       <form action="" method="POST" id = "footer-form">
           <input type="email"name="email"placeholder="Your email" id = "footer-input"><button id="footer-button" type="submit">Subscribe</button>
       </form>
    </div>
</div>
<div id="lower-footer" style="text-align:center;">Copyright &copy;Okolea Platform 2019</div>
</div>

<script>
	//ensure all the jquery code runs on complete load of the page
	$(document).ready(function() {
		//dictate what happens when user clicks on the log in link
			$("#loginshow").click(function() {
				//show the log in sign in button when this link is clicked
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("loginSignupButtonL.php");
				$(".logs").fadeIn(2000);
				$(".logs").load("loginForm.php");
				return false;
			});
			
			//dictate what happens when the user clicks on the sign in link
			$("#signinshow").click(function() {
				//show the log in sign in button when this link is clicked
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("loginSignupButtonS.php");
				$(".logs").fadeIn(2000);
				$(".logs").load("signinForm.php");
				return false;
			});
	});
</script>
