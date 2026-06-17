<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>


<div class="w3-container w3-olive">
    <img src="logo.png" alt="Person" style="padding:7px;width:110px" class="w3-round-xlarge">




<div class="w3-display-topright">
 
  <div class="w3-circle" style="width:85px">
    <img src="img_avatar3.png"  alt="Person" style="padding:7px;width:85px" class="w3-circle" onclick="toggleMenu()"  >
  
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right w3-text-black" style="width:200px;right:0;" id="mySidebar">

  <a href="./index.php" class="w3-bar-item w3-button">Homepagina </a>
  <a href="./registreren.htm" class="w3-bar-item w3-button">Registreren	</a>
  <a href="./Inloggen.htm" class="w3-bar-item w3-button">Inloggen</a>
  <a href="./instellingen.htm" class="w3-bar-item w3-button">Instellingen</a>
</div>


 



</div>


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


<form class="w3-container w3-card-4 w3-light-gray">
  <h2>Registreren</h2>




  <p>
  <label>Voornaam</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Voornaam" name="voornaam"></p>
   <p>
  <label>Achternaam</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Achternaam" name="achternaam"></p>

  <p>
  <label>Gebruikersnaam</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Gebruikersnaam" name="gebruikersnaam"></p>

  <p>
  <label>Wachtwoord</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Wachtwoord" name="wachtwoord"></p>

  <p>
  <label>Email</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Email" name="Email
"></p>

 <p>
  <label>Telefoonnummer</label>
  <input class="w3-input w3-border w3-round-large w3-animate-input"

type="text" style="width:35%" placeholder="Telefoonnummer" name="telefoonnummer"></p>

<div class="w3-container">



 
    <a href="geregistreerd.htm" class="w3-button w3-white w3-border">Registreren</a>
</p>
  



