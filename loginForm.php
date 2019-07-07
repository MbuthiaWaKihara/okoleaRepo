<form action = "loginhandle.php" method = "POST" name = "login" onsubmit = "return validate()">
	<ul>
		<li><input type = "text" placeholder = "User Name or Email Address" name = "access" class = "info" /></li>
		<li><div class = "errormessage" id = "accesserror"></div></li>
		<li><input type = "password" placeholder = "Password" name = "user_password" class = "info" /></li>
		<li><div class = "errormessage" id = "passworderror"></div></li>
		<li><button type = "submit" name = "submit" id = "press2" class = "form_send">Log in</button></li>
	</ul>
</form>

<script type = "text/javascript">
	//form validation
	//get all the inputs from the log in form:
	var username_or_email = document.forms["login"]["access"];
	var user_password = document.forms["login"]["user_password"];
	
	//get all the error display elements:
	var accesserror = document.getElementById("accesserror");
	var passworderror = document.getElementById("passworderror");
	
	//set all the event listeners for the above variables:
	username_or_email.addEventListener("blur", loginUserValid, true);
	user_password.addEventListener("blur", loginPasswordValid, true);
	
	//create the validate function:
	function validate(){
		if(username_or_email.value == ""){
			username_or_email.style.backgroundColor = "rgba(255, 51, 51, .3)";
			username_or_email.style.border = "4px solid maroon";
			accesserror.innerHTML = "*required. Please enter a username or email";
			username_or_email.focus();
			return false;
		}
		if(user_password.value == ""){
			user_password.style.backgroundColor = "rgba(255, 51, 51, .3)";
			user_password.style.border = "4px solid maroon";
			passworderror.innerHTML = "*required. Please enter a password";
			user_password.focus();
			return false;
		}
		
	}
	
	//create the event listeners' functions:
	function loginUserValid(){
		if(username_or_email.value != ""){
			username_or_email.style.backgroundColor = "rgbargba(236, 236, 243, 0.6)";
			username_or_email.style.borderStyle = "inset";
			username_or_email.style.border = "";
			accesserror.textContent = "";
			return true;
		}
	}
	
	function loginPasswordValid(){
		if(user_password.value != ""){
			user_password.style.backgroundColor = "rgba(rgba(236, 236, 243, 0.6)";
			user_password.style.borderStyle = "inset";
			user_password.style.border = "";
			passworderror.textContent = "";
			return true;
		}
	}
</script>