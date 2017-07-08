<?php
if(isset($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $trade  = $_POST["tradelink"];
    $onderwerp = $_POST["subject"];
    $message = $_POST["text"];

    $ErrorMessage = "<strong>You must fil in a name!</strong>";
    if (empty($_POST['name'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>You must fill in a email</strong>";
    if (empty($_POST['email'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>You must fill in a tradelink</strong>";
    if (empty($_POST['tradelink'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>You must fill in a subject</strong>";
    if (empty($_POST['subject'])){header("Location: contact.php?message=$ErrorMessage");die;}
    $ErrorMessage = "<strong>You must fill in a well explained comment</strong>";
    if (empty($_POST['text'])){header("Location: contact.php?message=$ErrorMessage");die;}
}
$to = "info@petervandemoesdijk.nl";
$subject = "Bericht vanaf uw website ";
$txt = "Beste DGBTS,
U heeft zojuist een bericht ontvangen via het contact formulier op uw website.
Het onderwerp van het bericht luidt: '$onderwerp'

Het bericht bevat de volgende boodschap:
'$message'

Het bericht is verstuurd door $name  met het mailadres: $email
De tradelinnk van $name is $trade";

$headers = "From: $email";

mail($to,$subject,$txt,$headers);


$ErrorMessage = "Your email was send succesfully, we will reply soon!(This may take a while we are working hard on it)";
header("Location: contact.php?message=$ErrorMessage");
?>