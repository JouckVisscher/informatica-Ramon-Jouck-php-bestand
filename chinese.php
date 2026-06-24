<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>

<div class="w3-container w3-olive">
    <img src="logo.png" alt="logo" style="padding:7px;width:110px" class="w3-round-xlarge">




<div class="w3-display-topright">
 
  <div class="w3-circle" style="width:85px">
    <img src="img_avatar3.png"  alt="Person" style="padding:7px;width:85px" class="w3-circle" onclick="toggleMenu()"  >
 
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right w3-text-black" style="width:200px;right:0;" id="mySidebar">
  <a href="./index.php" class="w3-bar-item w3-button">Homepagina </a>
  <a href="./registreren.php" class="w3-bar-item w3-button">Registreren </a>
  <a href="./inloggen.php" class="w3-bar-item w3-button">Inloggen</a>
  <a href="./instellingen.php" class="w3-bar-item w3-button">Instellingen</a>
</div>


 



</div>

<div class="w3-container">

</div>

</div>

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

</div>
<div class="w3-container w3-light-grey">
<p>



<a href="./chinese gerechten deel.php"
   class="w3-bar-item w3-button w3-round-large"
   style="font-size: 50px;">
  Foe yong hai<br>
  <img src="dikke chinees Afbeelding1.jpg"
       alt="Dikke Chinees - foe yong hai"
       style="height:150px;" class="w3-round-large">
	   
</a>
</div>
</body>
</html>


























