<?php
include_once ("pixel.php");
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

for ($i = 52 ; $i < 973; $i++)
{
    for ($j = 50; $j < 450; $j++)
    {
        if (($i >= 52 && $i <= 57) || ($i >= 357 && $i <= 362) || ($i >= 662 && $i <= 668) || ($i >= 968 && $i <= 973)) {
            $rmd = new \dion\pixel($i,$j,"#000000");
            $rmd->printe();
        }
        else {
            $rmd = new \dion\pixel($i,$j,"#ffffff");
            $rmd->printe();
        }
    }
}
echo "</script>";