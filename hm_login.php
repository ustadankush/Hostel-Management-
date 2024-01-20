<?php
 
if (isset($_POST['login-submit'])) {

  require 'config.inc1.php';

  $username = $_POST['username1'];
  $password = $_POST['password1'];

  if (empty($username) || empty($password)) {
    header("Location: ../login_hostel_manager.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM hostel_manager WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['pwd']);
       if($pwdCheck == true ) {

        session_start();
        $_SESSION['username1'] = $row['username'];
        $_SESSION['password1'] = $row['pwd'];
       
       

        if(isset($_SESSION['username1'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        echo $_SESSION['password1'];
        header("Location: ../manager_work.php?login=success&us=$row[username1]&pw=$row[passwod1]");
        exit();
      }
      else {
        header("Location: ../login_hostel_manager.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../login_hostel_manager.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: /index.php?m");
  exit();
}
