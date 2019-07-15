<?php
session_start();
include("../dbconnect.php");
if(!(isset($_SESSION['roll'])))
{
  header("location:../index.php");
}
else{
    $roll=$_SESSION['roll'];
    $query="SELECT * FROM user WHERE roll='$roll'";
    $data=mysqli_query($conn,$query);
    $res=mysqli_fetch_array($data);
    if($res['auth']!=2){
        header("location:../index.php");
    }
}
?>

<html>

<head>
<title>Home Page</title>
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
section {
    padding: 40px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
    height:auto;
}
#tabs{
	background:rgba(255,255,255,0.7);
    color: black;
    margin:50px 50px auto 90px;
    border-radius:15px;
}
#tabs h4.section-title{
    
    color: black;
    position:relative;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: black;
    background-color:rgba(240, 64, 21,0.8);
    border-color: transparent transparent rgba(10, 207, 81,0.7);
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: black;
    font-size: 20px;
}
.compBox{
    background:rgba(255,255,255,0.8);
    border-radius:10px;
    box-shadow:0px 0px 7px black;
}

</style>
</head>


<body>

<section id="tabs">
	<div class="container">
        <div class="row">
            <div class="col-xs-10">
            <h4 class="section-title h4">Compalaints/Feedback</h4>
            </div>
            <div class="col-xs-2">
            <button class="btn btn-info" style="margin-left:680px;" onclick="location.href='logout.php';">Logout</button>
            </div>
        </div>
    	<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mess</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Maintenance</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Sports</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Network</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM complaint ORDER BY `time`  DESC";
                                    $res=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($res);
                                    if($rowcount==0){
                                        echo "<h4>No Complaint yet registered</h4>";
                                    }
                                    while($data=mysqli_fetch_array($res)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='Mess' ORDER BY `time`  DESC";
                                    $mess=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($mess);
                                    if($rowcount==0){
                                        echo "<h4>No Complaint yet registered</h4>";
                                    }
                                    while($data=mysqli_fetch_array($mess)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='Maintenance' ORDER BY `time`  DESC";
                                    $res=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($res);
                                    if($rowcount==0){
                                        echo "<h2>No Complaint yet registered</h2>";
                                    }
                                    while($data=mysqli_fetch_array($res)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='sports' ORDER BY `time`  DESC";
                                    $res=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($res);
                                    if($rowcount==0){
                                        echo "<h2>No Complaint yet registered</h2>";
                                    }
                                    while($data=mysqli_fetch_array($res)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='Sports' ORDER BY `time`  DESC";
                                    $res=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($res);
                                    if($rowcount==0){
                                        echo "<h2>No Complaint yet registered</h2>";
                                    }
                                    while($data=mysqli_fetch_array($res)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='Network' ORDER BY `time`  DESC";
                                    $net=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($net);
                                    if($rowcount==0){
                                        echo "<h2>No Complaint yet registered</h2>";
                                    }
                                    while($data=mysqli_fetch_array($net)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <?php
                                    $roll=$_SESSION['roll'];
                                    $query="SELECT * FROM `complaint` WHERE category='Others' ORDER BY `time`  DESC";
                                    $other=mysqli_query($conn,$query);
                                    $rowcount=mysqli_num_rows($other);
                                    if($rowcount==0){
                                        echo "<h2>No Complaint yet registered</h2>";
                                    }
                                    while($data=mysqli_fetch_array($other)){
                                    echo "<div class='container compBox'><p style='font-size:18px;
                                    font-family:Special Elite;margin-top:10px;'>".$data['comp']."</p><hr style='border:1px solid gray;margin:2px;padding:0px;'/>
                                    <h4 style='color:rgb(0, 0, 102)
                                    font-family:Krub;font-size:13px;text-transform:capitalize;display:inline-block;'>".$data['category']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;margin-left:0px;display:inline-block;'>".$data['date']." , </h4>
                                    <h4 style='color:rgb(0, 0, 102);
                                    font-family:Krub;font-size:11px;display:inline-block;'>".$data['time']." </h4>
                                    </div>";
                                    }
                            ?>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</section>


</body>

</html>

