var canvas = document.getElementById('compass');
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

//circle 
ctx.beginPath();
ctx.lineWidth = 10;
ctx.arc(100, 100, 50, 0, 2 * Math.PI);
ctx.strokeStyle= '#964adb';
ctx.stroke();
ctx.closePath();


// arrowtop
ctx.beginPath();
ctx.lineWidth = 2;
ctx.moveTo(90,50);
ctx.lineTo(95, 25);
ctx.lineTo(105, 50);
ctx.bezierCurveTo(105,50,  95,45,  90,50);
ctx.closePath();
ctx.fillStyle = '#964adb';
ctx.fill();


// arrowbottom
ctx.beginPath();
ctx.lineWidth = 2;
ctx.moveTo(90,150);
ctx.lineTo(100, 175);
ctx.lineTo(105, 150);
ctx.bezierCurveTo(105,150,  95,155,  90,150);
ctx.closePath();
ctx.fillStyle = '#964adb';
ctx.fill();
ctx.stroke();

// arrow left
ctx.beginPath();
ctx.lineWidth = 2;
ctx.moveTo(50,90);
ctx.lineTo(25, 95);
ctx.lineTo(50, 105);
ctx.bezierCurveTo(50,105,  40,100,  50,90);
ctx.closePath();
ctx.fillStyle = '#964adb';
ctx.fill();
ctx.stroke();

// arrow right
ctx.beginPath();
ctx.lineWidth = 2;
ctx.moveTo(150,90);
ctx.lineTo(175, 95);
ctx.lineTo(150, 105);
ctx.bezierCurveTo(150,105,  160,100,  150,90);
ctx.closePath();
ctx.fillStyle = '#964adb';
ctx.fill();
ctx.stroke();

//small circle 
ctx.beginPath();
ctx.arc(100, 100, 5, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();

//navarrow top
ctx.beginPath();
ctx.moveTo(95,95);
ctx.lineTo(110, 75);
ctx.lineTo(108, 100);
ctx.bezierCurveTo(108, 100,  105,90,  95,95);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();

//navarrow bottom
ctx.beginPath();
ctx.moveTo(93,100);
ctx.lineTo(90, 125);
ctx.lineTo(103, 108);
ctx.bezierCurveTo(103, 108,  95,110,  93,100);

ctx.closePath();
ctx.fillStyle = '#270e59';
ctx.fill();
