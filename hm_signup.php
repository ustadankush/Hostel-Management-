
  
<?php

if (isset($_POST['signup-submit'])) {

  require 'config.inc1.php';


  $username = $_POST['username1'];

  $password = $_POST['password1'];
  $confirmpassword = $_POST['confirmpassword'];
 

   if(!preg_match("/^[a-zA-Z]*$/",$username)){
    echo '<script>window.location="../signup1.php"; alert("correct first name int value and other symbol is not allowed ");</script>");';

      exit();
  }
  
  
  
  
 
 
  
 
  else if($password !== $confirmpassword){
    echo '<script>window.location="../signup1.php"; alert("password and confirm passsword not match ");</script>");';

    exit();
  
  
  }
  else if(!preg_match("/^[0-9]*$/",$password)){
  echo '<script>window.location="../signup1.php"; alert("only interger password contain ! ");</script>");';
 exit();
    }
    
  else {

    $sql = "SELECT username FROM hostel_manager WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup1.php?error=sqlerror");
      exit();
    }
  
  
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
       mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../signup1.php?error=userexists");
        exit();
      }
      else {
        $sql = "INSERT INTO hostel_manager (username , pwd) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup1.php?error=sqlerror");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ss",$username , $hashedPwd);
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

  echo '<script>window.location="../signup1.php"; alert("image errror");</script>");';


}



