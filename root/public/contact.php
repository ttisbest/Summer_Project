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
		<header>
			<div class="headertop flex-center align-center">
				<h1>
					DGBTS gaming
				</h1>
			</div>
            <div class="navbar flex-center">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogus.php">Shop</a></li>
                    <li><a href="overons.php">About me</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
		</header>
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
        <footer>
            <div class="foot-content">
                <ul>
                    <li><a href="https://twitter.com/DGBTSGAMING" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC-mfPzs8PTZexVAoquKdPuA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitch.tv/dgbts" target="_blank"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="copyright align-center">
                <h4>Copyright &copy; 2017, DGBTS Editors</h4></h4>
            </div>
        </footer>
    </div>
</body>
</html>