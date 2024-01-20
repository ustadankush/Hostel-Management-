<?php

$username = $_GET['us'];
$pwd = $_GET['pw'];

if($username==0){
    echo "<h1> stranger error</h1>";

    header("Location: ../login_hostel_manager.php?error=strangeerr");
       
    exit;
}else{
    echo"welecome hostel manager";

}



?>



<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="manager_work.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <a href="logout.inc.php"><button class="logout"> Logout
</button>

</a>
    <h1> STUDENT DATA</h1>
<div class="table_work"><table border="2">
    <tr>
<th>PROFILE</th>
<TH>ROLL NO</TH>
<TH>FNAME</TH>
<TH>LASTNAME</TH>
<TH>MOBILE_NO</TH>
<TH>BRANCH</TH>
<TH>YEAR OF STUDY</TH>
<TH>EMAIL ADDRESS</TH>
<th>ROOM NUMBER</th>
<th>UPDATE</th>
<TH>ROOM(A)</TH>
<TH>ROOM(B)</TH>
<TH>DELETE</TH>
    </tr>
    
<?php

require 'config.inc1.php';

$query= "SELECT * FROM student";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total!=0){

    while($result=mysqli_fetch_assoc($data) ){
        
        echo"<tr>
        <td><img src='".$result['iname']."' height='42px' width='42px'></td>
    <td>".$result['Student_id']."</td>
    <td>". $result['Fname']."</td>
    <td>". $result['Lname']."</td>
    <td> ".$result['Mobile_no']."</td>
    <td> ".$result['branch']."</td>
    <td> ".$result['year_of_study']."</td>
    <td> ".$result['mail']."</td>
    <td> ".$result['room_no']."</td>
    <td><a href='update_studentdata.php?roll=$result[Student_id]&fn=$result[Fname]&ln=$result[Lname]&mobile=$result[Mobile_no]&stdbranch=$result[branch]&stdyear=$result[year_of_study]&email=$result[mail]&room_no=$result[room_no]'><button class='update'>Update</button></a></td>
    <td><a href='room_studentdata.php?roll=$result[Student_id]&fn=$result[Fname]&ln=$result[Lname]&mobile=$result[Mobile_no]&stdbranch=$result[branch]&stdyear=$result[year_of_study]&email=$result[mail]&room_no=$result[room_no]'><button class='update'>room(a)</button></a></td>
    <td><a href='room_studentdata2.php?roll=$result[Student_id]&fn=$result[Fname]&ln=$result[Lname]&mobile=$result[Mobile_no]&stdbranch=$result[branch]&stdyear=$result[year_of_study]&email=$result[mail]&room_no=$result[room_no]'><button class='update'>room(b)</button></a></td>
   
    <td><a href='delete_studentdata.php?roll=$result[Student_id]&room_no=$result[room_no]'><button class='update'>delete</button></a></td></tr>
";   
    
    }

?>
 </table></div>
 <a href="logout.inc.php"><button class="logout"> Logout
</button>

</a>















<table  class="workta"  border="2">

<tr>
    <th>ROOM (a)</th>

</tr>

<?php

$query1= "SELECT * FROM student_room1 WHERE room_no=0";
$data1=mysqli_query($conn,$query1);
$total=mysqli_num_rows($data1);
if($total!=0){

    while($result=mysqli_fetch_assoc($data1) ){




    echo "<tr><td>".$result['value']."</td></tr>";
}}

?></table>






<table class="worktb" border="2">

<tr>
    <th>ROOM(B)</th>

</tr>

<?php

$query2= "SELECT * FROM student_room2 WHERE room_no=0";
$data2=mysqli_query($conn,$query2);
$total=mysqli_num_rows($data2);
if($total!=0){

    while($result=mysqli_fetch_assoc($data2) ){




    echo "<tr><td>".$result['value']."</td></tr>";
}}

?></table>





</body>
</html>

<?php

}else
{

    echo "table have not record";
}
?>