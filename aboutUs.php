<html>
    <head>
        <title>About Us</title>
		<link rel="stylesheet" href="css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="footer-styles.css"/>
        <style>
             body{
                    margin:0;
                    padding:0;
                    text-align:center;
                    background:url('waswaga.jpg');
                    background-size:cover;
                    background-position: center;
                    font-family: sans-serif;
                }
                .contactUs{
                margin-top: 100px;
                color: white;
                text-transform: capitalize;
                transition:all 4s ease-in-out;
                opacity:1;
                }
            .contuctUs h1{
                font-size: 32px;
                line-height: 10px;

               }
             .contactUs h2{
                font-size: 16px;
                color:white;
              }
             #aboutus h1{
                color:white;
                border-left:20px solid maroon;
                font-size:100px;
                font-weight:bolder;
                float:left;
                padding:0px;
                margin:0px;
              }
               #home{
                color:white;
                font-size:40px;
                font-weight:bold;
                text-decoration:none;
                position:relative;
                float:top;
                left:450px;

             }
             #home:hover{
                color:maroon;
             }
             #aboutus{
                 opacity:1;
             }
             #aboutcontainer{
                 border:none;
                 font-size:30px;
                 color:black;
                 display:flex;
                 font-weight:bolder;
                 padding:10px;
                 margin-bottom:0px;
                 text-align:center;
                 margin-left:100px;
                 margin-right:100px;
                 margin-top:100px;
             }
        </style>
    </head>
    <body>
        <div id="aboutus">
      <h1>About&nbsp;Us</h1>
      <a id ="home" href="homepage.php">Home</a>
        </div>
            <div class="contactUs">
                    <h1>Meet the developers of okolea</h1>
                    <h2>and get your website done as you watch</h2>
            <div id="aboutcontainer">
            <p>Okolea is a system aimed at helping comrades with their revision for the exams.Its enables one to share
                      files with others all with the focus of attaining good results.<br>
                      The developers are Wasaga Elisha,Evanson mbuthia and Samuel Kamau</p>
                </div>
	<?php
		include 'footer.php';
	?>
    </body>
</html>