<?php
	error_reporting(0);
	session_start();
	include 'manage_biological.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Okolea Biological</title>
        <meta name="viewport"content="width=device-width,initial-scale=1.0"/>
		<link href="my-styles.css"rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="footer-styles.css"/>
		<script src = "jquery-3.4.1.min.js"></script>
<style>
        body{background:url('wasaga4.jpg');
		background-size:cover;
            overflow-x: hidden;
			}
 </style>
    </head>
    <body>
        <h1 style="background-color:white;opacity:0.7;text-align: center;padding-top: 0px;margin:0px;margin-bottom: 1px; color:maroon;text-shadow:0.5em;">
            <img id="logo" src="moilogo.png"alt="logo"width="50"height="50"style="position:relative;left:1px;top:12px;"/><p class = "okolea_title"> OKOLEA PLATFORM MOI UNIVERSITY(Biological)</p></h1>
 <label for="show-menu"class="show-menu">Menu</label>
 <input type="checkbox"id="show-menu"role="button"/>
      <nav class="menu"> 
 <ul id="navmenu">
        <li><a href="homepage.php">Home</a></li>
        <li><a href = "biological.php?notesmode">Notes</a>
            <ul class="sub1">
            <li><a href = "biological.php?notes_comp">Computer Sci</a>
               <ul class="sub2">
                <li><a href = "biological.php?notes_comp_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_notes_comp_1">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_comp_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?notes_comp_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_comp_2">sem 1</a></li>
                       <li><a href = "biological.php?2_notes_comp_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?notes_comp_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_comp_3">sem 1</a></li>
                       <li><a href = "biological.php?2_notes_comp_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?notes_comp_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_notes_comp_4">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_comp_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
           </li>
            <li><a href = "biological.php?acturial_notes">Actuarial Sci</a>
              <ul class="sub2">
                <li><a href = "biological.php?notes_act_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_notes_act_1">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_act_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?notes_act_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_act_2">sem 1</a></li>
                       <li><a href = "biological.php?2_notes_act_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?notes_act_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_act_3">sem 1</a></li>
                       <li><a href = "biological.php?2_notes_act_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?notes_act_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_notes_act_4">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_act_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            <li><a href = "biological.php?sta_notes">Statistics</a>
              <ul class="sub2">
                <li><a href = "biological.php?notes_sta_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_notes_sta_1">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_sta_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?notes_sta_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_sta_2">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_sta_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?notes_sta_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_notes_sta_3">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_sta_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?notes_sta_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_notes_sta_4">sem 1</a></li>
                      <li><a href = "biological.php?2_notes_sta_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            </ul>
        </li>
        <li><a href = "biological.php?pastmode">Past papers</a>
            <ul class="sub1">
            <li><a href = "biological.php?com_past">Computer Sci</a>
               <ul class="sub2">
                <li><a href = "biological.php?past_comp_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_past_comp_1">sem 1</a></li>
                      <li><a href = "biological.php?2_past_comp_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?past_comp_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_comp_2">sem 1</a></li>
                      <li><a href = "biological.php?2_past_comp_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?past_comp_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_comp_3">sem 1</a></li>
                      <li><a href = "biological.php?2_past_comp_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?past_comp_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_past_comp_4">sem 1</a></li>
                      <li><a href = "biological.php?2_past_comp_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
           </li>
            <li><a href = "biological.php?act_past">Actuarial Sci</a>
              <ul class="sub2">
                <li><a href = "biological.php?past_act_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_past_act_1">sem 1</a></li>
                      <li><a href = "biological.php?2_past_act_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?past_act_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_act_2">sem 1</a></li>
                       <li><a href = "biological.php?2_past_act_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?past_act_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_act_3">sem 1</a></li>
                      <li><a href = "biological.php?2_past_act_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?past_act_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_past_act_4">sem 1</a></li>
                      <li><a href = "biological.php?2_past_act_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            <li><a href = "biological.php?sta_past">Statistics</a>
              <ul class="sub2">
                 <li><a href = "biological.php?past_sta_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_past_sta_1">sem 1</a></li>
                      <li><a href = "biological.php?2_past_sta_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?past_sta_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_sta_2">sem 1</a></li>
                      <li><a href = "biological.php?2_past_sta_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?past_sta_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_past_sta_3">sem 1</a></li>
                      <li><a href = "biological.php?2_past_sta_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?past_sta_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_past_sta_4">sem 1</a></li>
                      <li><a href = "biological.php?2_past_sta_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            </ul>
        </li>
        <li><a href = "biological.php?workedmode">Worked Examples</a>
            <ul class="sub1">
            <li><a href = "biological.php?com_worked">Computer Sci</a>
               <ul class="sub2">
                 <li><a href = "biological.php?worked_comp_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_worked_comp_1">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_comp_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?worked_comp_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_comp_2">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_comp_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?worked_comp_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_comp_3">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_comp_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?worked_comp_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_worked_comp_4">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_comp_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
           </li>
            <li><a href = "biological.php?act_worked">Actuarial Sci</a>
              <ul class="sub2">
                 <li><a href = "biological.php?worked_act_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_worked_act_1">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_act_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?worked_act_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_act_2">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_act_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?worked_act_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_act_3">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_act_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?worked_act_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_worked_act_4">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_act_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            <li><a href = "biological.php?sta_worked">Statistics</a>
              <ul class="sub2">
                <li><a href = "biological.php?worked_sta_1">1<sup>st</sup>&nbsp;Year</a>
                 <ul class="sub3">
                      <li><a href = "biological.php?1_worked_sta_1">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_sta_1">sem 2</a></li>
                 </ul>
               </li>
               <li><a href = "biological.php?worked_sta_2">2<sup>nd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_sta_2">sem 1</a></li>
                       <li><a href = "biological.php?2_worked_sta_2">sem 2</a></li>
                 </ul>
               </li>
                <li><a href = "biological.php?worked_sta_3">3<sup>rd</sup>&nbsp;Year</a>
                <ul class="sub3">
                       <li><a href = "biological.php?1_worked_sta_3">sem 1</a></li>
                       <li><a href = "biological.php?2_worked_sta_3">sem 2</a></li>
                 </ul>
               </li>
                 <li><a href = "biological.php?worked_sta_4">4<sup>th</sup>&nbsp;Year</a>
                <ul class="sub3">
                      <li><a href = "biological.php?1_worked_sta_4">sem 1</a></li>
                      <li><a href = "biological.php?2_worked_sta_4">sem 2</a></li>
                 </ul>
               </li>
               </ul>
            </li>
            </ul>
        </li>
        
        </li>
        </ul>
