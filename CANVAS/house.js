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



// leftstand
ctx.beginPath();
ctx.moveTo(65,178);
ctx.lineTo(75,100);
ctx.closePath();
ctx.stroke();


// rightstand
ctx.beginPath();
ctx.moveTo(150,178);
ctx.lineTo(135,100);
ctx.closePath();
ctx.stroke();

// top
ctx.beginPath();
ctx.moveTo(65,100);
ctx.lineTo(140,100);
ctx.closePath();
ctx.stroke();

//supports
ctx.beginPath();
ctx.moveTo(70,130);
ctx.lineTo(140,130);
ctx.closePath();
ctx.stroke();
//supports
ctx.beginPath();
ctx.moveTo(68,160);
ctx.lineTo(148,160);
ctx.closePath();
ctx.stroke();

// top crisscross
ctx.beginPath();
ctx.moveTo(75,100);
ctx.lineTo(140,130);
ctx.closePath();
ctx.stroke();

ctx.beginPath();
ctx.moveTo(135,100);
ctx.lineTo(70,130);
ctx.closePath();
ctx.stroke();


// bottom crisscross
ctx.beginPath();
ctx.moveTo(70,130);
ctx.lineTo(148,160);
ctx.closePath();
ctx.stroke();

ctx.beginPath();
ctx.moveTo(140,130);
ctx.lineTo(68,160);
ctx.closePath();
ctx.stroke();

// fence 
ctx.beginPath();
ctx.moveTo(65,100);
ctx.lineTo(65,90);
ctx.lineTo(140,90);
ctx.lineTo(140,100);
ctx.lineTo(65,100);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();

//walls 
ctx.beginPath();
ctx.moveTo(73,90);
ctx.lineTo(73,65);
ctx.lineTo(133,65);
ctx.lineTo(133,90);
ctx.lineTo(73,90);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();

//roof
ctx.beginPath();
ctx.moveTo(60,65);
ctx.lineTo(105,35);
ctx.lineTo(145,65);
ctx.lineTo(60,65);
ctx.closePath();
ctx.fillStyle = '#592a9c';
ctx.fill();
ctx.stroke();


