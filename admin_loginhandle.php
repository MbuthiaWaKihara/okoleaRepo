<?php
	
	session_start();

	//check if the submit button was pressed:
	if(isset($_POST['submit'])){
		include 'connection.php';
		//get the data from the login form
		$admin_access = mysqli_real_escape_string($connection, $_POST['admin_access']);
		$admin_password = mysqli_real_escape_string($connection, $_POST['admin_password']);
		
		//check whether there exists such an admin
		$sql = "SELECT * FROM admin WHERE adm_no = '$admin_access';";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		
		if(!$resultCheck == 1){
			header("Location: homepage.php?admindoesnotexist");
		}else{
			//check whether the password entered matches the one in the database
			if($selection = mysqli_fetch_assoc($result)){
				if(!$admin_password == $selection['admin_password']){
					header("Location: homepage.php?passwordincorrect");
				}else if($admin_password == $selection['admin_password']){
					//login the admin
					$_SESSION['admin_id'] = $selection['admin_id'];
					$_SESSION['first_name'] = $selection['first_name'];
					$_SESSION['last_name'] = $selection['last_name'];
					$_SESSION['admin_adm_no'] = $selection['adm_no'];
					$_SESSION['admin_year'] = $selection['admin_year'];
					$_SESSION['admin_school'] = $selection['admin_school'];
					$_SESSION['admin_course'] = $selection['admin_course'];
					$_SESSION['admin_email'] = $selection['admin_email'];
					header("Location: homepage.php?admin=success");
				}
			}
		}
	}else{
		header("Location: homepage.php");
	}