var canvas = document.getElementById('campfire');
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

// wood 
ctx.beginPath();
ctx.moveTo(65,160);
ctx.lineTo(115,150);
ctx.lineTo(115,160);
ctx.lineTo(65, 170);
ctx.lineTo(65, 160);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();

ctx.beginPath();
ctx.moveTo(135,160);
ctx.lineTo(85,150);
ctx.lineTo(85,160);
ctx.lineTo(135, 170);
ctx.lineTo(135, 160);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();

// inner fire 
ctx.beginPath();
ctx.moveTo(70,130);
ctx.bezierCurveTo(70,130,  60,110,  80,80);
ctx.bezierCurveTo(80,80,  70,100,  80,110);
ctx.bezierCurveTo(80,110,  100,100,  80,50);
ctx.bezierCurveTo(80,50,  105,100,  110,80);
ctx.bezierCurveTo(110,80,  130,110,  120,130);
ctx.bezierCurveTo(120,130,  100,160,  70,130);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();