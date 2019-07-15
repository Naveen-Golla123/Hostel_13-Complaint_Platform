<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style>
body{
	background-image:url("bit_back.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
	width:100%;
}
.container{
	background-color:rgba(255,255,255,0.7);
	width:400px;
	height:550px;
	margin: 90px auto auto 550px;
	max-width: 500px;
	overflow: hidden;
	position: absolute;
	padding: 0;
	border-radius:9px;
}
.forms h1 {
	padding: 0 0 20px 0;
	font-size: 26px;
	color: #666;
	font-weight: lighter;
	text-align: center;
}
.forms form { padding: 30px; }
#signup { display: none; }
.forms .tab-group {
	list-style: none;
	padding: 0;
	margin: 0;
}
.forms .tab-group:after {
	content: "";
	display: table;
	clear: both;
}
.forms .tab-group li a {
	display: block;
	text-decoration: none;
	padding: 15px;
	background: #e5e6e7;
	color: #888;
	font-size: 20px;
	float: left;
	width: 50%;
	text-align: center;
	border-top: 3px solid transparent;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}
.forms .tab-group li a:hover {
	background: #dedfdf;
	color: #666;
}
.forms .tab-group .active a {
	background: #fff;
	color: #444;
	border-top: 3px solid #73cf41;
}
.forms input {
	font-size: 16px;
	display: block;
	width: 100%;
	padding: 10px 20px;
	border: 1px solid #ddd;
	color: #666;
	border-radius: 0;
	margin-bottom: 10px;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}
.forms input:focus {
	outline: 0;
	border-color: #2e5ed7;
}
.forms label {
	font-size: 16px;
	font-weight: normal;
	color: #666;
	margin-bottom: 5px;
	display: block;
}
.forms .button {
	border: 0;
	outline: none;
	border-radius: 0;
	padding: 10px 0;
	font-size: 18px;
	font-weight: 300;
	text-transform: uppercase;
	letter-spacing: 2px;
	background: #73cf41;
	color: #ffffff;
	cursor: pointer;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}
.forms .button:hover, .button:focus { background: #56ae26; }
.text-p { text-align: right; }
.text-p a { color: #1383ea; }



</style>
</head>
<body>
	<button class="btn btn-info" style="margin:60px auto auto 340px;position:absolute" onclick="location.href='index.php';">Back to Login</button>
<div class="container">

	<div class="forms">
		
		<form action="register.php" id="login" method="POST">
          <h1>Student Registration</h1>
          <div class="input-field">
            
            <input type="text" name="name" required placeholder="Name"/>
            
            <input type="text" name="roll" required placeholder="Roll(BE/10XXXs/1X)"/>

            <input type="password" name="password" required placeholder="Password"/>

            <input type="password" name="confpassword" required placeholder="Confirm Password"/>

            <input type="text" name="room" required placeholder="Room no"/>
            
            <input type="tel" name="mobile" required placeholder="Mobile Number"/>
            
            <input type="tel" name="altMobile" required placeholder="Alternate Mobile Number"/>
            
            

            <input type="submit" name="register" value="register" class="button"/>
            
          </div>
           </form>
		
		   <?php
include("dbconnect.php");
session_start();
if(isset($_POST["register"]))
{

        $name=mysqli_real_escape_string($conn, $_POST["name"]);
        $roll=mysqli_real_escape_string($conn, $_POST["roll"]);
        $mobile=mysqli_real_escape_string($conn, $_POST["mobile"]);
        $room=mysqli_real_escape_string($conn, $_POST["room"]);
        $pass=mysqli_real_escape_string($conn, $_POST["password"]);
        $confpass=mysqli_real_escape_string($conn, $_POST["confpassword"]);
       
        if(!($pass==$confpass)){
            echo '<script>alert("Password not matched!");</script>';
        }
        else{
            $pass= md5($pass);
            $query = "INSERT INTO user (roll,name,mobile,room,pass,auth) VALUES('$roll', '$name','$mobile','$room','$pass',1)";
            if(mysqli_query($conn, $query))  
            {  
				header("location:index.php");
				echo '<script>alert("Resistered Successfully");</script>';
				
            }   

        }
}

?>
      
	
</div>

</body>
</html>

