<?php
session_start();
include("../dbconnect.php");
if(!(isset($_SESSION['roll'])))
{
    header("location:../index.php");
}
?>

<html>

<head>
<title>Contacts</title>
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
	background-image:url("../bit_back.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
	width:100%;
}
.container{
   margin-top:30px;
   margin-bottom:6s0px;
    height:auto;
    min-height:200px;
    background:rgba(255,255,255,0.7);
    border-radius:10px;
    

}
.side {
    
    position:relative;
}
a:hover
{
    background:red;
    color:white;
}
tr{
    height:10px;
    padding:0px;
}
th,td{
    padding-left:10px;
}

</style>
</head>


<body>

<div class="container">
<div class="row">
        <div class="col-sm-3 px-1 side">
            <div class="py-2 sticky-top flex-grow-1 ">
                <div class="nav flex-sm-column">
                <a href="index.php" class="nav-link d-none d-sm-inline">Feedback</a>
                    <a href="complaint.php" class="nav-link">New Complaint</a>
                    <a href="mycomplaint.php" class="nav-link">My Complaints</a>
                    <a href="Profile.php" class="nav-link">Details</a>
                    <a href="contact.php" class="nav-link">Contacts</a>
                    <a href="mess.php" class="nav-link">Mess Menu</a>
                    <a href="logout.php" class="nav-link">Logout</a>
                </div>
            </div>
        </div>
        <div class="col" id="main">
        <h1>Conatct</h1>
            <table class="table table-hover" >
                <thead style="background:rgba(10, 207, 81,0.7)">
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Warden1</td>
                        <td>Abcdefgh</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Warden2</td>
                        <td>Abcdefgh</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Warden3</td>
                        <td>Abcdefgh</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Clerk</td>
                        <td>Rambali</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Mess Secretary</td>
                        <td>Srijan Lath</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Mess Member</td>
                        <td>Shreyas</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Mess Member</td>
                        <td>Harshit Raj</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Mess Member</td>
                        <td>Harshit Raj</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Mess Member</td>
                        <td>Harshit Raj</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Maintenance Secretary</td>
                        <td>Naveen Golla</td>
                        <td>8919817171</td>
                    </tr>
                    <tr>
                        <td>Network Secretary</td>
                        <td>Yaswanth Divvela</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sports Secretary</td>
                        <td>Murali Vikas Reddy</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Reading Room Secretary</td>
                        <td>Aman Kumar</td>
                        <td>0000000000</td>
                    </tr>
                    <tr>
                        <td>Cultural Secretary</td>
                        <td>Arpit Anand</td>
                        <td>0000000000</td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>
</body>

</html>

