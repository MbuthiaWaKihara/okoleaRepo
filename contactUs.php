<html>
    <head>
        <title>Contact us</title>
		<link rel="stylesheet" href="css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="footer-styles.css"/>
        <style>
            body{
                margin:0;
                padding:0;
                text-align:center;
                background:url('wasaga1.jpg')no-repeat;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            .contactUs{
                margin-top: 100px;
                color:maroon;
                text-transform: uppercase;
            }
            .contuctUs h1{
                font-size: 32px;
                line-height: 10px;

            }
            .contactUs h2{
                color:white;
                font-size: 16px;
            }
            form{
                margin-top: 50px;
            }
            .form-control{
                width:600px;
                background:rgba(236, 236, 243, 0.4);
                border:none;
                outline:none;
                border-top: 1px solid grey;
                color:black;
                font-size:18px;
                margin-bottom: 16px;
            }
            input{
                height:45px;
            }
            form .submit{
                background: rgb(143, 43, 43);
                border-color:transparent;
                color:white;
                font-size:20px;
                font-weight:bold;
                letter-spacing:2px;
                height:50px;
                margin-top: 20px;

            }
            form .submit:hover{
                background-color:green;
                opacity:0.8;
                cursor:pointer;
            }
            ::placeholder{/*Chrome,Firefox,Opera,Safari 10.1+*/
                color:black;
                opacity:0.7;/* 1 For firefox since it adds a lower opacity automatically*/
            }
            :-ms-input-placeholder{/*Internet explorer*/
                color:black;
                opacity:0.7;
            }
            ::-ms-input-placeholder{/*Microsoft Edge*/
                color:black;
                opacity:0.7;
            }
             #contactus h1{
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
                left:300px;

             }
             #home:hover{
                color:maroon;
                font-weight:bolder;
             }
         .contact-icons{
                color:white;
                height:200px;
                width:300;
                padding:30px;
                margin:0px;
                float:left;
                position:relative;
                font-size:18px;
                opacity:.8;
                position:absolute;
                top:280px;
                text-align:left;
                background:black;
            }

        </style>
    </head>
    <body>
    <div id="contactus">
      <h1>Contact&nbsp;Us</h1>
      <a id ="home" href="homepage.php">Home</a>
        </div>
    <div class="contact-icons"> 
       <ul>
           <li class="icons"><a href="#"><i id="fab" class="fab fa-facebook fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="fab fa-twitter fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="fab fa-instagram fa-2x" style="color:white;"></i>&nbsp okolea_mu</a></li>
           <li class="icons"><a href="#"><i class="far fa-envelope fa-2x" style="color:white;"></i>&nbsp okolea_mu@gmail.com</a></li>
           <li class="icons"><a href="#"><i class="fas fa-phone fa-2x" style="color:white;"></i></a>&nbsp 0705971336</li>
       </ul>
    </div>
        <div class="contactUs">
            <h1>Say Hello</h1>
            <h2>We are always ready to serve you!</h2>
        </div>
       </form>
    </div>
        <div class="contact-form">
            <form id="contact-form"method="post"action="contact-form handler.php">
            <input name="name"type="text"class="form-control"placeholder="Your Name"required> <br>
            <input name="email"type="email"class="form-control"placeholder="Your Email"required> <br>
            <textarea name="message"class="form-control"placeholder="Message"rows="4"required></textarea><br>
            <input type="submit"class="form-control submit"value="SEND MESSAGE"> <br>
            </form>
        </div>
		<?php
			include 'footer.php';
		?>
    </body>
</html>