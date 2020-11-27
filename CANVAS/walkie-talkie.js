var canvas = document.getElementById('walkie-talkie');
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
ctx.strokeStyle= '#964adb';
ctx.fill();


//signal 
ctx.beginPath();
ctx.moveTo(120,75);
ctx.lineTo(130,30);
ctx.lineTo(140,40);
ctx.lineTo(130,77);
ctx.lineTo(120,75);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = '#270e59';
ctx.fill();

//rectangle 
ctx.beginPath();
ctx.moveTo(40,150);
ctx.lineTo(60,50);
ctx.lineTo(125,75);
ctx.lineTo(100,175);
ctx.lineTo(40,150);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();

// rectangle shadow
ctx.beginPath();
ctx.moveTo(125,75);
ctx.lineTo(100,176);
ctx.lineTo(125,176);
ctx.lineTo(150,85);
ctx.lineTo(125,75);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = '#270e59';
ctx.fill();

// lines 
ctx.beginPath();
ctx.moveTo(70,70);
ctx.lineTo(110,85);
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(68,75);
ctx.lineTo(108,90);
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(66,80);
ctx.lineTo(106,95);
ctx.stroke();
ctx.closePath();


ctx.beginPath();
ctx.moveTo(64,85);
ctx.lineTo(104,100);
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(62,90);
ctx.lineTo(102,105);
ctx.stroke();
ctx.closePath();


// screen
ctx.beginPath();
ctx.moveTo(57,100);
ctx.lineTo(107,120);
ctx.lineTo(97,160);
ctx.lineTo(47,140);
ctx.lineTo(57,100);
ctx.closePath();
ctx.fillStyle = '#964adb';
ctx.fill();

