<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="DGBTS,gaming">
    <meta name="keywords" content="">
    <meta name="author" content="Crusial Designs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGBTS GAMING</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/3571e1e4e4.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
		<?php
            include_once ("tamplates/header.php");
        ?>
		<div class="main-content">
			<div class="about-items flex-around">
				<ul class="item">
					<li>
						<h2>
							Twitch
						</h2>
                        <div class="iframe-round">
                            <iframe class="roundings" src="https://player.twitch.tv/?channel=dgbts" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="600"></iframe><a href="https://www.twitch.tv/dgbts?tt_medium=live_embed&tt_content=text_link"></a>
                        </div>
                    </li>
				</ul>
                <ul class="item">
                    <li>
                        <h2>
                          Youtube
                        </h2>
                        <div class="iframe-round">
                            <iframe class="roundings" src="https://player.twitch.tv/?channel=dgbts" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="600"></iframe><a href="https://www.twitch.tv/dgbts?tt_medium=live_embed&tt_content=text_link"></a>
                        </div>
                    </li>
                </ul>
			</div>
        </div>
        <?php
            include_once ("tamplates/foot.php");
        ?>
    </div>
</body>
</html>
