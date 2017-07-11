<?php
include_once ("black_line.php");
echo "<script>
var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = 1024;
    canvas.height = 700;
    var cHeight = canvas.height;
    var cWidth = canvas.width;
 // gradients
        var gradient = ctx.createRadialGradient(500, 500, 900, 500, 200, 150);
        gradient.addColorStop(0, '#555555');
        gradient.addColorStop(1, '#ffffff');

        // background
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, cWidth, cHeight);
        ctx.closePath();

        // button
        ctx.fillStyle = \"#f00\";
        ctx.beginPath();
        ctx.arc(510, 570, 100, 360, 0, Math.PI);
        ctx.shadowColor = 'black';
        ctx.shadowBlur = 75;
        ctx.fill();
        ctx.closePath();

        // Spin
        ctx.font = \"45px Arial\";
        ctx.fillStyle = \"#ffffff\";
        ctx.fillText(\"Spin\", 460, 585);
        ctx.closePath();
";
printeblack(52);
for ($i = 57;$i<358;$i+=5)
{
    printewhite($i);
}
printeblack($i);
for ($i += 5;$i<658;$i+=5)
{
    printewhite($i);
    printewhite2($i);
}
printeblack2($i);
for ($i += 5;$i<972;$i+=5)
{
    printewhite2($i);
}
printeblack2($i);
echo "
    //logo's
    var logo = new Image();
  	logo.src = 'img/slot/Avatar.jpg';
  	logo.onload = function()
  	{
    ctx.drawImage(logo, 390, 125, 250, 250);
    ctx.drawImage(logo, 85, 150, 200, 200);
    ctx.drawImage(logo, 740, 150, 200, 200);
	}

</script>";




