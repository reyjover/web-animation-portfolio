var canvas = document.getElementById('firewatchshield');
var ctx = canvas.getContext('2d');

//background
ctx.beginPath();
ctx.moveTo(200, 200);
ctx.lineTo(0, 200);
ctx.lineTo(0,0);
ctx.lineTo(200,0);
ctx.lineTo(200,200);
ctx.closePath();
ctx.fillStyle = '#f488f0';
ctx.fill();

//shield
ctx.beginPath();
ctx.lineWidth= 10;
ctx.moveTo(100,50);
ctx.bezierCurveTo(100,50,  80,70,  50,70);
ctx.bezierCurveTo(50,70,  50,125,  100,150);
ctx.bezierCurveTo(100,150,  150,125,  150,70);
ctx.bezierCurveTo(150,70,  120,70,  95,50);
ctx.strokeStyle = '#592a9c';
ctx.stroke();
ctx.closePath();


// tree 
ctx.beginPath();
ctx.lineWidth= 1;
ctx.moveTo(100,75);
ctx.lineTo(80,95);
ctx.lineTo(90,95);
ctx.lineTo(80,105);
ctx.lineTo(90, 105);
ctx.lineTo(90, 125);
ctx.lineTo(110, 125);
ctx.lineTo(110,105);
ctx.lineTo(120, 105);
ctx.lineTo(110, 95);
ctx.lineTo(120, 95);
ctx.lineTo(100,75);
ctx.stroke();
ctx.fillStyle = '#964adb';
ctx.fill();