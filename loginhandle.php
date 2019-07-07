<?php
	session_start();
	
	//check if the submit button was pressed
	if(isset($_POST['submit'])){
		include_once 'connection.php';
		
		//get data from the form
		$access = mysqli_real_escape_string($connection, $_POST['access']);
		$password =	mysqli_real_escape_string($connection, $_POST['user_password']);
		
		//check whether there matches such an account
		$sql = "SELECT * FROM users WHERE user_name = '$access' OR email = '$access'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		
			if($resultCheck < 1){
				header('Location: homepage.php?userdoesnotexist');
				exit();
			}else{
			if($userdetails = mysqli_fetch_assoc($result)){
				$hashpassword = $userdetails['pasword'];
				$comparison = password_verify($password, $hashpassword);
				if($comparison == false){
					header('Location: homepage.php?passwordincorrect');
				}else if($comparison == true){
					//log the user in
					$_SESSION['adm_no'] = $userdetails['adm_no'];
					$_SESSION['first_name'] = $userdetails['first_name'];
					$_SESSION['last_name'] = $userdetails['last_name'];
					$_SESSION['user_name'] = $userdetails['user_name'];
					$_SESSION['email'] = $userdetails['email'];

					header('Location: homepage.php?login=success');
					exit();
				}	
			}
		}
	}
