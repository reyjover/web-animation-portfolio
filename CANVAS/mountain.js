var canvas = document.getElementById('mountain');
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

// mountain 1
ctx.beginPath();
ctx.moveTo(0,175);
ctx.lineTo(5,175);
ctx.lineTo(15,160);
ctx.lineTo(25,175);
ctx.lineTo(65,125);
ctx.lineTo(70,130);
ctx.lineTo(100,90);
ctx.lineTo(150,150);
ctx.lineTo(160,140);
ctx.lineTo(180,165);
ctx.lineTo(185,160);
ctx.lineTo(200, 175);
ctx.lineTo(200,200);
ctx.lineTo(0,200);
ctx.lineTo(0,175);
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();


