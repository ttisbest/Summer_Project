<?php
if(isset($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $Pnum  = $_POST["phonenumb"];
    $onderwerp = $_POST["subject"];
    $message = $_POST["text"];

    $ErrorMessage = "<strong>U moet een naam invullen!</strong>";
    if (empty($_POST['name'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>U moet een email invullen!</strong>";
    if (empty($_POST['email'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>U moet een telefoonnummer invullen!</strong>";
    if (empty($_POST['phonenumb'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>U moet een onderwerp invullen!</strong>";
    if (empty($_POST['subject'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>U moet een beschrijving invullen invullen!</strong>";
    if (empty($_POST['text'])){header("Location: contact.php?message=$ErrorMessage");die;}
}
$to = "info@petervandemoesdijk.nl";
$subject = "Bericht vanaf uw website ";
$txt = "Beste Dion Rodie & Youri van der Sande,
U heeft zojuist een bericht ontvangen via het contact formulier op uw website.
Het onderwerp van het bericht luidt: '$onderwerp'

Het bericht bevat de volgende boodschap:
'$message'

Het bericht is verstuurd door $name  met het mailadres: $email
Het nummer van $name is $Pnum";

$headers = "From: $email";

mail($to,$subject,$txt,$headers);


$ErrorMessage = "Uw email is succesvol verzonden, Wij zullen zo spoedig mogelijk contact opnemen!";
header("Location: contact.php?message=$ErrorMessage");
?>