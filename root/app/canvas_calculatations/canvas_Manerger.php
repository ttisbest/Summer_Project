<?php
include_once ("black_line.php");
echo "<script>
var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = 1024;
    canvas.height = 400;
    var cHeight = canvas.height;
    var cWidth = canvas.width;
 // gradients
        var gradient = ctx.createRadialGradient(500, 500, 900, 500, 200, 150);
        gradient.addColorStop(0,\"rgba(255,255,255,0.1)\");
        gradient.addColorStop(1, 'rgba(255,255,255,0.2)');

        // background
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, cWidth, cHeight);
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
  	  	ctx.shadowBlur = 0;
        ctx.drawImage(logo, 390, 75, 250, 250);
        ctx.drawImage(logo, 85, 100, 200, 200);
        ctx.drawImage(logo, 740, 100, 200, 200);
	}

</script>";




