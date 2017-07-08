<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sigars, Sigarenhandel">
    <meta name="keywords" content="Sigars,Sigaren,sigars,sigaren,sigarenhandel,E-sigaret,e-sigaret,e-sigaret vloefstoffen,e-sigaret artikelen,e-sigaret accessoires,E-Sigaret artikelen,E-Sigaret accessoires">
    <meta name="author" content="Crusial Designs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigarenhandel Moesdijk</title>
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
            <div class="about-us flex align-center flex-center ">
               
                <div class="about-us-slider">
                      <img class="mySlides" src="http://www.yourwebgraphics.com/gallery/data/thumbnails/392/Man-With-Question-05.png">
                      <img class="mySlides" src="http://www.yourwebgraphics.com/gallery/data/thumbnails/392/Man-With-Question-01.png">
                      <img class="mySlides" src="http://www.yourwebgraphics.com/gallery/data/thumbnails/392/Man-With-Question-04.png">
                </div>
                <div class="about-us-content">
                   <h2>Hallo, DION aka DGBTS</h2>
                    <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident optio, quo dolore. Quis eum illum aspernatur minima voluptate praesentium a veritatis explicabo facilis pariatur aut minus, repellendus corrupti suscipit nihil? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officia quod velit tempore quibusdam nobis sapiente quidem soluta, iure, ab ea quam, porro adipisci odio labore facere cumque numquam! Est!
                    </p>
                    
                    <p id="about-us-content-p-padding">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident optio, quo dolore. Quis eum illum aspernatur minima voluptate praesentium a veritatis explicabo facilis pariatur aut minus, repellendus corrupti suscipit nihil? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officia quod velit tempore quibusdam nobis sapiente quidem soluta, iure, ab ea quam, porro adipisci odio labore facere cumque numquam! Est!
                    </p>
                    
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
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>
    </div>
</body>
</html>