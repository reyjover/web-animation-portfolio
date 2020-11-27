var canvas = document.getElementById('house');
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

//ground
ctx.beginPath();
ctx.moveTo(0,180);
ctx.lineTo(5,175);
ctx.lineTo(100,178);
ctx.lineTo(150,175);
ctx.lineTo(200,178);
ctx.lineTo(200,200);
ctx.lineTo(0,200);
ctx.lineTo(0,180);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();



// trunk