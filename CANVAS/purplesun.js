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


//circle3 
ctx.beginPath();

ctx.lineWidth = 5;
ctx.arc(100, 100, 90, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = 'rgb(193, 76, 194, 0.25)';
ctx.fill();

//circle3 
ctx.beginPath();
ctx.lineWidth = 5;
ctx.arc(100, 100, 70, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = 'rgb(150, 74, 219, 0.5)';
ctx.fill();

//circle2 
ctx.beginPath();
ctx.lineWidth = 5;
ctx.arc(100, 100, 55, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = 'rgba(89, 42, 156, 0.75)';
ctx.fill();


//circle1 
ctx.beginPath();
ctx.lineWidth = 5;
ctx.arc(100, 100, 45, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = 'rgb(39, 14, 89)';
ctx.fill();


