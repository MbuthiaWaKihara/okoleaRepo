<?php
	//get the page url
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	include 'connection.php';
	
	//FETCH WHEN THE PAGE IS LOADED FOR THE FIRST TIME
	//everything from engineering and status is approved
	$sql = "SELECT * FROM engineering_files LIMIT 20;";
	$result = mysqli_query($connection, $sql);
	$all_files_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//************************************************************************************************************************************************************
	//NOTES MODE
	if(strpos($url, "notesmode")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering
	if(strpos($url, "notes_civil")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//NOTES MODE civil engineering first year
	if(strpos($url, "notes_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering first year first semester
	if(strpos($url, "1_notes_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering first year second semester
	if(strpos($url, "2_notes_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering second year
	if(strpos($url, "notes_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering second year first semester
	if(strpos($url, "1_notes_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering second year second semester
	if(strpos($url, "2_notes_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering third year
	if(strpos($url, "notes_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering third year first semester
	if(strpos($url, "1_notes_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering third year second semester
	if(strpos($url, "2_notes_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering fourth year
	if(strpos($url, "notes_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering fourth year first semester
	if(strpos($url, "1_notes_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE civil engineering fourth year second semester
	if(strpos($url, "2_notes_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'civil_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*********************************************************************************************************************************************************
	//NOTES MODE mechanical engineering
	if(strpos($url, "mechanical_notes")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering first year
	if(strpos($url, "notes_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering first year first semester
	if(strpos($url, "1_notes_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering first year second semester
	if(strpos($url, "2_notes_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering second year
	if(strpos($url, "notes_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering second year first semester
	if(strpos($url, "1_notes_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering second year second semester
	if(strpos($url, "2_notes_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering third year
	if(strpos($url, "notes_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering third year first semester
	if(strpos($url, "1_notes_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering third year second semester
	if(strpos($url, "2_notes_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering fourth year
	if(strpos($url, "notes_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering fourth year first semester
	if(strpos($url, "1_notes_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE mechanical engineering fourth year second semester
	if(strpos($url, "2_notes_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'mechanical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*********************************************************************************************************************************************************
	//NOTES MODE chemical engineering
	if(strpos($url, "chemical_notes")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering first year
	if(strpos($url, "notes_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering first year first semester
	if(strpos($url, "1_notes_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering first year second semester
	if(strpos($url, "2_notes_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering second year
	if(strpos($url, "notes_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering second year first semester
	if(strpos($url, "1_notes_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering second year second semester
	if(strpos($url, "2_notes_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering third year
	if(strpos($url, "notes_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering third year first semester
	if(strpos($url, "1_notes_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering third year second semester
	if(strpos($url, "2_notes_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering fourth year
	if(strpos($url, "notes_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering fourth year first semester
	if(strpos($url, "1_notes_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE chemical engineering fourth year second semester
	if(strpos($url, "2_notes_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'class_notes' AND course = 'chemical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*************************************************************************************************************************************************************
	//*************************************************************************************************************************************************************
	//PAST PAPER MODE
	if(strpos($url, "pastmode")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering
	if(strpos($url, "past_civil")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//PAST PAPER MODE civil engineering first year
	if(strpos($url, "past_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering first year first semester
	if(strpos($url, "1_past_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering first year second semester
	if(strpos($url, "2_past_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering second year
	if(strpos($url, "past_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering second year first semester
	if(strpos($url, "1_past_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering second year second semester
	if(strpos($url, "2_past_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering third year
	if(strpos($url, "past_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering third year first semester
	if(strpos($url, "1_past_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering third year second semester
	if(strpos($url, "2_past_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering fourth year
	if(strpos($url, "past_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering fourth year first semester
	if(strpos($url, "1_past_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE civil engineering fourth year second semester
	if(strpos($url, "2_past_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'civil_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//************************************************************************************************************************************************************************************
	//PAST PAPER MODE mechanical engineering
	if(strpos($url, "past_mechanical")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//PAST PAPER MODE mechanical engineering first year
	if(strpos($url, "past_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering first year first semester
	if(strpos($url, "1_past_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering first year second semester
	if(strpos($url, "2_past_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering second year
	if(strpos($url, "past_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering second year first semester
	if(strpos($url, "1_past_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering second year second semester
	if(strpos($url, "2_past_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering third year
	if(strpos($url, "past_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering third year first semester
	if(strpos($url, "1_past_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering third year second semester
	if(strpos($url, "2_past_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering fourth year
	if(strpos($url, "past_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering fourth year first semester
	if(strpos($url, "1_past_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE mechanical engineering fourth year second semester
	if(strpos($url, "2_past_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'mechanical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//************************************************************************************************************************************************************************************
	//PAST PAPER MODE chemical engineering
	if(strpos($url, "past_chemical")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//PAST PAPER MODE chemical engineering first year
	if(strpos($url, "past_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering first year first semester
	if(strpos($url, "1_past_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering first year second semester
	if(strpos($url, "2_past_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering second year
	if(strpos($url, "past_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering second year first semester
	if(strpos($url, "1_past_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering second year second semester
	if(strpos($url, "2_past_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering third year
	if(strpos($url, "past_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering third year first semester
	if(strpos($url, "1_past_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering third year second semester
	if(strpos($url, "2_past_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering fourth year
	if(strpos($url, "past_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering fourth year first semester
	if(strpos($url, "1_past_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE chemical engineering fourth year second semester
	if(strpos($url, "2_past_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'past_paper' AND course = 'chemical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//******************************************************************************************************************************************************************************
	//******************************************************************************************************************************************************************************
	//WORKED EXAMPLE MODE
	if(strpos($url, "workedmode")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering
	if(strpos($url, "worked_civil")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//WORKED EXAMPLE MODE civil engineering first year
	if(strpos($url, "worked_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering first year first semester
	if(strpos($url, "1_worked_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering first year second semester
	if(strpos($url, "2_worked_civil_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering second year
	if(strpos($url, "worked_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering second year first semester
	if(strpos($url, "1_worked_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering second year second semester
	if(strpos($url, "2_worked_civil_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering third year
	if(strpos($url, "worked_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering third year first semester
	if(strpos($url, "1_worked_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering third year second semester
	if(strpos($url, "2_worked_civil_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering fourth year
	if(strpos($url, "worked_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering fourth year first semester
	if(strpos($url, "1_worked_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE civil engineering fourth year second semester
	if(strpos($url, "2_worked_civil_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'civil_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//***********************************************************************************************************************************************************************
	//WORKED EXAMPLE MODE mechanical engineering
	if(strpos($url, "worked_mechanical")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//WORKED EXAMPLE MODE mechanical engineering first year
	if(strpos($url, "worked_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering first year first semester
	if(strpos($url, "1_worked_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering first year second semester
	if(strpos($url, "2_worked_mechanical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering second year
	if(strpos($url, "worked_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering second year first semester
	if(strpos($url, "1_worked_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering second year second semester
	if(strpos($url, "2_worked_mechanical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering third year
	if(strpos($url, "worked_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering third year first semester
	if(strpos($url, "1_worked_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering third year second semester
	if(strpos($url, "2_worked_mechanical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering fourth year
	if(strpos($url, "worked_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering fourth year first semester
	if(strpos($url, "1_worked_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE mechanical engineering fourth year second semester
	if(strpos($url, "2_worked_mechanical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'mechanical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//***********************************************************************************************************************************************************************
	//WORKED EXAMPLE MODE chemical engineering
	if(strpos($url, "worked_chemical")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//WORKED EXAMPLE MODE chemical engineering first year
	if(strpos($url, "worked_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering first year first semester
	if(strpos($url, "1_worked_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering first year second semester
	if(strpos($url, "2_worked_chemical_1")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering second year
	if(strpos($url, "worked_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering second year first semester
	if(strpos($url, "1_worked_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering second year second semester
	if(strpos($url, "2_worked_chemical_2")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering third year
	if(strpos($url, "worked_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering third year first semester
	if(strpos($url, "1_worked_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering third year second semester
	if(strpos($url, "2_worked_chemical_3")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering fourth year
	if(strpos($url, "worked_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering fourth year first semester
	if(strpos($url, "1_worked_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE chemical engineering fourth year second semester
	if(strpos($url, "2_worked_chemical_4")){
		$sql_n = "SELECT * FROM engineering_files WHERE file_category = 'worked_example' AND course = 'chemical_eng' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//***************************************************************************************************************************************************************
	//CODE THAT SEARCHES FOR A FILE
		if(isset($_POST['search'])){
			$key = mysqli_real_escape_string($connection, $_POST['key']);
			
			$sql_search = "SELECT * FROM engineering_files WHERE description LIKE '%$key%' OR year = '$key' OR unit LIKE '%$key%';";
			$result_search = mysqli_query($connection, $sql_search);
			$all_files_data = mysqli_fetch_all($result_search, MYSQLI_ASSOC);
		}