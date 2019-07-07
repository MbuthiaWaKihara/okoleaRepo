<style type = "text/css">
	option{
	color: white;
	background-color: rgba(153,0,0,.9);
	}
	#upload-form ul li{
		color: maroon;
		font-weight: bolder;
	}
	.info{
		padding: 0px;
		margin: 0px;
		color: grey;
		font-size: 15px;
		border-radius: 8px;
	}
	.browse{
		border: 3px solid maroon;
		border-radius: 12px;
		max-length: 25%; 
		color: white;
		font-weight: bolder;
		background-color: rgba(153,0,0,.8);
		position: relative;
		left: 40px;
	}
	.errormessage{
		color: green;
		position: relative;
		top: 2px;
		left: 150px;
	}
	#press2{
		height: 35px;
		position: relative;
		top: 18px;
		border-radius: 0px 100px 0px 30px;
	}
</style>
<form action = "uploadhandle.php" method = "POST" name = "uploadsform" enctype = "multipart/form-data" id = "upload-form" onsubmit = "return validate()">
	<ul>
		<li>What kind of file do you want to upload? <select name = "file_type" class = "info">
				<option value = "">Select type of file</option>
				<option value = "picture_file">Picture file</option>
				<option value = "document_file">Document</option>
			</select>
		</li>
		<li><div class = "errormessage" id = "file_type_error"></div></li>
		<li>Your file falls in which category?<select name = "file_category" class = "info">
				<option value = "">Select category</option>
				<option value = "class_notes">Class Notes</option>
				<option value = "past_paper">Past Paper</option>
				<option value = "worked_example">Worked Example</option>
			</select>
		</li>
		<li><div class = "errormessage" id = "file_category_error"></div></li>
		<li>Which school is this upload intended for?<select class = "info" name = "school" onchange = "decideOptions(this.options[this.selectedIndex].value);">
				<option value = "">Select school</option>
				<option value = "engineering">School of Engineering</option>
				<option value = "biological">School of Biological</option>
			</select>
		</li>
		<li><div class = "errormessage" id = "school_error"></div></li>
		<li>Which course is the upload intended for?<select name = "course" id = "courses" class = "info"><option value = "">Select a school first</option></select></li>
		<li><div class = "errormessage" id = "course_error"></div></li>
		<li>Which academic year does the file belong to?<select name = "year" class = "info">
				<option value = "">Select year</option>
				<option value = "1">First Year</option>
				<option value = "2">Second Year</option>
				<option value = "3">Third Year</option>
				<option value = "4">Fourth Year</option>
			</select>
		</li>
		<li><div class = "errormessage" id = "year_error"></div></li>
		<li>Which semester?<select name = "semester"  class = "info">
				<option value = "">Select semester</option>
				<option value = "1">First Semester</option>
				<option value = "2">Second Semester</option>
			</select></li>
		<li><div class = "errormessage" id = "semester_error"></div></li>
		<li>Enter the course code<input type = "text" name = "unit" class = "info"></li>
		<li><div class = "errormessage" id = "unit_error"></div></li>
		<li>Briefly describe the file<textarea name = "description" class = "info"></textarea></li>
		<li><div class = "errormessage" id = "description_error"></div></li>
		<li>Select a file:<input type = "file" name = "upload" class = "browse"></li>
		<li><div class = "errormessage" id = "upload_error"></div></li>
		<li><button type = "submit" name = "submit" id = "press2" class = "form_send">Upload</button></li>
	</ul>
