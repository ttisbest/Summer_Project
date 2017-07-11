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
ctx.fillStyle = "#f00";
ctx.beginPath();
ctx.arc(510, 570, 100, 360, 0, Math.PI);
ctx.shadowColor = 'black';
ctx.shadowBlur = 75;
ctx.fill();
ctx.closePath();

// Spin
ctx.font = "45px Arial";
ctx.fillStyle = "#ffffff";
ctx.fillText("Spin", 460, 585);
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,50);
ctx.lineTo(52,51);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,51);
ctx.lineTo(52,52);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,52);
ctx.lineTo(52,53);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,53);
ctx.lineTo(52,54);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,54);
ctx.lineTo(52,55);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,55);
ctx.lineTo(52,56);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,56);
ctx.lineTo(52,57);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,57);
ctx.lineTo(52,58);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,58);
ctx.lineTo(52,59);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,59);
ctx.lineTo(52,60);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,60);
ctx.lineTo(52,61);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,61);
ctx.lineTo(52,62);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,62);
ctx.lineTo(52,63);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,63);
ctx.lineTo(52,64);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,64);
ctx.lineTo(52,65);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,65);
ctx.lineTo(52,66);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,66);
ctx.lineTo(52,67);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,67);
ctx.lineTo(52,68);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,68);
ctx.lineTo(52,69);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,69);
ctx.lineTo(52,70);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,70);
ctx.lineTo(52,71);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,71);
ctx.lineTo(52,72);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,72);
ctx.lineTo(52,73);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,73);
ctx.lineTo(52,74);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,74);
ctx.lineTo(52,75);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,75);
ctx.lineTo(52,76);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,76);
ctx.lineTo(52,77);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,77);
ctx.lineTo(52,78);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,78);
ctx.lineTo(52,79);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,79);
ctx.lineTo(52,80);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,80);
ctx.lineTo(52,81);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,81);
ctx.lineTo(52,82);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,82);
ctx.lineTo(52,83);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,83);
ctx.lineTo(52,84);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,84);
ctx.lineTo(52,85);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,85);
ctx.lineTo(52,86);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,86);
ctx.lineTo(52,87);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,87);
ctx.lineTo(52,88);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,88);
ctx.lineTo(52,89);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,89);
ctx.lineTo(52,90);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,90);
ctx.lineTo(52,91);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,91);
ctx.lineTo(52,92);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,92);
ctx.lineTo(52,93);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,93);
ctx.lineTo(52,94);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,94);
ctx.lineTo(52,95);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,95);
ctx.lineTo(52,96);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,96);
ctx.lineTo(52,97);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,97);
ctx.lineTo(52,98);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,98);
ctx.lineTo(52,99);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,99);
ctx.lineTo(52,100);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,100);
ctx.lineTo(52,101);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,101);
ctx.lineTo(52,102);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,102);
ctx.lineTo(52,103);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,103);
ctx.lineTo(52,104);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,104);
ctx.lineTo(52,105);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,105);
ctx.lineTo(52,106);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,106);
ctx.lineTo(52,107);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,107);
ctx.lineTo(52,108);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,108);
ctx.lineTo(52,109);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,109);
ctx.lineTo(52,110);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,110);
ctx.lineTo(52,111);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,111);
ctx.lineTo(52,112);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,112);
ctx.lineTo(52,113);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,113);
ctx.lineTo(52,114);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,114);
ctx.lineTo(52,115);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,115);
ctx.lineTo(52,116);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,116);
ctx.lineTo(52,117);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,117);
ctx.lineTo(52,118);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,118);
ctx.lineTo(52,119);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,119);
ctx.lineTo(52,120);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,120);
ctx.lineTo(52,121);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,121);
ctx.lineTo(52,122);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,122);
ctx.lineTo(52,123);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,123);
ctx.lineTo(52,124);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,124);
ctx.lineTo(52,125);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,125);
ctx.lineTo(52,126);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,126);
ctx.lineTo(52,127);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,127);
ctx.lineTo(52,128);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,128);
ctx.lineTo(52,129);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,129);
ctx.lineTo(52,130);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,130);
ctx.lineTo(52,131);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,131);
ctx.lineTo(52,132);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,132);
ctx.lineTo(52,133);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,133);
ctx.lineTo(52,134);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,134);
ctx.lineTo(52,135);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,135);
ctx.lineTo(52,136);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,136);
ctx.lineTo(52,137);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,137);
ctx.lineTo(52,138);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,138);
ctx.lineTo(52,139);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,139);
ctx.lineTo(52,140);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,140);
ctx.lineTo(52,141);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,141);
ctx.lineTo(52,142);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,142);
ctx.lineTo(52,143);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,143);
ctx.lineTo(52,144);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,144);
ctx.lineTo(52,145);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,145);
ctx.lineTo(52,146);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,146);
ctx.lineTo(52,147);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,147);
ctx.lineTo(52,148);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,148);
ctx.lineTo(52,149);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,149);
ctx.lineTo(52,150);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,150);
ctx.lineTo(52,151);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,151);
ctx.lineTo(52,152);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,152);
ctx.lineTo(52,153);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,153);
ctx.lineTo(52,154);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,154);
ctx.lineTo(52,155);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,155);
ctx.lineTo(52,156);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,156);
ctx.lineTo(52,157);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,157);
ctx.lineTo(52,158);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,158);
ctx.lineTo(52,159);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,159);
ctx.lineTo(52,160);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,160);
ctx.lineTo(52,161);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,161);
ctx.lineTo(52,162);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,162);
ctx.lineTo(52,163);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,163);
ctx.lineTo(52,164);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,164);
ctx.lineTo(52,165);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,165);
ctx.lineTo(52,166);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,166);
ctx.lineTo(52,167);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,167);
ctx.lineTo(52,168);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,168);
ctx.lineTo(52,169);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,169);
ctx.lineTo(52,170);
ctx.strokeStyle = "#000000";
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(52,170);
ctx.lineTo(52,171);
ctx.strokeStyle = "#000000";
