<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc1.php';

  $roll = $_POST['student_roll_info'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM student WHERE Student_id = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['pwd']);
      if($pwdCheck == false){
        header("Location: ../index.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        session_start();
        $_SESSION['roll'] = $row['Student_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['mobile_no'] = $row['Mobile_no'];
        $_SESSION['branch'] = $row['branch'];
        $_SESSION['year_of_study'] = $row['year_of_study'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['iname'] = $row['iname'];
        if(isset($_SESSION['branch'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        echo $_SESSION['Lname'];
        header("Location: ../home.php?login=success");
        exit();
      }
      else {
        header("Location: ../index.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: /index.php");
  exit();
}
