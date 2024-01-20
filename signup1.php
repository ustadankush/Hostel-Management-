


<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="signup.inc.php" method="post" enctype="multipart/form-data">
<div class="all">
 <div class="roll"><label > Rollno:<input type="text" class="a" name="student_roll_info" placeholder="Roll No" required="required"/></label></div>

<div class="fname">First Name:<input type="text" class="a1" name="student_fname" placeholder="First Name" required="required"/></div>

<div class="lname">Last Name:<input type="text" class="a2" name="student_lname" placeholder="Last Name" required="required"/></div>
<br>
<div class="mobile">Mobile no:<input type="text"  class="a3"  name="Mobile_no" placeholder="Mobile No" required="required"/></div>

<div class="branch">Branch:<input type="text" list="ba" class="a3" name="branch" placeholder="Branch"  required="required" /></div>
<datalist id="ba"><option value="Computer Engineering"><option value="Architecture Engineering"><option value="Electronics Engineering"><option value=" Civil Engineering"></datalist>
<br>
<br>
<div class="year">Year:<input type="text" list="year_of_study" class="b1" name="year_of_study" placeholder="Year Of Study" required="required"/></div>
<datalist id="year_of_study"><option value="1"><option value="2"><option value="3"></datalist>
<div class="mail">Email ID:<input type="text" class="b" name="mail" placeholder="Email" required="required"/></div>
<div class="password"><label>Password:<input type="password" class="b2" name="pwd" placeholder="Password" required="required"/></label></div><br>
<div class="confirm"><label >Confirmpassword:</label>
<label><input type="password" class="b3" name="confirmpwd" placeholder="Confirm Password" required="required"/></label><br>
</div>

  <input type="file" class="imageuplod" name="image" >
<button class="btn" type="submit" name="signup-submit">Register</button>
<p class="links">Alerady a Member?<a href="index.php" class="register">Login</a></p>

<?php if(isset($_GET['error_image'])) echo"<p class='er'>{$_GET['error_image']}</p>";?>
<?php if(isset($_GET['error_roll'])) echo"<p class='er'>{$_GET['error_roll']}</p>";?>
<?php if(isset($_GET['error_fname'])) echo"<p class='er'>{$_GET['error_fname']}</p>";?>
<?php if(isset($_GET['error_lname'])) echo"<p class='er'>{$_GET['error_lname']}</p>";?>
<?php if(isset($_GET['error_mobile'])) echo"<p class='er'>{$_GET['error_mobile']}</p>";?>
<?php if(isset($_GET['error_year'])) echo"<p class='er'>{$_GET['error_year']}</p>";?>
<?php if(isset($_GET['error_mail'])) echo"<p class='er'>{$_GET['error_mail']}</p>";?>
<?php if(isset($_GET['error_pwd'])) echo"<p class='er'>{$_GET['error_pwd']}</p>";?>
</div>


<footer>
    <p class="copyright_info"> Dr . B . R . Ambdedkar ambota</p>
</footer>
    </form>

</body>
</html>