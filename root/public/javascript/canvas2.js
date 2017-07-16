$(document).ready(function () {

    var canvas2 = document.getElementById('canvas2');
    var ctx2 = canvas2.getContext('2d');
    canvas2.width = 1024;
    canvas2.height = 400;
    var cHeight2 = canvas.height;
    var cWidth2 = canvas.width;
    var time;

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


    canvas2.addEventListener("click", function () {
        var con = true;
        if (con) {
            animatieMeneger();
            // run de animatie
            // data weg schrijven.
            // reset
        }
    });

    function controlle() {
        var username = $("#username").val();
        var trade_link = $("#trade-link").val();

        if (username != "" && trade_link != "") {
            var error = "";
            document.getElementById("error_p").innerHTML = error;
            $.ajax("../app/ajaxMeneger/ajaxMeneger.php", {
                type: "POST",
                data: {
                    "request": 1,
                    "username": username,
                    "trade-link": trade_link
                }
            }).done(function (data) {
                return data;
            });
        }
        else {
            var error = "you did not fill in username or trade-link";
            document.getElementById("error_p").innerHTML = error;
        }
        return false;
    }

    function animatieMeneger() {
        getLogoaway();
        runAni();
    }
});