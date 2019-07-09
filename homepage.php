<?php
	error_reporting(0);
	session_start();
	include 'manage_homepage.php';
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Okolea homepage</title>
			<meta name = "viewport" content = "width = device - width , initial - scale = 1.0" />
			<link href = "my-styles.css" rel = "stylesheet" type = "text/css"/>
			<link rel="stylesheet" href="css/all.min.css"/>
            <!--<link rel="stylesheet" type="text/css" href="footer-styles.css"/>-->
			<script src = "jquery-3.4.1.min.js"></script>

			<!--footer styles-->
			<style type = "text/css">
#container{
    padding: 0px; 
    margin:0px;
    height:200px;
    width:100%;
    position: relative;
    top:100px;
	margin-top:300px;
    
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
			
			<style type = "text/css">
					#xbutton{
						margin-top: 115px;
						margin-left:450px;
						margin-right:530px;
						color:#fff;
						text-transform: uppercase;
						display: flex;
						height: 35px;
						padding: 0px;
					}
					#xbutton button{
						position: relative;
						border-radius: 100px;
						background-color: rgba(192, 192, 192, .8);
						font-size: 15px;
						text-align: center;
						color: maroon;
						border: 3px solid maroon;
						cursor: pointer;
						width: 35px;
						height: 35px;
						display: none;
						float: right;
					}
					
					#xbutton button:hover{
						background-color: maroon;
						opacity: 0.8;
						font-weight: bold;
						color: #fff;
						border: 3px solid maroon;
						font-size: 16px;
					}
					
					form{
						margin-top: 50px;
						transition:all 4s ease-in-out;
					}
					.info{
						width:600px;
						background:rgba(236, 236, 243, 0.6);
						border:none;
						outline:none;
						color:black;
						font-size:18px;
						margin-bottom: 16px;
						border-bottom: 3px solid maroon;
						border-radius:5px;
					}
					input{
						height:45px;
					}
					form .submit{
						background: rgb(143, 43, 43);
						border-color:transparent;
						color:white;
						font-size:20px;
						font-weight:bold;
						letter-spacing:2px;
						height:50px;
						margin-top: 20px;

					}
					form .submit:hover{
						background-color:green;
						opacity:0.8;
						cursor:pointer;
					}
					h1 .userdetails{
						float: left;
						height: 60px;
						width: 50px;
						font-size: 18px;
					}
					::placeholder{/*Chrome,Firefox,Opera,Safari 10.1+*/
						color:grey;
						opacity:0.7;/* 1 For firefox since it adds a lower opacity automatically*/
					}
					:-ms-input-placeholder{/*Internet explorer*/
						color:grey;
						opacity:0.7;
					}
					::-ms-input-placeholder{/*Microsoft Edge*/
						color:grey;
						opacity:0.7;
					}
					
			</style>
		</head>
		<body>
			<!--decide the view to display-->
			<?php
				//check for an admin log in:
				if(isset($_SESSION['admin_id'])){
					echo'<h1 style = "background-color:white;opacity:0.7;text-align:center;padding-top:0px;margin:0px;margin-bottom:1px;color:maroon;text-shadow:0.5em;">';
					echo '<div class = "userdetails">';
							//distinguish an admin  from a user 
								echo '<p style = "color: red; font-weight: bold;"> ADMIN</p><br/>';
								echo '<p style = "color:green; font-size: 30px; text-transform: capitalize;">'.strtolower($_SESSION['last_name']).'</p>';
					echo '</div>';
					echo '<img id = "logo" src = "moilogo.png" alt = "logo" width = "50" height = "50" style = "position:relative;left:1px;top:12px;"/><p class = "okolea_title">OKOLEA PLATFORM MOI UNIVERSITY</p></h1>';
					echo '<nav class="menu">';
						echo '<ul>';
							echo '<li><a href = "homepage.php">Home</a></li>';
							echo '<li><a>Schools</a>';
								echo '<ul class="hidden">';
									echo '<li><a href="engineering.php">Engineering</a></li>';
									echo '<li><a href="biological.php">Biological</a></li>';
								echo '</ul></li>';
							echo '<li><a href="aboutUs.php">AboutUs</a></li>';
							echo '<li><a href="contactUs.php">ContactUs</a></li>';
							//add admin upload feature
								echo '<li><a>Uploads</a>';
									echo '<ul class="hidden">';
										echo '<li><a href = "" id = "admin_upload">Upload</a></li>';
										echo '<li><a  href = "homepage.php?remove" id = "">Remove</a></li>';
										echo '<li><a href = "homepage.php?verify" id = "verify_upload">Verify</a></li>';
									echo '</ul></li>';
							echo '<li><a href = "logout.php">Log out</a>';
						echo '</ul>';
						echo '<form class="search-form" action="homepage.php"method="POST">';
							echo '<input id = "search" type = "text" placeholder = "search"name="key"/>';
							echo '<button type="submit"name="search">Search</button>';
						echo '</form>';
					echo '</nav>';
					
					//errors show here
					include 'errorDisplayHomepage.php';
					
					echo '<div id = "xbutton">';
						echo '<button type = "button" id = "remove_form">X</button>';
					echo '</div>';
					echo '<header id = "switch">';
					echo '</header>';				
					echo '<div class = "logs" style = "display: none">';
					echo '</div>';
				}else if(isset($_SESSION['adm_no'])){//page display when a non-admin user logs in:
					echo'<h1 style = "background-color:white;opacity:0.7;text-align:center;padding-top:0px;margin:0px;margin-bottom:1px;color:maroon;text-shadow:0.5em;">';
					echo '<div class = "userdetails">';
							//distinguish an admin  from a user 
								echo '<p style = "color: red; font-weight: bold"> USER</p><br/>';
								echo '<p style = "color:green; font-size: 30px;">'.strtolower($_SESSION['user_name']).'</p>';
					echo '</div>';
					echo '<img id = "logo" src = "moilogo.png" alt = "logo" width = "50" height = "50" style = "position:relative;left:1px;top:12px;"/><p class = "okolea_title">OKOLEA PLATFORM MOI UNIVERSITY</p></h1>';
					echo '<nav class="menu">';
						echo '<ul>';
							echo '<li><a href = "homepage.php">Home</a></li>';
							echo '<li><a>Schools</a>';
								echo '<ul class="hidden">';
									echo '<li><a href="engineering.php">Engineering</a></li>';
									echo '<li><a href="biological.php">Biological</a></li>';
								echo '</ul></li>';
							echo '<li><a href="aboutUs.php">AboutUs</a></li>';
							echo '<li><a href="contactUs.php">ContactUs</a></li>';
							//add user suggest upload feature
							echo '<li><a href = "" id = "user_suggest">Suggest Upload</a></li>';
							echo '<li><a href = "logout.php">Log out</a>';
						echo '</ul>';
						echo '<form class="search-form" action="homepage.php"method="POST">';
							echo '<input id = "search" type = "text" placeholder = "search"name="key"/>';
							echo '<button type="submit"name="search">Search</button>';
						echo '</form>';
					echo '</nav>';
					
					//errors show here
					include 'errorDisplayHomepage.php';
			
					echo '<div id = "xbutton">';
						echo '<button type = "button" id = "remove_form">X</button>';
					echo '</div>';
					echo '<header id = "switch">';
					echo '</header>';
					echo '<div class = "logs" style = "display: none">';
					echo '</div>';
				}else{//page display when a new non member user visits the website:
					echo'<h1 style = "background-color:white;opacity:0.7;text-align:center;padding-top:0px;margin:0px;margin-bottom:1px;color:maroon;text-shadow:0.5em;">';
					echo '<img id = "logo" src = "moilogo.png" alt = "logo" width = "50" height = "50" style = "position:relative;left:1px;top:12px;"/><p class = "okolea_title">OKOLEA PLATFORM MOI UNIVERSITY</p></h1>';
					echo '<nav class="menu">';
						echo '<ul>';
							echo '<li><a href = "homepage.php">Home</a></li>';
							echo '<li><a href="aboutUs.php">AboutUs</a></li>';
							echo '<li><a href="contactUs.php">ContactUs</a></li>';
							//allow new users to sign in or member users to log in
							echo '<li><a>Logs</a>';
								echo '<ul class="hidden">';
									echo '<li><a href = "" id = "loginshow">Log in</a></li>';
									echo '<li><a  href = "" id = "signinshow">Sign up</a></li>';
									echo '<li><a href = "" id = "adminshow" style = "color: red;">Admin</a></li>';
								echo '</ul>';
							echo '</li>';
						echo '</ul>';
					echo '</nav>';

					
					//errors show here
					include 'errorDisplayHomepage.php';
					
					echo '<div id = "xbutton">';
						echo '<button type = "button" id = "remove_form">X</button>';
					echo '</div>';
					
					echo '<header id = "switch">';
					echo '</header>';
					echo '<div class = "logs" style = "display: none;">';
					echo '</div>';
				}
			?>
			<!--<label for ="show-menu"class="show-menu">Menu</label>-->
			<!--<input type = "checkbox" id = "show-menu" role = "button"/>-->
			
			<!--show the files-->
			<?php
				//NORMAL MODE DISPLAY
				if(isset($_SESSION['admin_id']) or isset($_SESSION['adm_no'])){
					if(!isset($all_files_verify) and !isset($all_files_mine)){
								echo '<div class = "files">';
										
										if(!$all_files_data){
											echo '<div class = "gooderror">';
												echo '<p>There are no uploads yet!</p>';
												echo '<button class = "errorremove">X</button>';
											echo '</div>';
										}
										foreach($all_files_data as $single_file_data){
										$file_id = $single_file_data["file_id"];
										$file_name = $single_file_data["file_name"];
										$file_description = $single_file_data["description"];
										$course_code = $single_file_data["unit"];
										$year = $single_file_data["year"];
										$file_name_parts = explode('.', $file_name);
										$file_extension = strtolower(end($file_name_parts));
										
										
										if($file_extension == 'txt'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reptxt.png" class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
										}else if($file_extension == 'pdf'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reppdf.jpg"  class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
										}else if($file_extension == 'docx'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/repdocx.png"  class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
											}else if($file_extension == 'png' or $file_extension == 'jpg' or $file_extension == 'jpeg'){
												echo '<div class = "file_container">';
												echo '<image src = "pictures/'.$file_name.'" class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year: '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
											}
										
									}
								echo '</div>';
					}
						//VERIFY MODE DISPLAY
						if(isset($all_files_verify)){
								echo '<div class = "files">';
										
										if(!$all_files_verify){
											echo '<div class = "gooderror">';
												echo '<p>There are no suggestions yet!</p>';
												echo '<button class = "errorremove">X</button>';
											echo '</div>';
										}
										foreach($all_files_verify as $single_file_data){
										$file_id = $single_file_data["file_id"];
										$file_name = $single_file_data["file_name"];
										$file_description = $single_file_data["description"];
										$file_name_parts = explode('.', $file_name);
										$file_extension = strtolower(end($file_name_parts));
										
										if($file_extension == 'txt'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reptxt.png" class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_approve='.$file_id.'" class = "approve_link">Approve</a>|';
												echo '<a href = "homepage.php?file_disapprove='.$file_id.'" class = "disapprove_link">Disapprove</a>';
											echo '</div>';
										}else if($file_extension == 'pdf'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reppdf.jpg"  class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_approve='.$file_id.'" class = "approve_link">Approve</a>|';
												echo '<a href = "homepage.php?file_disapprove='.$file_id.'" class = "disapprove_link">Disapprove</a>';
											echo '</div>';
										}else if($file_extension == 'docx'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/repdocx.png"  class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_approve='.$file_id.'" class = "approve_link">Approve</a>|';
												echo '<a href = "homepage.php?file_disapprove='.$file_id.'" class = "disapprove_link">Disapprove</a>';
											echo '</div>';
											}else if($file_extension == 'png' or $file_extension == 'jpg' or $file_extension == 'jpeg'){
												echo '<div class = "file_container">';
												echo '<image src = "pictures/'.$file_name.'" class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_approve='.$file_id.'" class = "approve_link">Approve</a>|';
												echo '<a href = "homepage.php?file_disapprove='.$file_id.'" class = "disapprove_link">Disapprove</a>';
											echo '</div>';
											}
										
									}
								echo '</div>';
						}
						
						//REMOVE MODE DISPLAY
						if(isset($all_files_mine)){
								echo '<div class = "files">';
										if(!$all_files_mine){
											echo '<div class = "gooderror">';
												echo '<p>You do not have any uploads</p>';
												echo '<button class = "errorremove">X</button>';
											echo '</div>';
										}
										foreach($all_files_mine as $single_file_data){
										$file_id = $single_file_data["file_id"];
										$file_name = $single_file_data["file_name"];
										$file_description = $single_file_data["description"];
										$file_name_parts = explode('.', $file_name);
										$file_extension = strtolower(end($file_name_parts));
										
										if($file_extension == 'txt'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reptxt.png" class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_remove='.$file_id.'" class = "approve_link">Delete</a>';
											echo '</div>';
										}else if($file_extension == 'pdf'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reppdf.jpg"  class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_remove='.$file_id.'" class = "approve_link">Delete</a>';
											echo '</div>';
										}else if($file_extension == 'docx'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/repdocx.png"  class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_remove='.$file_id.'" class = "approve_link">Delete</a>';
											echo '</div>';
											}else if($file_extension == 'png' or $file_extension == 'jpg' or $file_extension == 'jpeg'){
												echo '<div class = "file_container">';
												echo '<image src = "pictures/'.$file_name.'" class = "file_image"><br/>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?fileviewed_id='.$file_id.'" class = "download_link">View</a>|';
												echo '<a href = "homepage.php?file_remove='.$file_id.'" class = "approve_link">Delete</a>';
											echo '</div>';
											}
										
									}
								echo '</div>';
						}
				}
			?>
			<!--show the footer-->
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
				echo '<li><a href = "" id = "loginfooter">Log In</a></li>';
				echo '<li><a href = "" id = "signinfooter">Sign Up</a></li>';
				echo '<li><a href = "" id = "adminfooter">Admin Login</a></li>';
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
		</body>
	</html>

