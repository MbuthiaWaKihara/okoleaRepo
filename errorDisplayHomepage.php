<?php
	//These errors should all appear as a dynamic container, with its value changing based on the changing state of the homepage url
	
	//get the homepage url
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	//login errors
	if(strpos($url, "userdoesnotexist") == true){
		echo '<div class = "baderror">';
			echo '<p>User details entered do not match any member.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "passwordincorrect") == true){
		echo '<div class = "baderror" id = "refuseerror">';
			echo '<p>You entered a wrong password.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "login=success") == true){
		echo '<div class = "gooderror">';
			echo '<p>Welcome'.'  '.$_SESSION['first_name'].'  '.$_SESSION['last_name'].'</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}
	//signin errors
	elseif(strpos($url, "invalidinput") == true){
		echo '<div class = "baderror">';
			echo '<p>Use letters a-z/A-Z only in first name & last name.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "usernameexists") == true){
		echo '<div class = "baderror">';
			echo '<p>Sorry. Username is already taken.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "signup=success") == true){
		echo '<div class = "gooderror">';
			echo '<p>Sign Up successful! Please log in and begin the Okolea experience!</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "admintry")){
		echo '<div class = "baderror">';
			echo '<p>The admission number you entered belongs to an admin.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "weakpassword")){
		echo '<div class = "baderror">';
			echo '<p>Password must be at least 8 characters long.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "badconfirmation")){
		echo '<div class = "baderror">';
			echo '<p>Your passwords did not match.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}
	//adminloginerrors
	elseif(strpos($url, "admindoesnotexist") == true){
		echo '<div class = "baderror">';
			echo '<p>Sorry the details you entered do not match any admin.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "admin=success") == true){
		echo '<div class = "gooderror">';
			echo '<p>Welcome'.'  '.$_SESSION['first_name'].'  '.$_SESSION['last_name'].'</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}
	//uploadform errors
	elseif(strpos($url, "error=notadocument") == true){
		echo '<div class = "baderror">';
			echo '<p>Acceptable document extensions are .pdf .docx .txt</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "error=filetoolarged") == true){
		echo '<div class = "baderror">';
			echo '<p>File too large. Upload up to 5MB for documents.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "error=uploaderror") == true){
		echo '<div class = "baderror">';
			echo '<p>There was an unknown error uploading your file. Try again.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "upload=success") == true){
		echo '<div class = "gooderror">';
			echo '<p>File uploaded successfully! Thanks for sharing.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "error=notapicturefile") == true){
		echo '<div class = "baderror">';
			echo '<p>Acceptable picture extensions are .png .jpeg .jpg</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "error=filetoolargep") == true){
		echo '<div class = "baderror">';
			echo '<p>File too large. Upload up to 1MB for pictures.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}
	
	//extra suggestion errors
	elseif(strpos($url, "suggestion=success") == true){
		echo '<div class = "gooderror">';
			echo '<p>Your suggestion is awaiting approval.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}

	//approvalerror
	elseif(strpos($url, "approvalsuccessful")){
		echo '<div class = "gooderror">';
			echo '<p>File Approved.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "disapproved")){
		echo '<div class = "gooderror">';
			echo '<p>File Disapproved.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}elseif(strpos($url, "removalsuccessful")){
		echo '<div class = "gooderror">';
			echo '<p>File Deleted Successfully.</p>';
			echo '<button class = "errorremove">X</button>';
		echo '</div>';
	}
	?>
	
	<style type = "text/css">
.baderror{
	padding: 0px;
	color: white;
	background-color: rgb(153, 0, 0);
	border-radius: 50px;
	text-align: center;
	position: relative;
	top: 3px;
	width: 50%px;
	height: 50px;
	opacity: .9;
	margin-left: 25%;
	margin-right: 25%;
}
.baderror:hover{
	opacity: 1;
}
.baderror p{
	position: relative;
	top: 5px;
	font-weight: bolder;
	font-size: 20px;
}

.baderror .errorremove{
	border-radius: 80px;
	background-color: rgba(153, 0, 0, .9);
	position: relative;
	left: -15px;
	top: -14px;
}
.baderror .errorremove:hover{
	background-color: rgba(255, 255, 255, .7);
	color: rgba(153, 0, 0, .9);
}
.gooderror{
	padding: 0px;
	color: white;
	background-color: rgb(0, 153, 0);
	border-radius: 50px;
	text-align: center;
	position: relative;
	top: 3px;
	width: 50%;
	height: 50px;
	opacity: .9;
	margin-left: 25%;
	margin-right: 25%;
}
.gooderror:hover{
	opacity: 1;
}

.gooderror .errorremove{
	border-radius: 80px;
	background-color: rgba(0, 153, 0, .9);
	position: relative;
	left: -15px;
	top: -14px;
}
.gooderror .errorremove:hover{
	background-color: rgba(255, 255, 255, .7);
	color: rgba(0, 153, 0, .9);
}

.gooderror p{
	position: relative;
	top: 5px;
	font-weight: bolder;
	font-size: 20px;
}
	</style>