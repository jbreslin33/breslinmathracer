/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.c.9_5',6.3505,'6.ee.c.9','Table. Ratio. ' ); update item_types set progression = 6.3505 where id = '6.ee.c.9_5';
*/

var i_6_ee_c_9__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.ee.c.9_5';


	// graph coords
  var width = 140;
  var height = 50;
	var startX = 50;
	var startY = 50;
	var endX = startX + width;
	var endY = startY + height;
	var range = [0,10];
  var tweakX = 5;
  var tweakY = 10;

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

  var x;
  var y;
  var a;
  var b;
  var d;
  var answer;
  var tableData = [['x',1,'2','3','4'],['y','1','2','3','']]; 
  var tableData2 = [['x',1,'2','3','4'],['y','1','2','3','']];
  var tableData3 = [['x',1,'2','3','4'],['y','1','2','3','']];
  var tableData4 = [['x',1,'2','3','4'],['y','1','2','3','']];

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData[0][j] + a;

    tableData[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData2[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData2[0][j] - a;

    tableData2[1][j] = '' + y;
  }  

  x = (Math.floor(Math.random()*6) + 1) * 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData3[0][j] = x;

    d = (Math.floor(Math.random()*4) + 1) * 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData3[0][j]/2;

    tableData3[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*4) + 1;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData4[0][j] = x;

    d = Math.floor(Math.random()*4) + 1;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData4[0][j]*b;

    tableData4[1][j] = '' + y;

    if(j == 4)
    {
      answer = y;
      tableData4[1][j] = '';
    }
  }

  this.setQuestion('Complete the table of values for the equation: y = ' + b + 'x'); 
  this.setAnswer('' + answer,0);

/*
var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];


                     // (sizeX,sizeY,posX,posY,this.mGame,"","","")
     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('A. ');
     this.addQuestionShape(data);

	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,tweakX,tweakY,"#000000",false);


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 120;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('B. ');
     this.addQuestionShape(data);


  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData2,rX1,rY1,tableData2,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 190;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('C. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData3,rX1,rY1,tableData3,tweakX,tweakY,"#000000",false);
*/


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 50;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

    // var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
    // data.setText('D. ');
    // this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData4,rX1,rY1,tableData4,tweakX,tweakY,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.c.9_4',6.3504,'6.ee.c.9','Table. Ratio. ' ); update item_types set progression = 6.3504 where id = '6.ee.c.9_4';
*/

var i_6_ee_c_9__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.ee.c.9_4';


	// graph coords
  var width = 140;
  var height = 50;
	var startX = 50;
	var startY = 50;
	var endX = startX + width;
	var endY = startY + height;
	var range = [0,10];
  var tweakX = 5;
  var tweakY = 10;

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

  var x;
  var y;
  var a;
  var b;
  var d;
  var tableData = [['x',1,'2','3','4'],['y','1','2','3','4']]; 
  var tableData2 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData3 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData4 = [['x',1,'2','3','4'],['y','1','2','3','4']];

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData[0][j] + a;

    tableData[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData2[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData2[0][j] - a;

    tableData2[1][j] = '' + y;
  }  

  x = (Math.floor(Math.random()*6) + 1) * 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData3[0][j] = x;

    d = (Math.floor(Math.random()*4) + 1) * 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData3[0][j]/2;

    tableData3[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*4) + 1;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData4[0][j] = x;

    d = Math.floor(Math.random()*4) + 1;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData4[0][j]*b;

    tableData4[1][j] = '' + y;
  }

  this.setQuestion('Which table of values shows this relationship: y = ' + b + 'x'); 
  this.setAnswer('' + 'D',0);
  this.setAnswer('' + 'd',1);

/*
var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];
*/

                     // (sizeX,sizeY,posX,posY,this.mGame,"","","")
     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('A. ');
     this.addQuestionShape(data);

	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,tweakX,tweakY,"#000000",false);


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 120;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('B. ');
     this.addQuestionShape(data);


  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData2,rX1,rY1,tableData2,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 190;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('C. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData3,rX1,rY1,tableData3,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 260;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('D. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData4,rX1,rY1,tableData4,tweakX,tweakY,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});






/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.c.9_3',6.3503,'6.ee.c.9','Table. Ratio. ' ); update item_types set progression = 6.3503 where id = '6.ee.c.9_3';
*/

var i_6_ee_c_9__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.ee.c.9_3';


	// graph coords
  var width = 140;
  var height = 50;
	var startX = 50;
	var startY = 50;
	var endX = startX + width;
	var endY = startY + height;
	var range = [0,10];
  var tweakX = 5;
  var tweakY = 10;

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

  var x;
  var y;
  var a;
  var b;
  var d;
  var tableData = [['x',1,'2','3','4'],['y','1','2','3','4']]; 
  var tableData2 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData3 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData4 = [['x',1,'2','3','4'],['y','1','2','3','4']];

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData[0][j] + a;

    tableData[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData2[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData2[0][j] - a;

    tableData2[1][j] = '' + y;
  }  

  x = (Math.floor(Math.random()*6) + 1) * 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData3[0][j] = x;

    d = (Math.floor(Math.random()*4) + 1) * 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData3[0][j]/2;

    tableData3[1][j] = '' + y;
  }

  this.setQuestion('Which table of values shows this relationship: y = x/2'); 
  this.setAnswer('' + 'C',0);
  this.setAnswer('' + 'c',1);

  x = Math.floor(Math.random()*4) + 1;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData4[0][j] = x;

    d = Math.floor(Math.random()*4) + 1;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData4[0][j]*b;

    tableData4[1][j] = '' + y;
  }

