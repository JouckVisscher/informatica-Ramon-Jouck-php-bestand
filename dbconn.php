<?php

$con = mysqli_connect("localhost","root","usbw","test");

// Check connection
if (mysqli_connect_erno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

// verbinden met de database
include ("dbconn.php")

$query = "
INSERT INTO score (username, score)
VALUES ('$opgestuurde_naam', $opgestuurde_score)
";

if (mysqli_query($con, $querty)) {
    $message="De score van $opgestuurde_naam is nu $opgestuurde_score!";
 } else {
    $message="Error: $query<br>" . mysqli_error($con);
 }

 mysqli_close($con);