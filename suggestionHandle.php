<?php
	session_start();
	//check whether the submit button was pressed
	if(isset($_POST['submit'])){
		include 'connection.php';
		//get all the inputs from the form:
		$school = mysqli_real_escape_string($connection, $_POST['school']);
		$course = mysqli_real_escape_string($connection, $_POST['course']);
		$year = mysqli_real_escape_string($connection, $_POST['year']);
		$semester = mysqli_real_escape_string($connection, $_POST['semester']);
		$unit = mysqli_real_escape_string($connection, $_POST['unit']);
		$file_type = mysqli_real_escape_string($connection, $_POST['file_type']);
		$file_category = mysqli_real_escape_string($connection, $_POST['file_category']);
		$description = mysqli_real_escape_string($connection, $_POST['description']);
	
		//get all the information of the file that was uploaded:
		$upload = $_FILES['upload'];
		$upload_name = $upload['name'];
		$upload_tmp_location = $upload['tmp_name'];
		$upload_size = $upload['size'];
		$upload_errors = $upload['error'];
		
		//get the admin uploading the file **********************************************************
		$admin_id = 0;
		
		//get the extension of the file that was uploaded:
		$file_name_parts = explode('.', $upload_name);
		$file_extension = strtolower(end($file_name_parts));
		
		
		//check whether the file uploaded was a document or a picture file:
		switch($file_type){
			case 'document_file':
				//specify the extensions allowed for a document type
				$document_extensions = array('pdf','txt','docx');
				
				//check whether the file uploaded has an allowed extension
				$test = in_array($file_extension, $document_extensions);
				if($test == 0){
					header("Location: homepage.php?error=notadocument");
					exit();
				}else{
					//check whether the file uploaded is at most five megabites
					if($upload_size > 5000000){
						header("Location: homepage.php?error=filetoolarged");
						exit();
					}else{
						if($upload_errors != 0){
							header("Location: homepage.php?error=uploaderror");
							exit();
						}else{
							$destination = "documents/".$upload_name;
							move_uploaded_file($upload_tmp_location, $destination);
							
							//add the file that was uploaded into the database ************************************************************************
							$sql_d = "INSERT INTO uploads(file_name, file_type,	file_category, description,	school,	course,	year, semester,	unit, admin_id,status,no_of_downloads)
									  VALUES('$upload_name', '$file_type', '$file_category', '$description', '$school', '$course', '$year', '$semester', '$unit', '$admin_id','waiting',0)";
							mysqli_query($connection, $sql_d);
							header("Location: homepage.php?suggestion=success");//**************************************************************************
							exit();
						}
					}
				}
				break;
			case 'picture_file':
				//specify the extensions allowed for a document type
				$picture_extensions = array('jpg','jpeg','png');
				
				//check whether the file uploaded has an allowed extension
				if(!in_array($file_extension, $picture_extensions)){
					header("Location: homepage.php?error=notapicturefile");
					exit();
				}else{
					//check whether the file uploaded is at most one megabite
					if($upload_size > 1000000){
						header("Location: homepage.php?error=filetoolargep");
						exit();
					}else{
						if($upload_errors != 0){
							header("Location: homepage.php?error=uploaderror");
							exit();
						}else{
							$destionation = "pictures/".$upload_name;
							move_uploaded_file($upload_tmp_location, $destionation);
							
							//************************************************************************************
							$sql_p =  "INSERT INTO uploads(file_name, file_type, file_category, description, school,	course,	year, semester,	unit, admin_id,status,no_of_downloads)
									  VALUES('$upload_name', '$file_type', '$file_category', '$description', '$school', '$course', '$year', '$semester', '$unit', '$admin_id','waiting',0)";
							mysqli_query($connection, $sql_p);
							header("Location: homepage.php?suggestion=success");//********************************************************************************************
							exit();
						}
					}
				}
				break;
		}
	}