<?php
	//get the page url
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	include 'connection.php';

	//FETCH WHEN THE PAGE IS LOADED FOR THE FIRST TIME
	//everything belogning to biological and status is approved
	$sql = "SELECT * FROM biological_files LIMIT 20;";
	$result = mysqli_query($connection, $sql);
	$all_files_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//******************************************************************************************************************************************************
	//NOTES MODE
	if(strpos($url, "notesmode")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//NOTES MODE computer science
	if(strpos($url, "notes_comp")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science first year
	if(strpos($url, "notes_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science first year first semester
	if(strpos($url, "1_notes_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science first year second semester
	if(strpos($url, "2_notes_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science second year
	if(strpos($url, "notes_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science second year first semester
	if(strpos($url, "1_notes_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science second year second semester
	if(strpos($url, "2_notes_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science third year
	if(strpos($url, "notes_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science third year first semester
	if(strpos($url, "1_notes_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science third year second semester
	if(strpos($url, "2_notes_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science fourth year
	if(strpos($url, "notes_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science fourth year first semester
	if(strpos($url, "1_notes_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE computer science fourth year second semester
	if(strpos($url, "2_notes_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'computer_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//*********************************************************************************************************************************************************
	//NOTES MODE acturial science
	if(strpos($url, "acturial_notes")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science first year
	if(strpos($url, "notes_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science first year first semester
	if(strpos($url, "1_notes_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science first year second semester
	if(strpos($url, "2_notes_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science second year
	if(strpos($url, "notes_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science second year first semester
	if(strpos($url, "1_notes_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science second year second semester
	if(strpos($url, "2_notes_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science third year
	if(strpos($url, "notes_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturila science third year first semester
	if(strpos($url, "1_notes_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science third year second semester
	if(strpos($url, "2_notes_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science fourth year
	if(strpos($url, "notes_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science fourth year first semester
	if(strpos($url, "1_notes_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE acturial science fourth year second semester
	if(strpos($url, "2_notes_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'acturial_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//****************************************************************************************************************************************************
	//NOTES MODE applied statistics
	if(strpos($url, "sta_notes")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics first year
	if(strpos($url, "notes_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics first year first semester
	if(strpos($url, "1_notes_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics first year second semester
	if(strpos($url, "2_notes_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics second year
	if(strpos($url, "notes_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics second year first semester
	if(strpos($url, "1_notes_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics second year second semester
	if(strpos($url, "2_notes_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics third year
	if(strpos($url, "notes_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics third year first semester
	if(strpos($url, "1_notes_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics third year second semester
	if(strpos($url, "2_notes_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics fourth year
	if(strpos($url, "notes_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics fourth year first semester
	if(strpos($url, "1_notes_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//NOTES MODE statistics fourth year second semester
	if(strpos($url, "2_notes_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'class_notes' AND course = 'applied_statistics' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//***********************************************************************************************************************************************************
	//**********************************************************************************************************************************************************
	//PAST PAPER MODE
	if(strpos($url, "pastmode")){
		$sql_p = "SELECT * FROM biological_files WHERE file_category = 'past_paper' LIMIT 20;";
		$result_p = mysqli_query($connection, $sql_p);
		$all_files_data = mysqli_fetch_all($result_p, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science
	if(strpos($url, "com_past")){
		$sql_p = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' LIMIT 20;";
		$result_p = mysqli_query($connection, $sql_p);
		$all_files_data = mysqli_fetch_all($result_p, MYSQLI_ASSOC);
	}
	
	//PAST PAPER computer science first year
	if(strpos($url, "past_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science first year first semester
	if(strpos($url, "1_past_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science first year second semester
	if(strpos($url, "2_past_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science second year
	if(strpos($url, "past_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER computer science second year first semester
	if(strpos($url, "1_past_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science second year second semester
	if(strpos($url, "2_past_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science third year
	if(strpos($url, "past_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science third year first semester
	if(strpos($url, "1_past_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science third year second semester
	if(strpos($url, "2_past_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science fourth year
	if(strpos($url, "past_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science fourth year first semester
	if(strpos($url, "1_past_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE computer science fourth year second semester
	if(strpos($url, "2_past_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'computer_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*********************************************************************************************************************************************************
	
	//PAST PAPER MODE acturial science
	if(strpos($url, "act_past")){
		$sql_p = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' LIMIT 20;";
		$result_p = mysqli_query($connection, $sql_p);
		$all_files_data = mysqli_fetch_all($result_p, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science first year
	if(strpos($url, "past_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science first year first semester
	if(strpos($url, "1_past_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science first year second semester
	if(strpos($url, "2_past_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science second year
	if(strpos($url, "past_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science second year first semester
	if(strpos($url, "1_past_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science second year second semester
	if(strpos($url, "2_past_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science third year
	if(strpos($url, "past_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE actuarial science third year first semester
	if(strpos($url, "1_past_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science third year second semester
	if(strpos($url, "2_past_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science fourth year
	if(strpos($url, "past_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science fourth year first semester
	if(strpos($url, "1_past_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE acturial science fourth year second semester
	if(strpos($url, "2_past_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'acturial_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*********************************************************************************************************************************************************
	
	//PAST PAPER MODE applied statistics
	if(strpos($url, "sta_past")){
		$sql_p = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' LIMIT 20;";
		$result_p = mysqli_query($connection, $sql_p);
		$all_files_data = mysqli_fetch_all($result_p, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics first year
	if(strpos($url, "past_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics first year first semester
	if(strpos($url, "1_past_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics first year second semester
	if(strpos($url, "2_past_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics second year
	if(strpos($url, "past_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics second year first semester
	if(strpos($url, "1_past_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics second year second semester
	if(strpos($url, "2_past_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics third year
	if(strpos($url, "past_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics third year first semester
	if(strpos($url, "1_past_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics third year second semester
	if(strpos($url, "2_past_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics fourth year
	if(strpos($url, "past_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics fourth year first semester
	if(strpos($url, "1_past_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//PAST PAPER MODE statistics fourth year second semester
	if(strpos($url, "2_past_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'past_paper' AND course = 'applied_statistics' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*************************************************************************************************************************************************************
	//*************************************************************************************************************************************************************
	//WORKED EXAMPLE MODE
	if(strpos($url, "workedmode")){
		$sql_w = "SELECT * FROM biological_files WHERE file_category = 'worked_example' LIMIT 20;";
		$result_w = mysqli_query($connection, $sql_w);
		$all_files_data = mysqli_fetch_all($result_w, MYSQLI_ASSOC);
	}
	//WORKED EXAMPLE MODE computer science
	if(strpos($url, "com_worked")){
		$sql_w = "SELECT * FROM biological_files WHERE file_category = 'worked_example'  AND course = 'computer_science' LIMIT 20;";
		$result_w = mysqli_query($connection, $sql_w);
		$all_files_data = mysqli_fetch_all($result_w, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE computer science first year
	if(strpos($url, "worked_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science first year first semester
	if(strpos($url, "1_worked_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science first year second semester
	if(strpos($url, "2_worked_comp_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science second year
	if(strpos($url, "worked_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE computer science second year first semester
	if(strpos($url, "1_worked_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science second year second semester
	if(strpos($url, "2_worked_comp_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science third year
	if(strpos($url, "worked_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science third year first semester
	if(strpos($url, "1_past_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science third year second semester
	if(strpos($url, "2_worked_comp_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science fourth year
	if(strpos($url, "worked_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science fourth year first semester
	if(strpos($url, "1_worked_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE computer science fourth year second semester
	if(strpos($url, "2_worked_comp_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'computer_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//*************************************************************************************************************************************************************
	//WORKED EXAMPLE MODE acturial science
	if(strpos($url, "act_worked")){
		$sql_w = "SELECT * FROM biological_files WHERE file_category = 'worked_example'  AND course = 'acturial_science' LIMIT 20;";
		$result_w = mysqli_query($connection, $sql_w);
		$all_files_data = mysqli_fetch_all($result_w, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science first year
	if(strpos($url, "worked_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science first year first semester
	if(strpos($url, "1_worked_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science first year second semester
	if(strpos($url, "2_worked_act_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science second year
	if(strpos($url, "worked_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science second year first semester
	if(strpos($url, "1_worked_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science second year second semester
	if(strpos($url, "2_worked_act_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science third year
	if(strpos($url, "worked_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science third year first semester
	if(strpos($url, "1_worked_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science third year second semester
	if(strpos($url, "2_worked_act_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science fourth year
	if(strpos($url, "worked_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science fourth year first semester
	if(strpos($url, "1_worked_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE acturial science fourth year second semester
	if(strpos($url, "2_worked_act_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'acturial_science' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//***************************************************************************************************************************************************************
	
	//WORKED EXAMPLE  MODE applied statistics
	if(strpos($url, "sta_worked")){
		$sql_w = "SELECT * FROM biological_files WHERE file_category = 'worked_example'  AND course = 'applied_statistics' LIMIT 20;";
		$result_w = mysqli_query($connection, $sql_w);
		$all_files_data = mysqli_fetch_all($result_w, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics first year
	if(strpos($url, "worked_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics first year first semester
	if(strpos($url, "1_worked_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 1 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics first year second semester
	if(strpos($url, "2_worked_sta_1")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 1 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics second year
	if(strpos($url, "worked_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics second year first semester
	if(strpos($url, "1_worked_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 2 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics second year second semester
	if(strpos($url, "2_worked_sta_2")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 2 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics third year
	if(strpos($url, "worked_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 3 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics third year first semester
	if(strpos($url, "1_worked_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 3 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics third year second semester
	if(strpos($url, "2_worked_sta_3")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 3 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics fourth year
	if(strpos($url, "worked_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 4 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics fourth year first semester
	if(strpos($url, "1_worked_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 4 AND semester = 1 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	
	//WORKED EXAMPLE MODE statistics fourth year second semester
	if(strpos($url, "2_worked_sta_4")){
		$sql_n = "SELECT * FROM biological_files WHERE file_category = 'worked_example' AND course = 'applied_statistics' AND year = 4 AND semester = 2 LIMIT 20;";
		$result_n = mysqli_query($connection, $sql_n);
		$all_files_data = mysqli_fetch_all($result_n, MYSQLI_ASSOC);
	}
	//**************************************************************************************************************************************************************	
		//CODE THAT SEARCHES FOR A FILE
		if(isset($_POST['search'])){
			$key = mysqli_real_escape_string($connection, $_POST['key']);
			
			$sql_search = "SELECT * FROM biological_files WHERE description LIKE '%$key%' OR year = '$key' OR unit LIKE '%$key%';";
			$result_search = mysqli_query($connection, $sql_search);
			$all_files_data = mysqli_fetch_all($result_search, MYSQLI_ASSOC);
		}