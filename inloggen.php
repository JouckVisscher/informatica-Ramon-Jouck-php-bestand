<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
</head>

<body>

<?php
include("dbconn.php");

$query = "";
$message = "";

// Score opvragen
if (isset($_GET["naam"])) {

    // Lees de opgestuurde gegevens uit
    $opgestuurde_naam = mysqli_real_escape_string($con, $_GET["naam"]);

    // Maak de query
    $query = "
        SELECT username, score
        FROM scores
        WHERE username = '$opgestuurde_naam'
    ";

    // Voer de query uit
    if ($result = mysqli_query($con, $query)) {

        if (mysqli_num_rows($result) > 0) {
            $rij = mysqli_fetch_assoc($result);
            $opgehaalde_score = $rij["score"];

            $message = "De score van $opgestuurde_naam is $opgehaalde_score.";
        } else {
            $message = "Gebruiker niet gevonden.";
        }

    } else {
        $message = "Error: $query<br>" . mysqli_error($con);
    }

    mysqli_close($con);

} else {

    $query = "niets";
    $message = "Er is nog niets opgestuurd.";

}
?>

<div class="w3-container w3-olive">

    <img src="logo.png" alt="Logo" style="padding:7px;width:110px" class="w3-round-xlarge">

    <div class="w3-display-topright">

        <img src="img_avatar3.png"
             alt="Avatar"
             style="padding:7px;width:85px"
             class="w3-circle"
             onclick="toggleMenu()">

        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right"
             style="width:200px;right:0;display:none"
             id="mySidebar">

            <a href="index.php" class="w3-bar-item w3-button">Homepagina</a>
            <a href="registreren.php" class="w3-bar-item w3-button">Registreren</a>
            <a href="inloggen.php" class="w3-bar-item w3-button">Inloggen</a>
            <a href="instellingen.php" class="w3-bar-item w3-button">Instellingen</a>

        </div>

    </div>

</div>

<div class="w3-container">
    <p><?php echo $message; ?></p>
</div>

<!-- Scoreformulier -->
<form class="w3-container w3-card-4 w3-light-gray" method="get">

    <h2>Score opvragen</h2>

    <p>
        <label>Naam</label>
        <input
            class="w3-input w3-border w3-round-large"
            type="text"
            name="naam"
            placeholder="Gebruikersnaam"
            required>
    </p>

    <button class="w3-button w3-white w3-border w3-round-large" type="submit">
        Opvragen
    </button>

</form>

<div class="w3-container">
    <p>De uitgevoerde query is:</p>
    <pre><?php echo $query; ?></pre>
</div>

<br>

<!-- Inlogformulier -->
<form class="w3-container w3-card-4 w3-light-gray"
      action="index.php"
      method="post">

    <h2>Inloggen</h2>

    <p>
        <input
            class="w3-input w3-border w3-round-large w3-animate-input"
            type="text"
            name="gebruikersnaam"
            placeholder="Gebruikersnaam"
            required>
    </p>

    <p>
        <input
            class="w3-input w3-border w3-round-large w3-animate-input"
            type="password"
            name="wachtwoord"
            placeholder="Wachtwoord"
            required>
    </p>

    <p>
        <a href="wachtwoord.php">Wachtwoord vergeten?</a>
    </p>

    <button class="w3-button w3-white w3-border w3-round-large" type="submit">
        Inloggen
    </button>

</form>

<script>
function toggleMenu() {
    var x = document.getElementById("mySidebar");

    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

</body>
</html>