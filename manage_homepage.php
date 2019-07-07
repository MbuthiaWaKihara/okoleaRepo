<?php
	session_start();
	
	//include the connection to the database:
	include 'connection.php';
	//get the homepage url
	$homeurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	//NORMAL MODE FETCH
	//fetch all the files with an approved status when the homepage is in its normal state
	//temporarily **
	//fetch all the information from the uploads table (information about all the files uploaded by an admins) 
	$sql = "SELECT * FROM uploads WHERE status = 'approved' LIMIT 20;";
	$result = mysqli_query($connection, $sql);
	$all_files_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//VERIFY MODE FETCH
	//fetch all the files with a waiting status when the homepage is in verify mode
	if(strpos($homeurl , "verify") == true){
		$adminCourse = $_SESSION['admin_course'];
		$adminYear = $_SESSION['admin_year'];
		
		$sql_v = "SELECT * FROM uploads WHERE course = '$adminCourse' AND year = '$adminYear' AND status = 'waiting';";
		$result_v = mysqli_query($connection, $sql_v);
		$all_files_verify = mysqli_fetch_all($result_v, MYSQLI_ASSOC);
	}
	
	//REMOVE MODE FETCH
	//fetch all the files that have been uploaded by the admin in session
	if(strpos($homeurl , "remove") == true){
		$admin = $_SESSION['admin_id'];
		
		$sql_mine = "SELECT * FROM uploads WHERE admin_id = '$admin';";
		$result_mine = mysqli_query($connection, $sql_mine);
		$all_files_mine = mysqli_fetch_all($result_mine, MYSQLI_ASSOC);
	}
	
	//CODE THAT REMOVES FILES
	if(isset($_GET['file_remove'])){
		$remove_file = $_GET['file_remove'];
		
		//fetch information about the target file from the database 
		$sql_r = "SELECT * FROM uploads WHERE file_id = '$remove_file';";
		$result_r = mysqli_query($connection, $sql_r);
		$fileinfo_r = mysqli_fetch_assoc($result_r);
		
		$filename_r = $fileinfo_r['file_name'];
		//get the file extension(so as to tell which folder the file is at)
		$file_name_parts_r = explode('.', $filename_r);
		$file_extension_r = strtolower(end($file_name_parts_r));
		
		if($file_extension_r == 'png' or $file_extension_r == 'jpg' or $file_extension_r == 'jpeg'){
			$path_r = "pictures/".$filename_r;
			
			if(unlink($path_r)){
				$sql_out_p = "DELETE FROM uploads WHERE file_id = '$remove_file';";
				mysqli_query($connection, $sql_out_p);
			}
			
		}elseif($file_extension_r == 'pdf' or $file_extension_r == 'txt' or $file_extension_r == 'docx'){
			$path_r = "documents/".$filename_r;
			
			if(unlink($path_r)){
				$sql_out_d = "DELETE FROM uploads WHERE file_id = '$remove_file';";
				mysqli_query($connection, $sql_out_d);
			}
		}
		header("Location: homepage.php?removalsuccessful");
	}
	
	//CODE THAT APPROVES FILES
	if(isset($_GET['file_approve'])){
		$approvedFile = $_GET['file_approve'];
		$admin_takeover = $_SESSION['admin_id'];
		
		$sql_approve = "UPDATE uploads SET status = 'approved' WHERE file_id = '$approvedFile';";
		mysqli_query($connection, $sql_approve);
		$sql_takeover = "UPDATE uploads SET admin_id = '$admin_takeover' WHERE file_id = '$approvedFile';";
		mysqli_query($connection, $sql_takeover);
		header("Location: homepage.php?approvalsuccessful");
	}
	//CODE THAT DISAPPROVES FILES
	if(isset($_GET['file_disapprove'])){
		$targetFile = $_GET['file_disapprove'];
		
		//fetch information of the file that was disapproved
		$query = "SELECT * FROM uploads WHERE file_id = '$targetFile';";
		$result_dis = mysqli_query($connection, $query);
		$file_info_dis = mysqli_fetch_assoc($result_dis);
		
		//target the file for unlink
		$file_dis_name = $file_info_dis['file_name'];
		$file_dis_name_parts = explode('.', $file_dis_name);
		$file_dis_extension = strtolower(end($file_dis_name_parts));
		
		if($file_dis_extension == 'jpg' or $file_dis_extension == 'jpeg' or $file_dis_extension == 'png'){
			$path_dis = "pictures/".$file_dis_name;
			
			if(unlink($path_dis)){
				//remove file from the database
				$sql_r = "DELETE FROM uploads WHERE file_id = '$targetFile';";
				mysqli_query($connection, $sql_r);
			}
		}elseif($file_dis_extension == 'pdf' or $file_dis_extension == 'docx' or $file_dis_extension == 'txt'){
			$path_dis = "documents/".$file_dis_name;
			
			if(unlink($path_dis)){
				//remove file from the database
				$sql_r = "DELETE FROM uploads WHERE file_id = '$targetFile';";
				mysqli_query($connection, $sql_r);
			}
			
			header("Location: homepage.php?disapproved");
		}
	}
	//CODE THAT DOWNLOADS FILES
	//check whether the homepage url was changed, meaning a user clicked on a download link
	if(isset($_GET['file_id'])){
		//check whether the person downloading is an admin or is a user
			if(isset($_SESSION['admin_id'])){
					$admission_number = $_SESSION['admin_adm_no'];
					$id = $_GET['file_id'];
					
					//fetch the details of the file user would like to download from the database
					$sql_download = "SELECT * FROM uploads WHERE file_id = '$id';";
					$result_download = mysqli_query($connection, $sql_download);
					
					$file_details = mysqli_fetch_assoc($result_download);
					
					//check for whether the file targeted is a picture or is a document
					$fileName = $file_details['file_name'];
					$fileNameParts = explode('.', $fileName);
					$fileExtension = strtolower(end($fileNameParts));
					
					//picture extensions
					$picture_extensions = array('png','jpg','jpeg');
					//document extensions
					$document_extensions = array('pdf','docx','txt');
					if(in_array($fileExtension, $picture_extensions)){
						$file_path = 'pictures/'.$fileName;
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('pictures/'. $file_details['file_name']));
							readfile('pictures/'. $file_details['file_name']);
						}
						
					}else if(in_array($fileExtension, $document_extensions)){
						$file_path = 'documents/'.$file_details['file_name'];
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('documents/'. $file_details['file_name']));
							readfile('documents/'. $file_details['file_name']);
						}
					}
					
					//increase the number of downloads by one if this code runs successfully
					$current_downloads = $file_details['no_of_downloads'];
					
					$sql_update = "UPDATE uploads SET no_of_downloads = '$current_downloads' + 1 WHERE file_id = '$id';";
					mysqli_query($connection, $sql_update);
					
					//add the file then to the downloads table:
					$sql_downloads = "INSERT INTO downloads(file_id,adm_no)
									  VALUES('$id','$admission_number');";
					mysqli_query($connection, $sql_downloads);
			}else if(isset($_SESSION['adm_no'])){
				$admission_number = $_SESSION['adm_no'];
				$id = $_GET['file_id'];
					
					//fetch the details of the file user would like to download from the database
					$sql_download = "SELECT * FROM uploads WHERE file_id = '$id';";
					$result_download = mysqli_query($connection, $sql_download);
					
					$file_details = mysqli_fetch_assoc($result_download);
					
					//check for whether the file targeted is a picture or is a document
					$fileName = $file_details['file_name'];
					$fileNameParts = explode('.', $fileName);
					$fileExtension = strtolower(end($fileNameParts));
					
					//picture extensions
					$picture_extensions = array('png','jpg','jpeg');
					//document extensions
					$document_extensions = array('pdf','docx','txt');
					if(in_array($fileExtension, $picture_extensions)){
						$file_path = 'pictures/'.$fileName;
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('pictures/'. $file_details['file_name']));
							readfile('pictures/'. $file_details['file_name']);
						}
						
					}else if(in_array($fileExtension, $document_extensions)){
						$file_path = 'documents/'.$file_details['file_name'];
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('documents/'. $file_details['file_name']));
							readfile('documents/'. $file_details['file_name']);
						}
					}
					
					//increase the number of downloads by one if this code runs successfully
					$current_downloads = $file_details['no_of_downloads'];
					
					$sql_update = "UPDATE uploads SET no_of_downloads = '$current_downloads' + 1 WHERE file_id = '$id';";
					mysqli_query($connection, $sql_update);
					
					//add the file then to the downloads table:
					$sql_downloads = "INSERT INTO downloads(file_id,adm_no)
									  VALUES('$id','$admission_number');";
					mysqli_query($connection, $sql_downloads);
			}
		}

		//CODE THAT VIEWS FILES
	//check whether the homepage url was changed, meaning a user clicked on a download link
	if(isset($_GET['fileviewed_id'])){
		//check whether the person downloading is an admin or is a user
			if(isset($_SESSION['admin_id'])){
					$admission_number = $_SESSION['admin_adm_no'];
					$id = $_GET['fileviewed_id'];
					
					//fetch the details of the file user would like to download from the database
					$sql_download = "SELECT * FROM uploads WHERE file_id = '$id';";
					$result_download = mysqli_query($connection, $sql_download);
					
					$file_details = mysqli_fetch_assoc($result_download);
					
					//check for whether the file targeted is a picture or is a document
					$fileName = $file_details['file_name'];
					$fileNameParts = explode('.', $fileName);
					$fileExtension = strtolower(end($fileNameParts));
					
					//picture extensions
					$picture_extensions = array('png','jpg','jpeg');
					//document extensions
					$document_extensions = array('pdf','docx','txt');
					if(in_array($fileExtension, $picture_extensions)){
						$file_path = 'pictures/'.$fileName;
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('pictures/'. $file_details['file_name']));
							readfile('pictures/'. $file_details['file_name']);
						}
						
					}else if(in_array($fileExtension, $document_extensions)){
						$file_path = 'documents/'.$file_details['file_name'];
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('documents/'. $file_details['file_name']));
							readfile('documents/'. $file_details['file_name']);
						}
					}
					
					
					//add the file then to the downloads table:
					$sql_downloads = "INSERT INTO downloads(file_id,adm_no)
									  VALUES('$id','$admission_number');";
					mysqli_query($connection, $sql_downloads);
			}else if(isset($_SESSION['adm_no'])){
				$admission_number = $_SESSION['adm_no'];
				$id = $_GET['fileviewed_id'];
					
					//fetch the details of the file user would like to download from the database
					$sql_download = "SELECT * FROM uploads WHERE file_id = '$id';";
					$result_download = mysqli_query($connection, $sql_download);
					
					$file_details = mysqli_fetch_assoc($result_download);
					
					//check for whether the file targeted is a picture or is a document
					$fileName = $file_details['file_name'];
					$fileNameParts = explode('.', $fileName);
					$fileExtension = strtolower(end($fileNameParts));
					
					//picture extensions
					$picture_extensions = array('png','jpg','jpeg');
					//document extensions
					$document_extensions = array('pdf','docx','txt');
					if(in_array($fileExtension, $picture_extensions)){
						$file_path = 'pictures/'.$fileName;
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('pictures/'. $file_details['file_name']));
							readfile('pictures/'. $file_details['file_name']);
						}
						
					}else if(in_array($fileExtension, $document_extensions)){
						$file_path = 'documents/'.$file_details['file_name'];
					
						if(file_exists($file_path)){
							header('Content-Description: File Transfer');
							header('Content-Type: application/octet-stream');
							header('Content-Disposition: attachment; filename = '.basename($file_path));
							header('Expires: 0');
							header('Cache-Control: must-revalidate');
							header('Pragma: public');
							header('Content-Length: '. filesize('documents/'. $file_details['file_name']));
							readfile('documents/'. $file_details['file_name']);
						}
					}
					
					//add the file then to the downloads table:
					$sql_downloads = "INSERT INTO downloads(file_id,adm_no)
									  VALUES('$id','$admission_number');";
					mysqli_query($connection, $sql_downloads);
			}
		}
		
		//CODE THAT SEARCHES FOR A FILE
		if(isset($_POST['search'])){
			$key = mysqli_real_escape_string($connection, $_POST['key']);
			
			$sql_search = "SELECT * FROM uploads WHERE description LIKE '%$key%' OR year = '$key' OR unit LIKE '%$key%';";
			$result_search = mysqli_query($connection, $sql_search);
			$all_files_data = mysqli_fetch_all($result_search, MYSQLI_ASSOC);
		}