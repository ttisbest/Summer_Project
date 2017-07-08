<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sigars, Sigarenhandel">
    <meta name="keywords" content="Sigars,Sigaren,sigars,sigaren,sigarenhandel,E-sigaret,e-sigaret,e-sigaret vloefstoffen,e-sigaret artikelen,e-sigaret accessoires,E-Sigaret artikelen,E-Sigaret accessoires">
    <meta name="author" content="Crusial Designs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigarenhandel Moersdijk</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/3571e1e4e4.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
        include_once ("tamplates/header.php");
        ?>
		<div class="main-content" >
            <div class="about-us flex align-center flex-center">              
                <div class="contact-us-form">
                    <form action="sendmail.php" method="post" class="flex-column align-center">
                        <label for="name">Naam :</label>
                            <input placeholder="Uw naam" id="firstname" name="name" type="text" required>
                         <label for="phonenumb">Telefoonnummer :</label>
                            <input placeholder="Uw telefoonnummer" id="phonenumb" name="phonenumb" type="text" required>
                        <label for="email">Email :</label>   
                            <input placeholder="Uw email" id="email" name="email" type="email" required>
                        <label for="subject">Onderwerp :</label>   
                            <input placeholder="Typ hier uw onderwerp" id="subject" name="subject" type="text" required>
                        <label for="text">Uw bericht :</label>
                             <textarea placeholder="Typ hier uw bericht" id="text" name="text" required></textarea>
                        <input id="button-styling" type="submit" name="submit" value="submit" required>

                        <?php
                        if (isset($_GET['message'])!= null )
                        {
                            echo '<br>';
                            echo $_GET['message'];
                        }
                        ?>
                    </form>  
                </div>
             <div class="contact-us-content">
               <h2>For what reasons can you contact me?</h2>
                <p id="contact-us-content-p-padding">U kunt ons op de volgende dagen op de volgende markten zien</p>
                    <div class="contact-us-places flex-center">
                        <div>
                            <h3>Maandag</h3>
                                <p>Woenselse markt</p>
                            <h3>Dinsdag</h3>
                                <p>Woenselse markt</p>
                            <h3>Woensdag</h3>
                                <p>Woenselse markt</p>
                            <h3>Donderdag</h3>
                                <p>Woenselse markt</p>
                        </div>
                    </div>
                </div>
		</div>
            <?php
            include_once ("tamplates/foot.php");
            ?>
        </div>
    </div>
</body>
</html>