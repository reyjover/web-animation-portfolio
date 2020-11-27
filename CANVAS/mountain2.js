var canvas = document.getElementById('mountain2');
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

//mountain
ctx.beginPath();
ctx.moveTo(200,150);
ctx.lineTo(180,120);
ctx.lineTo(175,130);
ctx.lineTo(130,60);
ctx.lineTo(100,100);
ctx.lineTo(90,85);
ctx.lineTo(0,200);
ctx.lineTo(200,200);
ctx.lineTo(200,150);
ctx.fillStyle = '#964adb';
ctx.fill();
ctx.stroke();

//mountain2
ctx.beginPath();
ctx.moveTo(0,75);
ctx.lineTo(10,50);
ctx.bezierCurveTo(10,50,  35,100,  50,100);
ctx.lineTo(55,95);
ctx.lineTo(75,120);
ctx.lineTo(80, 117);
ctx.bezierCurveTo(80,117,  110,175,  200,180);
ctx.lineTo(200,200);
ctx.lineTo(0,200);
ctx.lineTo(0,75);
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();

