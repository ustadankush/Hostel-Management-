<?php

if (isset($_POST['signup-submit'])) {

  require 'config.inc1.php';

  $roll = $_POST['student_roll_info'];
  $fname = $_POST['student_fname'];
  $lname = $_POST['student_lname'];
  $mobile = $_POST['Mobile_no'];
  $branch = $_POST['branch'];
  $mail =$_POST['mail'];
  $year = $_POST['year_of_study'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];
  $img_name=$_FILES["image"]["name"];
  $img_loc=$_FILES["image"]["tmp_name"];
$uname=$_POST["student_fname"];
$img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
$iname="ankushjoshiimage/".$uname.".".$img_ext;
if(move_uploaded_file($img_loc,$iname)){


  if(!preg_match("/^[0-9]*$/",$roll)){
    header("Location: ../signup1.php?error_roll=enter valid integer roll number ");

    
    exit();
  }
  else if(!preg_match("/^[a-zA-Z]*$/",$fname)){
    header("Location: ../signup1.php?error_fname=correct first name int value and other symbol is not allowed ");

    
      exit();
  }
  else if(strlen($fname)>15){
    
    header("Location: ../signup1.php?error_fname= correct first name only atleast 15 word allowed");

      exit();
  }
  else if(!preg_match("/^[a-zA-Z]*$/",$lname)){
    header("Location: ../signup1.php?error_lname=correct last name  int value and other symbol not allowed  ");
    
      exit();
  }
  else if(strlen($lname)>7){
    
    header("Location: ../signup1.php?error_lname= correct last name only atleast 7 word allowed");
    
      exit();
  }
  else if(!preg_match("/^[0-9]*$/",$mobile)){
    header("Location: ../signup1.php?error_mobile= enter valid  mobile number[ a-z ] and symbol not allowed");
    
      exit();
  }
  else if(strlen($mobile)!==10){
    header("Location: ../signup1.php?error_mobile= enter valid number");
    
      exit();
  }
  else if(!preg_match("/^[0-3]*$/",$year)){
    header("Location: ../signup1.php?error_year= only year 1,2,3 allowed");
   

      exit();
  }
  
  else if(!filter_var($mail, FILTER_VALIDATE_EMAIL) )
{ header("Location: ../signup1.php?error_mail= incorrrect email error  (name@gmail.com)");
     
      
   
    exit();
  }
  else if($password !== $cnfpassword){
    header("Location: ../signup1.php?error_pwd= password and confirm passsword not match ");
   
    exit();
  
  
  }
  else if(!preg_match("/^[0-9]*$/",$password)){
    header("Location: ../signup1.php?error_pwd= only interger password contain ! ");
 exit();
    }
    
  else {

    $sql = "SELECT Student_id FROM student WHERE Student_id=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup1.php?error=sqlerror");
      exit();
    }
  
  else if(!filter_var($mail, FILTER_VALIDATE_EMAIL) )
{
  header("Location: ../signup1.php?error_mail= email error ! ");

      echo '<script>window.location="../signup1.php"; alert("email error");</script>");';
   
      
   
    exit();
  }
  
    else {
      mysqli_stmt_bind_param($stmt, "s", $roll);
      mysqli_stmt_execute($stmt);
       mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../signup1.php?error=userexists");
        exit();
      }
      else {
        $sql = "INSERT INTO student (Student_id, Fname, Lname, Mobile_no, branch, Year_of_study, mail ,pwd, iname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup1.php?error=sqlerror");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssssssss",$roll, $fname, $lname, $mobile, $branch, $year, $mail, $hashedPwd, $iname);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?signup1=success");
          exit();
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else{

  header("Location: ../signup1.php?error_image=image errror");


}

}else {
  header("Location: ../signup1.php");
  }


