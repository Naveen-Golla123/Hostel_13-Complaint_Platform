<?php
include("dbconnect.php");   
session_start();

    $roll=mysqli_real_escape_string($conn, $_POST["roll"]);
    $pass=mysqli_real_escape_string($conn, $_POST["password"]);
    $pass=md5($pass);
    $query="SELECT * FROM user WHERE (roll='$roll') AND (pass='$pass') AND (auth=2)";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0)
    {
        $_SESSION["roll"]=$roll;
        header("location:admin/index.php");
        echo '<script>alert("Loginin success")</script>';
    }
    else{
        header("location:index.php");
        echo '<script>alert("Login failed")</script>';
    }

?>