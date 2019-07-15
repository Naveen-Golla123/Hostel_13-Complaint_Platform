<?php
extract($_POST);
session_start();
include("../dbconnect.php");
if(!(isset($_SESSION['roll'])))
{
    header("location:../index.php");
}


?>
<html>

<head>
<title>Mess Menu</title>
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
   margin-bottom:70px;
    width:auto;
    height:auto;
    min-height:200px;
    background:rgba(255,255,255,0.7);
    border-radius:10px;
    

}
.side {
    border-right:2px solid black;
    position:relative;
}
a:hover
{
    background:red;
    color:white;
}

tr,th,td{
    border:3px solid black;
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
                    <a href="mess.php" class="nav-link">Mess Memu</a>
                    <a href="logout.php" class="nav-link">Logout</a>
                </div>
            </div>
        </div>
        <div class="col" id="main">
        <h1>Mess Menu</h1>
            <table class="table table-bordered" >
                <thead >
                <tr>
                    <th></th>
                    <th>BreakFast<br>(7:30 AM to 9:00 AM)</th>
                    <th>Lunch<br>(12:00 PM to 1:30 PM)</th>
                    <th>Snacks<br>(5:00 PM to 6:00 PM)</th>
                    <th>Dinner<br>(8:30 PM to 10:00 PM)</th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>Bread, Butter/Jam,Omelette/Milk, Tea</td>
                        <td>Veg Seasonal, Sprout, Rice, Dal, Roti,Boondi Raita</td>
                        <td>Pasta(Red/White),Tea</td>
                        <td>Masala Parantha, Aloo Dum,Rice,Roti</td>


                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>Puri,Kala Chana Sabji, Tea</td>
                        <td>Rice , Rajma , French Fries,Roti</td>
                        <td>Cheese sandwich</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>Idli, Sambhar, CoconutChutney, Tea</td>
                        <td>Rice, roti, Curry, Aloo Jeera</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>Puri,Kala Chana Sabji, Tea</td>
                        <td>Rice , Rajma , French Fries,Roti</td>
                        <td>Cheese sandwich</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Puri,Kala Chana Sabji, Tea</td>
                        <td>Rice , Rajma , French Fries,Roti</td>
                        <td>Cheese sandwich</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>Puri,Kala Chana Sabji, Tea</td>
                        <td>Rice , Rajma , French Fries,Roti</td>
                        <td>Cheese sandwich</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>Puri,Kala Chana Sabji, Tea</td>
                        <td>Rice , Rajma , French Fries,Roti</td>
                        <td>Cheese sandwich</td>
                        <td>Soya bean chilly , Mix Dal, ButterRoti, Ice-Cream</td>
                    </tr>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>


</html>