/*
var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];
*/

                     // (sizeX,sizeY,posX,posY,this.mGame,"","","")
     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('A. ');
     this.addQuestionShape(data);

	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,tweakX,tweakY,"#000000",false);


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 120;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('B. ');
     this.addQuestionShape(data);


  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData2,rX1,rY1,tableData2,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 190;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('C. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData3,rX1,rY1,tableData3,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 260;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('D. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData4,rX1,rY1,tableData4,tweakX,tweakY,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.c.9_2',6.3502,'6.ee.c.9','Table. Ratio. ' ); update item_types set progression = 6.3502 where id = '6.ee.c.9_2';
*/

var i_6_ee_c_9__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.ee.c.9_2';


	// graph coords
  var width = 140;
  var height = 50;
	var startX = 50;
	var startY = 50;
	var endX = startX + width;
	var endY = startY + height;
	var range = [0,10];
  var tweakX = 5;
  var tweakY = 10;

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

  var x;
  var y;
  var a;
  var b;
  var d;
  var tableData = [['x',1,'2','3','4'],['y','1','2','3','4']]; 
  var tableData2 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData3 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData4 = [['x',1,'2','3','4'],['y','1','2','3','4']];

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData[0][j] + a;

    tableData[1][j] = '' + y;
  }

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData2[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData2[0][j] - a;

    tableData2[1][j] = '' + y;
  }

  this.setQuestion('Which table of values shows this relationship: y = x - ' + a); 
  this.setAnswer('' + 'B',0);
  this.setAnswer('' + 'b',1);

  x = (Math.floor(Math.random()*6) + 1) * 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData3[0][j] = x;

    d = (Math.floor(Math.random()*4) + 1) * 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData3[0][j]/2;

    tableData3[1][j] = '' + y;
  }


  x = Math.floor(Math.random()*4) + 1;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData4[0][j] = x;

    d = Math.floor(Math.random()*4) + 1;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData4[0][j]*b;

    tableData4[1][j] = '' + y;
  }

/*
var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];
*/

                     // (sizeX,sizeY,posX,posY,this.mGame,"","","")
     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('A. ');
     this.addQuestionShape(data);

	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,tweakX,tweakY,"#000000",false);


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 120;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('B. ');
     this.addQuestionShape(data);


  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData2,rX1,rY1,tableData2,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 190;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('C. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData3,rX1,rY1,tableData3,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 260;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('D. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData4,rX1,rY1,tableData4,tweakX,tweakY,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.c.9_1',6.3501,'6.ee.c.9','Table. Ratio. ' ); update item_types set progression = 6.3501 where id = '6.ee.c.9_1';
*/

var i_6_ee_c_9__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.ee.c.9_1';


	// graph coords
  var width = 140;
  var height = 50;
	var startX = 50;
	var startY = 50;
	var endX = startX + width;
	var endY = startY + height;
	var range = [0,10];
  var tweakX = 5;
  var tweakY = 10;

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

  var x;
  var y;
  var a;
  var b;
  var d;
  var tableData = [['x',1,'2','3','4'],['y','1','2','3','4']]; 
  var tableData2 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData3 = [['x',1,'2','3','4'],['y','1','2','3','4']];
  var tableData4 = [['x',1,'2','3','4'],['y','1','2','3','4']];

  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData[0][j] + a;

    tableData[1][j] = '' + y;
  }

  this.setQuestion('Which table of values shows this relationship: y = x + ' + a); 
  this.setAnswer('' + 'A',0);
  this.setAnswer('' + 'a',1);


  x = Math.floor(Math.random()*6) + 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData2[0][j] = x;

    d = Math.floor(Math.random()*4) + 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData2[0][j] - a;

    tableData2[1][j] = '' + y;
  }


  x = (Math.floor(Math.random()*6) + 1) * 2;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData3[0][j] = x;

    d = (Math.floor(Math.random()*4) + 1) * 2;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData3[0][j]/2;

    tableData3[1][j] = '' + y;
  }


  x = Math.floor(Math.random()*4) + 1;
  a = Math.floor(Math.random()*8) + 2;
  b = Math.floor(Math.random()*4) + 2;

  for (var j = 1; j < 5; j++) {

    tableData4[0][j] = x;

    d = Math.floor(Math.random()*4) + 1;
   
    x = x + d;
  }

  for (var j = 1; j < 5; j++) {

    y = tableData4[0][j]*b;

    tableData4[1][j] = '' + y;
  }

/*
var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];
*/

                     // (sizeX,sizeY,posX,posY,this.mGame,"","","")
     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('A. ');
     this.addQuestionShape(data);

	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,tweakX,tweakY,"#000000",false);


// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 120;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('B. ');
     this.addQuestionShape(data);


  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData2,rX1,rY1,tableData2,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 190;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('C. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData3,rX1,rY1,tableData3,tweakX,tweakY,"#000000",false);

// graph coords
  width = 140;
  height = 50;
	startX = 50;
	startY = 260;
	endX = startX + width;
	endY = startY + height;
	range = [0,10];
  tweakX = 5;
  tweakY = 10;

     var data = new Shape(10,10,startX-30,startY+60,this.mSheet.mGame,"","","");
     data.setText('D. ');
     this.addQuestionShape(data);

  	// create Table object
	var table = new Table3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData4,rX1,rY1,tableData4,tweakX,tweakY,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});
