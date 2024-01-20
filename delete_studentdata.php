<?php

include("config.inc1.php");
$roomdata=0;
$roll=0;
$fname=NULL;
$lname=NULL;
$branch=NULL;
$year=0;

$rollno=$_GET['roll'];
$room_number=$_GET['room_no'];
$query = "UPDATE student_room1 SET room_no='$roomdata' ,Student_id='$roll', Fname='$fname', Lname='$lname', branch='$branch', year_of_study='$year'   WHERE Student_id='$rollno'";
$data1=mysqli_query($conn,$query);

$query2 = "UPDATE student_room2 SET  room_no='$roomdata' ,Student_id='$roll', Fname='$fname', Lname='$lname', branch='$branch', year_of_study='$year'   WHERE Student_id='$rollno'";
$data2=mysqli_query($conn,$query2);
if($data1 & $data2){



    echo"<h1>data is Update<h1>";
    
    }
    else{
    
    
    
    echo "not deletd ";
    
    }
    

$query="DELETE FROM student WHERE Student_id='$rollno'";

$data=mysqli_query($conn,$query);

if($data){

    header("Location: ../manager_work.php?login=success&us=$row[username1]&pw=$row[passwod1]");
        
       
    exit();



}
else{



echo "not deletd ";

}








?>