<form class="search-form" action = "biological.php" method = "POST">
<input type="text" name = "key" placeholder="search"  style = "height: 35px; opacity: 0.7;" />
<button type = "submit" name = "search">Search</button>
</form>
</nav>
	<?php
		echo '<div class = "files" style = "position: relative; top: 100px;">';
				
								
										foreach($all_files_data as $single_file_data){
										$file_id = $single_file_data["file_id"];
										$file_name = $single_file_data["file_name"];
										$file_description = $single_file_data["description"];
										$course_code = $single_file_data["unit"];
										$year = $single_file_data["year"];
										$file_name_parts = explode('.', $file_name);
										$file_extension = strtolower(end($file_name_parts));
										
										
										if($file_extension == 'txt'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reptxt.png" class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
										}else if($file_extension == 'pdf'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/reppdf.jpg"  class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
										}else if($file_extension == 'docx'){
											echo '<div class = "file_container">';
												echo '<image src = "defaults/repdocx.png"  class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year:  '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
											}else if($file_extension == 'png' or $file_extension == 'jpg' or $file_extension == 'jpeg'){
												echo '<div class = "file_container">';
												echo '<image src = "pictures/'.$file_name.'" class = "file_image"><br/>';
												echo '<p>'.$course_code.'</p>';
												echo '<p class = "file_name">'.$file_name.'</p>';
												echo '<p> For year: '.$year.'</p>';
												echo '<p>'.$file_description.'</p>';
												echo '<a href = "homepage.php?file_id='.$file_id.'" class = "download_link">Download</a>';
											echo '</div>';
											}
										
									}
								echo '</div>';
		include 'footer.php';
	?>
</body>
</html>

<script>
	//ensure that all jquery code runs after loading of the page:
	$(document).ready(function(){
		//target the navigation menu
		$("#navmenu").hover(function(){
			$(".files").css({"position":"relative","top":"350px"});
		},
		function(){
			$(".files").css({"position":"relative","top":"100px"});
		});
	});
</script>