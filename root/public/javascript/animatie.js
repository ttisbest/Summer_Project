var l1_yw2 = 400;
var l2_yw2 = -200;
var win_Id;
var img = [ "knifes/rust.png",
            "ump/scaffold.png",
            "p90/shape.png",
            "mac10/fade.png",
            "dlore.png",
            "m4a1-s/golden.png",
            "negev/loudmounth.png",
            "SSG/ghost.png",
            "fireserpent.png",
            "usp/kc.png"];

function runAni() {
    var winSkin;
    var timer2;
    $.ajax("../app/ajaxMeneger/ajaxMeneger.php", {
        type: "POST",
        data: {
            "request": 2
        }
    }).done(function (data) {
        winSkin = data;
        var temp = winSkin.split(";");
        winSkin = temp[0];
        win_Id = temp[1];

        animatie();
    });
    function animatie() {
        var rol1 = new Image();
        var rol2 = new Image();
        var i = 0;
        test21();
        var timer = setInterval(test21,6100);

        function test21()
        {
            rol1.src = "img/skins/" + img[i];
            i++;
            rol2.src = "img/skins/" + img[i];
            i++;

            rol2.onload = function ()
            {
                ctx.drawImage(rol1, 390, 400, 250, 250);
                ctx.drawImage(rol2, 85, -200, 200, 200);
                ctx.drawImage(rol2, 740, -200, 200, 200);
                if (l2_yw2 >= 400)
                {
                    clearInterval(timer2);
                    l1_yw2 = 400;
                    l2_yw2 = -200;
                }
                timer2 = setInterval(move2, 10);
            };

            function move2(){
                ctx.drawImage(rol1, 390, l1_yw2, 250, 250);
                ctx.drawImage(rol2, 85, l2_yw2, 200, 200);
                ctx.drawImage(rol2, 740, l2_yw2, 200, 200);

                l1_yw2--;
                l2_yw2++;

                var tempw2 = l1_yw2 + 250;
                var temp2w2 = l1_yw2 + 260;

                var temp3w2 = l2_yw2 - 10;

                ctx.beginPath();
                ctx.moveTo(390, tempw2);
                ctx.lineTo(650, tempw2);
                ctx.lineTo(650, temp2w2);
                ctx.lineTo(390, temp2w2);
                ctx.fillStyle = "#ffffff";
                ctx.fill();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(85, l2_yw2);
                ctx.lineTo(285, l2_yw2);
                ctx.lineTo(285, temp3w2);
                ctx.lineTo(85, temp3w2);
                ctx.fillStyle = "#ffffff";
                ctx.fill();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(740, l2_yw2);
                ctx.lineTo(940, l2_yw2);
                ctx.lineTo(940, temp3w2);
                ctx.lineTo(740, temp3w2);
                ctx.fillStyle = "#ffffff";
                ctx.fill();
                ctx.closePath();


            }

            if (i == 10)
            {
                clearInterval(timer);
                var done1 = setInterval(callDone, 6100);
                function callDone() {
                    clearInterval(done1);
                    done();
                }
            }
        }
    }

    function done() {
        var win = new Image();
        win.src = 'img/skins/'+winSkin;
        win.onload = function()
        {
            ctx.drawImage(win, 390, 400, 250, 250);
            ctx.drawImage(win, 85, -200, 200, 200);
            ctx.drawImage(win, 740, -200, 200, 200);
        };

        l1_yw = 400;
        l2_yw = -200;
        var timer = setInterval(move, 10);


        function move() {
            ctx.drawImage(win, 390, l1_yw, 250, 250);
            ctx.drawImage(win, 85, l2_yw, 200, 200);
            ctx.drawImage(win, 740, l2_yw, 200, 200);

            l1_yw--;
            l2_yw++;

            var tempw = l1_yw + 250;
            var temp2w = l1_yw + 260;

            var temp3w = l2_yw - 10;

            ctx.beginPath();
            ctx.moveTo(390, tempw);
            ctx.lineTo(650, tempw);
            ctx.lineTo(650, temp2w);
            ctx.lineTo(390, temp2w);
            ctx.fillStyle = "#ffffff";
            ctx.fill();
            ctx.closePath();

            ctx.beginPath();
            ctx.moveTo(85, l2_yw);
            ctx.lineTo(285, l2_yw);
            ctx.lineTo(285, temp3w);
            ctx.lineTo(85, temp3w);
            ctx.fillStyle = "#ffffff";
            ctx.fill();
            ctx.closePath();

            ctx.beginPath();
            ctx.moveTo(740, l2_yw);
            ctx.lineTo(940, l2_yw);
            ctx.lineTo(940, temp3w);
            ctx.lineTo(740, temp3w);
            ctx.fillStyle = "#ffffff";
            ctx.fill();
            ctx.closePath();

            if (l1_yw == 75) {
                clearTimeout(timer);
                prep();
            }
        }
    }
}
function prep() {
    var discripson;
    var title;
    $.ajax("../app/ajaxMeneger/ajaxMeneger.php", {
        type: "POST",
        data: {
            "request": 4,
            "id": win_Id,
            "user": userid
        }
    }).done(function (data) {
        winSkin = data;
        winSkin = winSkin.split(";");
        title = winSkin[0];
        discripson = winSkin[1];
        document.getElementById("winSkinTitle").innerHTML = title;
        document.getElementById("winSkinSub").innerHTML = discripson;
        openLogin();
    });


}