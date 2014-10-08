/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_1',5.0301,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__1 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_1';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

pointsX[0] = Math.floor(Math.random()*2);
pointsY[0] = Math.floor(Math.random()*2);

var slopeX = Math.floor(Math.random()*3)+1;
var slopeY = Math.floor(Math.random()*3)+1;

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

this.setQuestion('Look at the coordinate plane and table. Following the pattern, what are the coordinates for Point D?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);  

var chart = new LineChart (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,180);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_2',5.0302,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__2 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_2';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

pointsX[0] = Math.floor(Math.random()*2);
pointsY[0] = Math.floor((Math.random()*2)+9);

var slopeX = Math.floor(Math.random()*3)+1;
var slopeY = -(Math.floor(Math.random()*3)+1);

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

this.setQuestion('Look at the coordinate plane and table. Following the pattern, what are the coordinates for Point D?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);  

var chart = new LineChart (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,180);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});




/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_3',5.0303,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__3 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_3';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

pointsX[0] = Math.floor((Math.random()*2)+9);
pointsY[0] = Math.floor((Math.random()*2)+9);

var slopeX = -(Math.floor(Math.random()*3)+1);
var slopeY = -(Math.floor(Math.random()*3)+1);

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

this.setQuestion('Look at the coordinate plane and table. Following the pattern, what are the coordinates for Point D?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);  

var chart = new LineChart (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,180);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});




/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_4',5.0304,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__4 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_4';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

pointsX[0] = Math.floor((Math.random()*2)+9);
pointsY[0] = Math.floor((Math.random()*2));

var slopeX = -(Math.floor(Math.random()*3)+1);
var slopeY = (Math.floor(Math.random()*3)+1);

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

this.setQuestion('Look at the coordinate plane and table. Following the pattern, what are the coordinates for Point D?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);  

var chart = new LineChart (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,180);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_5',5.0305,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__5 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_5';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

// graph coords
var startX = 10;
var endX = 210;
var startY = 10;
var endY = 210;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

pointsX[0] = Math.floor((Math.random()*2)+9);
pointsY[0] = Math.floor((Math.random()*2));

var slopeX = -(Math.floor(Math.random()*3)+1);
var slopeY = (Math.floor(Math.random()*3)+1);

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

this.setQuestion('Look at the coordinate plane and table. Following the pattern, what are the coordinates for Point D?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);  

// create tableData[rows][cols] to pass in to Table
var tableData = [["Point","X","Y"],["A", ''+pointsX[0], ''+pointsY[0]],["B",pointsX[1], pointsY[1]],["C",pointsX[2], pointsY[2]],["D","",""]];

// create Table object
var table = new Table (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

this.addQuestionShape(table);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(425,180);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});