<script>

	//ensure that all jquery code runs upon completion of loading of the page:
	$(document).ready(function() {
			//dictate what happens when an admin clicks on the upload link
			$("#admin_upload").click(function() {
				//show the upload form when this is clicked
				$(".file_container").hide();
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("uploadsTitle.php");
				$(".logs").fadeIn(1000);
				$(".logs").load("uploadsform.php");
				return false;
			});
			
			//dictate what happens when the user clicks on the suggest upload link
			$("#user_suggest").click(function() {
				$(".file_container").hide();
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("suggestionTitle.php");
				$(".logs").fadeIn(1000);
				$(".logs").load("suggestionForm.php");
				return false;
			});
			
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
			
			//dictate what happens when user clicks on the log in link
			$("#loginfooter").click(function() {
				//show the log in sign in button when this link is clicked
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("loginSignupButtonL.php");
				$(".logs").fadeIn(2000);
				$(".logs").load("loginForm.php");
				window.scrollTo(0,0);
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
			
			//dictate what happens when the user clicks on the sign in link
			$("#signinfooter").click(function() {
				//show the log in sign in button when this link is clicked
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("loginSignupButtonS.php");
				$(".logs").fadeIn(2000);
				$(".logs").load("signinForm.php");
				window.scrollTo(0,0);
				return false;
			});
			
			//dictate what happens when the user clicks on the admin link
			$("#adminshow").click(function() {
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("adminTitle.php");
				$(".logs").fadeIn(1000);
				$(".logs").load("adminLoginForm.php");
				return false;
			});
			
			//dictate what happens when the user clicks on the admin link
			$("#adminfooter").click(function() {
				$("#remove_form").show();
				$("#switch").fadeIn(2000);
				$("#switch").load("adminTitle.php");
				$(".logs").fadeIn(1000);
				$(".logs").load("adminLoginForm.php");
				window.scrollTo(0,0);
				return false;
			});
						
			//get the class of the close button in the log in sign in forms
			$("#remove_form").click(function() {
				//hide everything when this button is clicked
				$(".file_container").show();
				$(this).hide();
				$(".logs").fadeOut(500);
				$("#switch").fadeOut(500);
			})
			
			//get the class of the errordisplayremover
			$(".errorremove").click(function() {
				$(this).hide();
				$(".baderror").fadeOut(500);
				$(".gooderror").fadeOut(500);
			});
	});
</script>
