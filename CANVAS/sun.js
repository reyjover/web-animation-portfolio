var canvas = document.getElementById('purplesun');
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

//circle1 
ctx.beginPath();
ctx.lineWidth = 5;
ctx.arc(100, 100, 45, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = '#270e59';
ctx.fill();