</form>
<script>
	//dynamic dropdown
	function decideOptions(chosenSchool){
		switch(chosenSchool) {
			case "engineering":
				document.getElementById("courses").options[0] = new Option("Select a course", "");
				document.getElementById("courses").options[1] = new Option("Chemical Engineering", "chemical_eng");
				document.getElementById("courses").options[2] = new Option("Mechanical Engineerng", "mechanical_eng");
				document.getElementById("courses").options[3] = new Option("Civil Engineering", "civil_eng");
				break;
			case "biological":
				document.getElementById("courses").options[0] = new Option("Select a course", "");
				document.getElementById("courses").options[1] = new Option("Computer Science", "computer_science");
				document.getElementById("courses").options[2] = new Option("Acturial Science", "acturial_science");
				document.getElementById("courses").options[3] = new Option("Applied Statistics", "applied_statistics");
				break;
		}
	}
	
	//form validation:
	//get all the input fields from the form:
	var file_type = document.forms["uploadsform"]["file_type"];
	var file_category = document.forms["uploadsform"]["file_category"];
	var school = document.forms["uploadsform"]["school"];
	var course = document.forms["uploadsform"]["course"];
	var year = document.forms["uploadsform"]["year"];
	var semester = document.forms["uploadsform"]["semester"];
	var unit = document.forms["uploadsform"]["unit"];
	var description = document.forms["uploadsform"]["description"];
	var upload = document.forms["uploadsform"]["upload"];
	
	//get all the divs with error message display:
	var file_type_error = document.getElementById("file_type_error");
	var file_category_error = document.getElementById("file_category_error");
	var school_error = document.getElementById("school_error");
	var course_error = document.getElementById("course_error");
	var year_error = document.getElementById("year_error");
	var semester_error = document.getElementById("semester_error");
	var unit_error = document.getElementById("unit_error");
	var description_error = document.getElementById("description_error");
	var upload_error = document.getElementById("upload_error");
	
	//set event listeners for all inputs in the form
	file_type.addEventListener("blur",fileTypeV,true);
	file_category.addEventListener("blur",fileCategoryV,true);
	school.addEventListener("blur",schoolV,true);
	course.addEventListener("blur",courseV,true);
	year.addEventListener("blur",yearV,true);
	semester.addEventListener("blur",semesterV,true);
	unit.addEventListener("blur",unitV,true);
	description.addEventListener("blur",descriptionV,true);
	upload.addEventListener("blur",uploadV,true);
	
	//write the validate function
	function validate(){
			if(file_type.value == ""){
			file_type.style.backgroundColor = "rgba(255, 51, 51, .3)";
			file_type.style.border = "4px solid maroon";
			file_type_error.innerHTML = "*Required. Please select a file type";
			file_type.focus();
			return false;
		}
		
		if(file_category.value == ""){
			file_category.style.backgroundColor = "rgba(255, 51, 51, .3)";
			file_category.style.border = "4px solid maroon";
			file_category_error.innerHTML = "*Required. Please select a file category";
			file_category.focus();
			return false;
		}
		
		if(school.value == ""){
			school.style.backgroundColor = "rgba(255, 51, 51, .3)";
			school.style.border = "4px solid maroon";
			school_error.innerHTML = "*Required. Please select a school";
			school.focus();
			return false;
		}
		
		if(course.value == ""){
			course.style.backgroundColor = "rgba(255, 51, 51, .3)";
			course.style.border = "4px solid maroon";
			course_error.innerHTML = "*Required. Please select a course";
			course.focus();
			return false;
		}
		
		if(year.value == "") {
			year.style.backgroundColor = "rgba(255, 51, 51, .3)";
			year.style.border = "4px solid maroon";
			year_error.innerHTML = "*Required. Please select year of study";
			year.focus();
			return false;
		}
		
		if(semester.value == ""){
			semester.style.backgroundColor = "rgba(255, 51, 51, .3)";
			semester.style.border = "4px solid maroon";
			semester_error.innerHTML = "*Required. Please select a semester";
			semester.focus();
			return false;
		}
		
		if(unit.value == ""){
			unit.style.backgroundColor = "rgba(255, 51, 51, .3)";
			unit.style.border = "4px solid maroon";
			unit_error.innerHTML = "*Required. Please select a unit";
			unit.focus();
			return false;
		}
		
		if(description.value == ""){
			description.style.backgroundColor = "rgba(255, 51, 51, .3)";
			description.style.border = "4px solid maroon";
			description_error.innerHTML = "*Required. Please select a description";
			description.focus();
			return false;
		}
		
		if(upload.value == ""){
			upload.style.backgroundColor = "rgba(255, 51, 51, .3)";
			upload.style.border = "4px solid maroon";
			upload_error.innerHTML = "*Required. Please browse your device for a file";
			upload.focus();
			return false;
		}
	}
	
	//write the event listeners functions:
	function fileTypeV() {
		if(file_type.value != "") {
			file_type.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			file_type.style.borderStyle = "inset";
			file_type.style.border = "";
			file_type_error.textContent = "";
			return true;
		}
	}
	
	function fileCategoryV() {
		if(file_category.value != "") {
			file_category.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			file_category.style.borderStyle = "inset";
			file_category.style.border = "";
			file_category_error.textContent = "";
			return true;
		}
	}
	
	function schoolV() {
		if(school.value != "") {
			school.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			school.style.borderStyle = "inset";
			school.style.border = "";
			school_error.textContent = "";
			return true;
		}
	}
	
	function courseV() {
		if(course.value != "") {
			course.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			course.style.borderStyle = "inset";
			course.style.border = "";
			course_error.textContent = "";
			return true;
		}
	}
	
	function yearV() {
		if(year.value != "") {
			year.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			year.style.borderStyle = "inset";
			year.style.border = "";
			year_error.textContent = "";
			return true;
		}
	}
	
	function semesterV() {
		if(semester.value != "") {
			semester.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			semester.style.borderStyle = "inset";
			semester.style.border = "";
			semester_error.textContent = "";
			return true;
		}
	}
	
	function unitV() {
		if(unit.value != "") {
			unit.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			unit.style.borderStyle = "inset";
			unit.style.border = "";
			unit_error.textContent = "";
			return true;
		}
	}
	
	function descriptionV() {
		if(description.value != "") {
			description.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			description.style.borderStyle = "inset";
			description.style.border = "";
			description_error.textContent = "";
			return true;
		}
	}
	
	function uploadV() {
		if(upload.value != "") {
			upload.style.backgroundColor = "rgba(236, 236, 243, 0.6)";
			upload.style.borderStyle = "inset";
			upload.style.border = "";
			upload_error.textContent = "";
			return true;
		}
	}
</script>