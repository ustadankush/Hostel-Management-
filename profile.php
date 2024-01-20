




<?php

(require 'config.inc1.php')




?>



<!DOCTYPE html>
<html lang="en">
    
<head><link rel="stylesheet" href="profile.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<div class="frame">STUDENT PROFILE</div>
<div class="box"><a href="../home.php"><button class="BACKTOHOME"> BACK</button></a>
</div>

<div class="frame2"><div class="framename2">Student information</div>
<ul>

    <li><label>STUDENT ROLL No</label></li>
    <p><?php echo $_SESSION['roll']; ?></p><hr>
    <li><label>STUDENT NAME</label></li>
    <p><?php  echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname']?></p>
    <hr>
    <li><label>STUDENT MOBILE NUMBER</label></li>
    <p><?php echo $_SESSION['mobile_no'] ?></p><hr>
    
    <li><label>STUDENT BRANCH</label></li>
    <p><?php echo $_SESSION['branch']; ?></p><hr>
    <li><label>STUDENT YEAR</label></li>
    <p><?php echo $_SESSION['year_of_study']; ?></p><hr>
    <li><label>STUDENT EMAIL</label></li>
    <p><?php echo $_SESSION['mail']; ?></p><hr>
    

    
       <li><label class="new">STUDENT ROOM NUMBER</label></li> 
      <p> <?php
        $query= "SELECT * FROM student WHERE Student_id='$_SESSION[roll]' ";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        $result=mysqli_fetch_assoc($data);
        echo $result['room_no']; ?></p> 
    
</ul>
</div>
<div class="frame1"><div class="framename1">Student image</div>

<img src="<?php echo $_SESSION['iname']; ?>" width="100%"  >


</div>






</body>
</html>