<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>

<div class="w3-container w3-olive">
    <img src="logo.png" alt="Person" style="padding:7px;width:110px" class="w3-round-xlarge">




<div class="w3-display-topright">

  <div class="w3-circle" style="width:85px">
    <img src="img_avatar3.png"  alt="Person" style="padding:7px;width:85px" class="w3-circle" onclick="toggleMenu()"  >
  
<?php include("menu.php"); ?>






</div>



<div class="w3-container">

</div>

</div>

</div>

 <div class="w3-container w3-light-grey">




<a href= "./chinese.htm" class="w3-bar-item w3-button w3-round-large"><h1>chinees</h1> 
<img src="general-tso-chicken.webp" class="w3-round-large" width="400px" height="300px>
<a href="./chinese.htm" class="image-button">
    <span> </span>
</a>
</a>


<script>
function toggleMenu() {
  document.getElementById("mySidebar").classList.toggle("w3-show");
}

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html> 
