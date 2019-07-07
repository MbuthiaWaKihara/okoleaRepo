<form action = "admin_loginhandle.php" method = "POST" name = "admin_loginForm" onsubmit = "return validateadmin();">
	<ul>
		<li><input type = "text" placeholder = "Admission Number" name = "admin_access" class = "info"/></li>
		<li><div class = "errormessage" id = "admerror"></div></li>
		<li><input type = "password" placeholder = "Password" name = "admin_password" class = "info"/></li>
		<li><div class = "errormessage" id = "passworderror"></div></li>
		<li><button type = "submit" name = "submit" id = "press3" class = "form_send">Admin Log in</button></li>
	</ul>
</form>
<script>
	//form validation
	//get all form inputs
	var admin_access = document.forms["admin_loginForm"]["admin_access"];
	var admin_password = document.forms["admin_loginForm"]["admin_password"];
	
	//get all the error display elements
	var admerror = document.getElementById("admerror");
	var passworderror = document.getElementById("passworderror");
	
	//set all the event listeners for form inputs(reaction on blur)
	admin_access.addEventListener("blur",admin_accessV,true);
	admin_password.addEventListener("blur",adm_passwordV,true);
	
	//write the validation function:
	function validateadmin(){
		if(admin_access.value == ""){
			admin_access.style.backgroundColor = "rgba(255, 51, 51, .3)";
			admin_access.style.border = "4px solid maroon";
			admerror.innerHTML = "*required. Please enter your admission number";
			admin_access.focus();
			return false;
		}
		if(admin_password.value == ""){
			admin_password.style.backgroundColor = "rgba(255, 51, 51, .3)";
			admin_password.style.border = "4px solid maroon";
			passworderror.innerHTML = "*required. Please enter your admin password";
			admin_password.focus();
			return false;
		}
	}
	
	//write the individual event listener functions 
	function admin_accessV(){
		if(admin_access.value != ""){
			admin_access.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			admin_access.style.borderStyle = "inset";
			admin_access.style.border = "";
			admerror.textContent = "";
			return true;
		}
	}
		
	function adm_passwordV(){
		if(admin_password.value != ""){
			admin_password.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			admin_password.style.borderStyle = "inset";
			admin_password.style.border = "";
			passworderror.textContent = ""; 
			return true;
		}
	}
</script>