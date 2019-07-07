<button id = "signup" style = "background-color:rgba(245, 245, 245, 0.086); color: maroon;">Sign up</button>
<button id = "login"  name = "submitlog"  style = "background-color: maroon; color: white; border-radius: 20px 0px 140px 0px;">Log in</button>

<script type = "text/javascript">
	//get the log in and sign up buttons and set event listeners for when they are blurred 
	var loginBtn = document.getElementById("login");
	var signinBtn = document.getElementById("signup");
	loginBtn.addEventListener("blur" , Comeback_login , true);
	signinBtn.addEventListener("blur" , Comeback_signin , true);
	
	//write the individual functions to change their css 
	function Comeback_login(){
		if(signinBtn.style.color == "maroon"){
			loginBtn.style.backgroundColor = "maroon";
			loginBtn.style.color = "white";
			loginBtn.style.borderRadius = "20px 0px 140px 0px";
				return true;
		}
	}
	
	function Comeback_signin(){
		if(loginBtn.style.color == "maroon"){
			signinBtn.style.backgroundColor = "maroon";
			signinBtn.style.color = "white";
			signinBtn.style.borderRadius = "0px 20px 0px 140px";
				return true;
		}
	}
	
	//ensure that all jquery code runs upon completion of page load
	$(document).ready(function() {
			//dictate what happens when user clicks the log in button
			$("#login").click(function() {
				$(this).css({"background-color":"rgba(245, 245, 245, 0.086)","color":"maroon"});
				$("#signup").css({"background-color":"maroon","color":"white","border-radius":"0px 20px 0px 140px"});
				$(".logs").load("loginForm.php");
			});
			
			//dictate what happens when user clicks the sign in button
			$("#signup").click(function() {
				$(this).css({"background-color":"rgba(245, 245, 245, 0.086)","color":"maroon"});
				$("#login").css({"background-color":"maroon","color":"white","border-radius":"20px 0px 140px 0px"});
				$(".logs").load("signinForm.php");
			});
	});
</script>