$(document).ready(function () {
     var canvas = document.getElementById("canvas");

    var canvas2 = document.getElementById('canvas2');
    var ctx2 = canvas2.getContext('2d');
    canvas2.width = 1024;
    canvas2.height = 400;
    var cHeight2 = canvas.height;
    var cWidth2 = canvas.width;

    var gradient2 = ctx2.createRadialGradient(500, 500, 900, 500, 200, 150);
    gradient2.addColorStop(0, "rgba(255,255,255,0.1)");
    gradient2.addColorStop(1, 'rgba(255,255,255,0.2)');

    // background
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
    ctx2.beginPath();
    ctx2.fillStyle = gradient2;
    ctx2.fillRect(0, 0, cWidth2, cHeight2);
    ctx2.closePath();

    // button
    ctx2.fillStyle = 'rgba(255,000,000,1)';
    ctx2.beginPath();
    ctx2.arc(510, 170, 100, 360, 0, Math.PI);
    ctx2.shadowColor = 'black';
    ctx2.shadowBlur = 30;
    ctx2.fill();
    ctx2.closePath();

    // Spin
    ctx2.font = "45px Arial";
    ctx2.fillStyle = "#ffffff";
    ctx2.fillText("Spin", 460, 185);
    ctx2.closePath();
});

function getLogoaway() {
    var timer = setInterval(logoMove, 5);
    l1_y = 75;
    l2_y = 100;

    function logoMove() {
        ctx.drawImage(logo, 390, l1_y, 250, 250);
        ctx.drawImage(logo, 85, l2_y, 200, 200);
        ctx.drawImage(logo, 740, l2_y, 200, 200);

        l1_y--;
        l2_y++;

        var temp = l1_y + 250;
        var temp2 = l1_y + 260;

        var temp3 = l2_y - 10;

        ctx.beginPath();
        ctx.moveTo(390,temp);
        ctx.lineTo(650,temp);
        ctx.lineTo(650,temp2);
        ctx.lineTo(390,temp2);
        ctx.fillStyle = "#ffffff";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(85,l2_y);
        ctx.lineTo(285,l2_y);
        ctx.lineTo(285,temp3);
        ctx.lineTo(85,temp3);
        ctx.fillStyle = "#ffffff";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(740,l2_y);
        ctx.lineTo(940,l2_y);
        ctx.lineTo(940,temp3);
        ctx.lineTo(740,temp3);
        ctx.fillStyle = "#ffffff";
        ctx.fill();
        ctx.closePath();

        if (l1_y == -250)
        {
            clearTimeout(timer);
        }
    }
}