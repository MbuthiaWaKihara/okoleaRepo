# okoleaRepo
Repository for Okolea Platform, for Computer Science Project 1, CS, Moi University

Name: OKOLEA PLATFORM MOI UNIVERSITY
Author(s): KIHARA EVANSON MBUTHIA (Backend -> PHP, Frontend -> JS and JQUERY)
		 : WASAGA ELISHA OPIYO (Frontend -> HTML, CSS)
	
BRIEF PROJECT DESCRIPTION
Okolea platform is a website that intends to solve the problem of file sharing in higher learning institutions

Users can log into the website as administrators or as students. In our project, target audience was Moi University students.
We intended that all administrators be class representatives for the different courses that are offered inside Moi University.
These class representatives have accounts which are created and modified by the maintainers of the website.
Administrators are the only ones allowed to upload files(learning materials) to the website.
The suggest upload feature allows for students to suggest a file for upload into the website, but these suggested files have to be verified by a relevant
administrator before they can be visible and available for download by all other users.

FILES AND PROJECT STRUCTURE
The file index.php is the beginning of running of the website. The file simply redirects to homepage.php. We wrote the file just incase, in future, the website needs 
to be hosted.
homepage.php has all the functionalities, that is upload system, suggest upload system, verify suggestions system and the delete files system.
homepage.php is also used for display of files, for users to upload.
manage_homepage.php is where all code for all functionalities inside the homepage is written. This file is then included inside the homepage.

engineering.php and biological.php are very similar in structure. They are simply used for filter purposes. By filter we mean the ability to narrow down 
to a specific upload among many uploads.
both of these files have a manage_* file that is used for the logic behind the filter.

REQUIREMENTS TO RUN THE WEBSITE LOCALLY
We have included an okolea_db.docx file that has the code for setting up the website's database. The website uses MYSQL as its DBMS.
You will need a local server to run the website on your computer, and a database named okolea, set up as described inside the file mentioned above.
