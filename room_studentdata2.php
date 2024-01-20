<?php

include("config.inc1.php");
$b=0;
$a=null;
$rollno = $_GET['roll'];
$firstname = $_GET['fn'];
$lastname = $_GET['ln'];
$mobile = $_GET['mobile'];
$student_branch = $_GET['stdbranch'];
$student_year = $_GET['stdyear'];
$student_email = $_GET['email'];
$room_number=$_GET['room_no'];


if (isset($_POST['update-submit'])) {
    $roll = $_POST['student_roll_info'];
    $fname = $_POST['student_fname'];
    $lname = $_POST['student_lname'];
    
    $branch = $_POST['branch'];
    $year = $_POST['year_of_study'];
    $roomdata = $_POST['room_nos'];

if($roomdata>12)
{


echo '<script> alert(" only 12 room space contain ");</script>");';
exit();

}
else{

    $query1 = "UPDATE student_room1 SET room_no='0' ,Student_id='0', Fname=null, Lname='0', branch=null, year_of_study='0'   WHERE Student_id='$roll'";
    $data1 = mysqli_query($conn, $query1);
    
    $query2 = "UPDATE student_room2 SET room_no='0' ,Student_id='0', Fname=null, Lname='0', branch=null, year_of_study='0'   WHERE Student_id='$roll'";
    $data2 = mysqli_query($conn, $query2);
    $query2 = "UPDATE student_room2 SET room_no='$roomdata' ,Student_id='$roll', Fname='$fname', Lname='$lname', branch='$branch', year_of_study='$year'   WHERE value='$roomdata'";
    $data2 = mysqli_query($conn, $query2);


    $query = "UPDATE student SET room_no='$roomdata' WHERE Student_id='$roll'";
    $data = mysqli_query($conn, $query);

    if ($data & $data1 & $data2 ) {
        header("Location: ../manager_work.php?login=success&us=$row[username1]&pw=$row[passwod1]");
      
       exit();
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="update_student.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="hosteleffect">Hostel Room Allocation System </h3>
            </div>
        </div>
    </div>
    <h2 class="updateform">room Allocation Form B</h2>


    <div class="totalframe">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="std">
                <label>Student Roll No</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $rollno ?>" name="student_roll_info" placeholder="Roll No" required="required" />
                </div>
            </div>
            <div class="std">
                <label>First Name</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $firstname ?>" name="student_fname" placeholder="First Name" required="required" />
                </div>
            </div>
            <div class="std">
                <label>Last Name</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $lastname ?>" name="student_lname" placeholder="lastname" required="required" />
                </div>
            </div>
            
            <div class="std">
                <label>Branch</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $student_branch ?>" name="branch" placeholder="branch" required="required" />
                </div>
            </div>
            <div class="std">
                <label>Year Of Study</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $student_year ?>" name="year_of_study" placeholder="Year Of Study" required="required" />
                </div>
            </div>
            
            <div class="std">
                <label>Student ROOM Number</label>
                <div class="text"></div>
                <input type="text" class="form_control" value="<?php echo $room_number ?>" name="room_nos" placeholder="ROOM NUMBER" required="required" />
            </div>
     
            
    
        
            <button class="btn" type="submit" name="update-submit">Update</button>
        </div>
        </div>
        </form>

    </div>

</body>

</html>
