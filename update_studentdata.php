<?php

include("config.inc1.php");

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
    $mobile = $_POST['Mobile_no'];
    $branch = $_POST['branch'];
    $mail = $_POST['mail'];
    $year = $_POST['year_of_study'];
  
$roomError ="";

    $query = "UPDATE student SET Student_id='$roll', Fname='$fname', Lname='$lname', Mobile_no='$mobile', branch='$branch', year_of_study='$year', mail='$mail'WHERE Student_id='$roll'";
    $data = mysqli_query($conn, $query);

    if($data){

        $roomError="ROOM Allocated!!";
   
    }

} 
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
                <h3 class="animate-charcter">Hostel Room Allocation System </h3>
            </div>
        </div>
    </div>
    <h2>Update Form</h2>


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
                <label>Mobile No</label>
                <div class="text">
                    <input type="text" class="form_control" value="<?php echo $mobile ?>" name="Mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class="std">
                <label>Branch</label>
                <div class="text">
                    <input type="text" list="ba" class="form_control" value="<?php echo $student_branch ?>" name="branch" placeholder="branch" required="required" />
                    <datalist id="ba"><option value="Computer Engineering"><option value="Architecture Engineering"><option value="Electronics Engineering"><option value=" Civil Engineering"></datalist>

                </div>
            </div>
            <div class="std">
                <label>Year Of Study</label>
                <div class="text">
                    <input type="text" list="year_of_study"  class="form_control" value="<?php echo $student_year ?>" name="year_of_study" placeholder="Year Of Study" required="required" />
                    <datalist id="year_of_study"><option value="1"><option value="2"><option value="3"></datalist>

                </div>
            </div>
            <div class="std">
                <label>Student Email</label>
                <div class="text"></div>
                <input type="text" class="form_control" value="<?php echo $student_email ?>" name="mail" placeholder="Email" required="required" />
            </div>
          
        
            <button class="btn" type="submit" name="update-submit">Update</button>
        </div>
        </div>
        </form>

    </div>
   
</body>

</html>
