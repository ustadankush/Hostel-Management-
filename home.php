


<?php


require 'config.inc1.php';

?>



<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <img src="SUKHU.png"   height="8%" width="100%" alt="">
  <div class="frame2"><img  class="imgs"src="logo.jpg" alt="" style="width: 7%"> 
<p class="br">DR .BR, Ambedkar Polytechnic Ambota</p></div>
<div class="frame3">

<nav class="style"><a href="profile.php"><button class="btn">Profile</button></a></nav>
<nav class="style"><a href="about.php"><button class="btn">About</button></a></nav>

<nav class="style"><a  href="logout.inc.php"><button class="btn">Logout</button></a></nav>
</nav>

</div>

<div class="frame4">

<div class="framename">student please waiting your room allocation please communicate hostel manager</div>
</div>
<div class="framegrid">
<div class="frame5"><div class="f5name">Photos/image</div>
<img src="newimage.jpg" class="oneimg"  height="55%" width="76% ">
<br>


<div class="allimage"> Hostel image Polytechnic Ambota..</div>
</div>
<div class="principalborder">

<img src="principal1.jpg" width="5%" class="pimage" alt="">
<div class="principal_sir">
  
    Dr. B. R. Ambedkar, Govt. Polytechnic Ambota is expected to blossom into an institution par excellence and working efficiently to achieve proficiency in technical education. Since technical education determines the development and socio-economic condition of a nation, there is greater need for high quality technical education to produce technically skilled manpower in India. A high quality engineer or technician can obviously be created only through high quality engineering and vocational teaching and training. To keep up with changing industrial environment, we need to produce Diploma holder with high level of skill.
<pre>                      -Pardeep Kumar</pre>

</div>
</div>

<img src="front.jpg"   class="oneimageframe" alt=""  height="65%" width="30% ">
</div>

<div class="indexbox"><div class="indexname">INDEX</div>
<p class="indexinfo">21-09-23 Hostel clean day <hr></p>
<p class="indexinfo">2-10-23 hostel night! <hr></p>
<p class="indexinfo"> 2-04-23 Health day!</p>

</div>
<div class="classimage">
<div class="w3-content w3-section"   style="max-width:60%">
  <img class="mySlides" src="front.jpg" style="width:150% ">
  <img class="mySlides" src="ankush.jpg" style="width:150%  ">
  <img class="mySlides" src="front.jpg" style="width:150% ">
</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "grid";  
  setTimeout(carousel, 2000);    
}
</script>

<div class="gridset">
<div class="mission"><div class="missionname">MISSION</div>
<P class="thought">"beti bchao beti pdhao"</P>
<P class="thought">"Nsha mukt zindagi"</P>
<P class="thought">"Swach Bharat Abhiyan"</P>
</div>
<div class="othersites"><div class="othersitename">Other Sites</div></div>

</div>

<footer>
<P class="ftextwork">HOSTEL MANAGEMENT SYSTEM</P>
<P class="ftextwork">Dr. B. R. Ambedkar, Govt. Polytechnic Ambota</P>
<P class="ftextwork">POWERED BY ANKUSHJOSHI TEAM!!!</P>
<H1>TEAM INFO</H1>
<P class="ftextworks">Computer Engineering Student 5th sem </P>






</footer>
</body>
</html>