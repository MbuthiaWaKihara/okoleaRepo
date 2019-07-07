<?php
	session_start();

	//check whether the submit button was hit
	if(isset($_POST['submit'])){
		include_once 'connection.php';
		
		//get all the info from the form
		$adm_no = mysqli_real_escape_string($connection, $_POST['adm_no']);
		$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
		$user_name = mysqli_real_escape_string($connection, $_POST['user_name']);
		$user_email = mysqli_real_escape_string($connection, $_POST['user_email']);
		$user_password = mysqli_real_escape_string($connection, $_POST['user_password']);
		$user_conpassword = mysqli_real_escape_string($connection, $_POST['user_conpassword']);
		
		//handle errors
		//check if the user inserted valid input in the first name and last name fields
		if(!preg_match("/^[a-zA-Z]*$/", $first_name) or !preg_match("/^[a-zA-Z]*$/", $last_name)){
			header('Location: homepage.php?invalidinput');
			exit();
		}else{
			//check whether the password entered is strong
			if(strlen($user_password) < 8){
				header('Location: homepage.php?weakpassword');
				exit();
			}else{
				//check whether the password confirmation was done well
				if($user_password != $user_conpassword){
					header('Location: homepage.php?badconfirmation');
					exit();
				}else{
					//check whether the user name is already taken
					$sql = "SELECT user_name FROM users WHERE user_name = '$user_name'";
					$result = mysqli_query($connection, $sql);
					$check = mysqli_num_rows($result);
					
					if($check > 0){
						header('Location: homepage.php?usernameexists');
						exit();
						}else{
							//check whether there is an admin account with a similar admission number
							$sql_c = "SELECT adm_no FROM admin WHERE adm_no = '$adm_no';";
							$result_c = mysqli_query($connection, $sql_c);
							$check_c = mysqli_num_rows($result_c);
							
							if($check_c > 0){
								header('Location: homepage.php?admintry');
								exit();
							}else{
								$hiddenpassword = password_hash($user_password, PASSWORD_BCRYPT);
								$sqli = "INSERT INTO users(adm_no, first_name, last_name, user_name, email, pasword)
									VALUES('$adm_no', '$first_name', '$last_name', '$user_name', '$user_email', '$hiddenpassword');";
								mysqli_query($connection, $sqli);
								header('Location: homepage.php?signup=success');
								exit();
							}
						}
				}
			}
		}
	}
	
	