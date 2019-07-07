<form action = "signinhandle.php" method = "POST" name = "signin" onsubmit = "return validate2()">
	<ul>
		<li><input type = "text" placeholder = "Admission Number" name = "adm_no" class = "info"></li>
		<li><div class = "errormessage" id = "admerror"></div></li>
		<li><input type = "text" placeholder = "First Name" name = "first_name" class = "info" /></li>
		<li><div class = "errormessage" id = "fnameerror"></div></li>
		<li><input type = "text" placeholder = "Last Name" name = "last_name" class = "info" /></li>
		<li><div class = "errormessage" id = "lnameerror"></div></li>
		<li><input type = "text" placeholder = "User Name" name = "user_name" class = "info" /></li>
		<li><div class = "errormessage" id = "unameerror"></div></li>
		<li><input type = "email" placeholder = "Email Address" name = "user_email" class = "info" /></li>
		<li><div class = "errormessage" id = "emailerror"></div></li>
		<li><input type = "password" placeholder = "Password" name = "user_password" class = "info" /></li>
		<li><div class = "errormessage" id = "passworderror"></div></li>
		<li><input type = "password" placeholder = "Confirm Password" name = "user_conpassword" class = "info" /></li>
		<li><div class = "errormessage" id = "cpassworderror"></div></li>
		<li><button type = "submit" name = "submit" id = "press1" class = "form_send">Create</button></li>
	</ul>
</form>

<script type = "text/javascript">
	//form validation
	//get all the inputs from the sign in form:
	var adm_no = document.forms["signin"]["adm_no"];
	var first_name = document.forms["signin"]["first_name"];
	var last_name = document.forms["signin"]["last_name"];
	var user_name = document.forms["signin"]["user_name"];
	var user_email = document.forms["signin"]["user_email"];
	var user_passwords = document.forms["signin"]["user_password"];
	var user_conpassword = document.forms["signin"]["user_conpassword"];
	
	//get all the error display elements:
	var admerror = document.getElementById("admerror");
	var fnameerror = document.getElementById("fnameerror");
	var lnameerror = document.getElementById("lnameerror");
	var unameerror = document.getElementById("unameerror");
	var emailerror = document.getElementById("emailerror");
	var passworderror = document.getElementById("passworderror");
	var cpassworderror = document.getElementById("cpassworderror");
	
	//set all the event listeners for the above variables:
	adm_no.addEventListener("blur", admValid, true);
	first_name.addEventListener("blur", fnValid, true);
	last_name.addEventListener("blur", lnValid, true);
	user_name.addEventListener("blur", unValid, true);
	user_email.addEventListener("blur", ueValid, true);
	user_passwords.addEventListener("blur", upValid, true);
	user_conpassword.addEventListener("blur", ucpValid, true);
	
	//create the second validate function:
	function validate2(){
		if(adm_no.value == ""){
			adm_no.style.backgroundColor = "rgba(255, 51, 51, .3)";
			adm_no.style.border = "4px solid maroon";
			admerror.innerHTML = "*required. Please enter an admission number";
			adm_no.focus();
			return false;
		}
		
		if(first_name.value == ""){
			first_name.style.backgroundColor = "rgba(255, 51, 51, .3)";
			first_name.style.border = "4px solid maroon";
			fnameerror.innerHTML = "*required. Please enter a first name";
			first_name.focus();
			return false;
		}
		if(last_name.value == ""){
			last_name.style.backgroundColor = "rgba(255, 51, 51, .3)";
			last_name.style.border = "4px solid maroon";
			lnameerror.innerHTML = "*required. Please enter a last name";
			last_name.focus();
			return false;
		}
		if(user_name.value == ""){
			user_name.style.backgroundColor = "rgba(255, 51, 51, .3)";
			user_name.style.border = "4px solid maroon";
			unameerror.innerHTML = "*required. Please enter a username";
			user_name.focus();
			return false;
		}
		if(user_email.value == ""){
			user_email.style.backgroundColor = "rgba(255, 51, 51, .3)";
			user_email.style.border = "4px solid maroon";
			emailerror.innerHTML = "*required. Please enter an email address";
			user_email.focus();
			return false;
		}
		if(user_passwords.value == ""){
			user_passwords.style.backgroundColor = "rgba(255, 51, 51, .3)";
			user_passwords.style.border = "4px solid maroon";
			passworderror.innerHTML = "*required. Please enter a password";
			user_passwords.focus();
			return false;
		}
		if(user_conpassword.value == ""){
			user_conpassword.style.backgroundColor = "rgba(255, 51, 51, .3)";
			user_conpassword.style.border = "4px solid maroon";
			cpassworderror.innerHTML = "*required. Please confirm your password";
			user_conpassword.focus();
			return false;
		}
	}
	
	//create the event listeners' functions:
	function admValid(){
		if(adm_no.value != ""){
			adm_no.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			adm_no.style.borderStyle = "inset";
			adm_no.style.border = "";
			admerror.textContent = "";
			return true;
		}
	}
	
	function fnValid(){
		if(first_name.value != ""){
			first_name.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			first_name.style.borderStyle = "inset";
			first_name.style.border = "";
			fnameerror.textContent = "";
			return true;
		}
	}
	
	function lnValid(){
		if(last_name.value != ""){
			last_name.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			last_name.style.borderStyle = "inset";
			last_name.style.border = "";
			lnameerror.textContent = "";
			return true;
		}
	}
	
	function unValid(){
		if(user_name.value != ""){
			user_name.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			user_name.style.borderStyle = "inset";
			user_name.style.border = "";
			unameerror.textContent = "";
			return true;
		}
	}
	
	function ueValid(){
		if(user_email.value != ""){
			user_email.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			user_email.style.borderStyle = "inset";
			user_email.style.border = "";
			emailerror.textContent = "";
			return true;
		}
	}
	
	function upValid(){
		if(user_passwords.value != ""){
			user_passwords.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			user_passwords.style.borderStyle = "inset";
			user_passwords.style.border = "";
			passworderror.textContent = "";
			return true;
		}
	}
	
	function ucpValid(){
		if(user_conpassword.value != ""){
			user_conpassword.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			user_conpassword.style.borderStyle = "inset";
			user_conpassword.style.border = "";
			cpassworderror.textContent = "";
			return true;
		}
	}
</script>