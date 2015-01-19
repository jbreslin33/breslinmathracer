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

// graph coords
var startX = 10;
var endX = 300;
var startY = 10;
var endY = 280;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 420;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];

var slopeX = (Math.floor(Math.random()*10)+1);
var slopeY = (Math.floor(Math.random()*10)+1);

pointsX[0] = slopeX;
pointsY[0] = slopeY;

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

pointsX[3] = pointsX[2] + slopeX;
pointsY[3] = pointsY[2] + slopeY;

pointsX[4] = pointsX[3] + slopeX;
pointsY[4] = pointsY[3] + slopeY;

var answerX = pointsX[4] + slopeX;
var answerY = pointsY[4] + slopeY;


    this.mNameMachine = new NameMachine();
    this.mNameOne     = this.mNameMachine.getName();
    this.mNameTwo     = this.mNameMachine.getName();
    this.mTeacherName     = this.mNameMachine.getAdult();
    this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();
		this.mThings     = this.mNameMachine.getThing();
    this.mSupply     = this.mNameMachine.getSupply();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 
                
		this.mAdult     = this.mNameMachine.getAdult();

this.setQuestion(this.mNameOne + ' and ' + this.mNameTwo + ' are each selling ' + this.mFruit + '. The table below shows how many ' + this.mFruit + ' each person sold each day. Based on the pattern in the table, how many ' + this.mFruit + ' will ' + this.mNameOne + ' and ' + this.mNameTwo + ' sell on Day 6?'
);    

this.setAnswer('' + answerX,0);
this.setAnswer('' + answerY,1);  

var head1 = 'Day';
var head2 = 'Number of ' + this.mFruit + ' sold by ' + this.mNameOne;
var head3 = 'Number of ' + this.mFruit + ' sold by ' + this.mNameTwo;

// create tableData[rows][cols] to pass in to Table
var tableData = [[head1,head2,head3],["1", ''+pointsX[0], ''+pointsY[0]],["2",pointsX[1], pointsY[1]],["3",pointsX[2], pointsY[2]],["4",pointsX[3], pointsY[3]],["5",pointsX[4], pointsY[4]]];

// create Table object
var table = new Table (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

this.addQuestionShape(table);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(450,80);

this.mAnswerTextBox.setPosition(600,110);
this.mAnswerTextBox2.setPosition(675,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText(this.mNameOne);
this.mHeadingAnswerLabel2.setText(this.mNameTwo); 
this.mHeadingAnswerLabel.setPosition(615,55);
this.mHeadingAnswerLabel2.setPosition(690,55); 
this.mHeadingAnswerLabel.setSize(75,25);
this.mHeadingAnswerLabel2.setSize(75,25); 

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
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_6',5.0306,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__6 = new Class(
{
Extends: TextItem4,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_6';

this.mAnswerTextBox.setPosition(575,150);
this.mAnswerTextBox2.setPosition(635,150);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,105);
this.mHeadingAnswerLabel2.setPosition(640,105); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

this.mAnswerTextBox3.setPosition(575,225);
this.mAnswerTextBox4.setPosition(635,225);
this.mAnswerTextBox3.setSize(50,50);
this.mAnswerTextBox4.setSize(50,50);
 
this.mHeadingAnswerLabel3.setText('X');
this.mHeadingAnswerLabel4.setText('Y'); 
this.mHeadingAnswerLabel3.setPosition(580,180);
this.mHeadingAnswerLabel4.setPosition(640,180); 
this.mHeadingAnswerLabel3.setSize(25,25);
this.mHeadingAnswerLabel4.setSize(25,25); 

this.mAnswerLabel = new Shape(100,50,500,150,this.mSheet.mGame,"","","");
this.addShape(this.mAnswerLabel);
this.mAnswerLabel.mCollidable = false;
this.mAnswerLabel.mCollisionOn = false;
this.mAnswerLabel.setText('Blue Line');
this.mAnswerLabel.setVisibility(false);

this.mAnswerLabel2 = new Shape(100,50,500,225,this.mSheet.mGame,"","","");
this.addShape(this.mAnswerLabel2);
this.mAnswerLabel2.mCollidable = false;
this.mAnswerLabel2.mCollisionOn = false;
this.mAnswerLabel2.setText('Red Line');
this.mAnswerLabel2.setVisibility(false);


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
var pointsX2 = [];
var pointsY2 = [];
var slopeX = Math.floor(Math.random()*3)+1;
var slopeY = -(Math.floor(Math.random()*3)+1);
var r = 0;
var n = 0;
this.limit = 0;

r = Math.floor(Math.random()*4);

if(r == 0)
{
  pointsX[0] = Math.floor(Math.random()*9);
  pointsY[0] = Math.floor(Math.random()*9);

  if(pointsX[0] < 2)
    this.limit = 0;
  else if(pointsX[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = this.getSlope();

  if(pointsY[0] < 2)
    this.limit = 0;
  else if(pointsY[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = this.getSlope();
}

if(r == 1)
{
  pointsX[0] = Math.floor((Math.random()*8)+3);
  pointsY[0] = Math.floor((Math.random()*9));

  if(pointsX[0] > 8)
    this.limit = 0;
  else if(pointsX[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = -this.getSlope();

  if(pointsY[0] < 2)
    this.limit = 0;
  else if(pointsY[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeY = this.getSlope();
}

if(r == 2)
{
  pointsX[0] = Math.floor(Math.random()*9);
  pointsY[0] = Math.floor((Math.random()*8)+3);

   if(pointsX[0] < 2)
    this.limit = 0;
  else if(pointsX[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = this.getSlope();

  if(pointsY[0] > 8)
    this.limit = 0;
  else if(pointsY[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

if(r == 3)
{
  pointsX[0] = Math.floor((Math.random()*8)+3);
  pointsY[0] = Math.floor((Math.random()*8)+3);

   if(pointsX[0] > 8)
    this.limit = 0;
  else if(pointsX[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = -this.getSlope();

  if(pointsY[0] > 8)
    this.limit = 0;
  else if(pointsY[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

var sX = slopeX;
var sY = slopeY;


// so the lines don't overlap
while (sX/sY == slopeX/slopeY)
{

n = Math.floor(Math.random()*4);

if(n == 0)
{
  pointsX2[0] = Math.floor(Math.random()*9);
  pointsY2[0] = Math.floor(Math.random()*9);

  if(pointsX2[0] < 2)
    this.limit = 0;
  else if(pointsX2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = this.getSlope();

  if(pointsY2[0] < 2)
    this.limit = 0;
  else if(pointsY2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = this.getSlope();
}

if(n == 1)
{
  pointsX2[0] = Math.floor((Math.random()*8)+3);
  pointsY2[0] = Math.floor((Math.random()*9));

  if(pointsX2[0] > 8)
    this.limit = 0;
  else if(pointsX2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = -this.getSlope();

  if(pointsY2[0] < 2)
    this.limit = 0;
  else if(pointsY2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeY = this.getSlope();
}

if(n == 2)
{
  pointsX2[0] = Math.floor(Math.random()*9);
  pointsY2[0] = Math.floor((Math.random()*8)+3);

   if(pointsX2[0] < 2)
    this.limit = 0;
  else if(pointsX2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = this.getSlope();

  if(pointsY2[0] > 8)
    this.limit = 0;
  else if(pointsY2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

if(n == 3)
{
  pointsX2[0] = Math.floor((Math.random()*8)+3);
  pointsY2[0] = Math.floor((Math.random()*8)+3);

   if(pointsX2[0] > 8)
    this.limit = 0;
  else if(pointsX2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = -this.getSlope();

  if(pointsY2[0] > 8)
    this.limit = 0;
  else if(pointsY2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}
pointsX2[1] = pointsX2[0] + slopeX;
pointsY2[1] = pointsY2[0] + slopeY;

pointsX2[2] = pointsX2[1] + slopeX;
pointsY2[2] = pointsY2[1] + slopeY;

var x2 = pointsX2[2] + slopeX;
var y2 = pointsY2[2] + slopeY;

}


this.setQuestion('Look at the coordinate plane. Based on the pattern, what are the next coordinates for each line?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);
this.setAnswer('' + x2,2);
this.setAnswer('' + y2,3);    

var chart = new LineChartTwo (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,pointsX2,pointsY2,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(320,50);
this.mQuestionLabel.setPosition(525,60);

},


getSlope: function()
{
    //return Math.floor(Math.random()*(3-this.limit)+1);
    return 3-this.limit;
},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(500,325);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> Blue ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo() + '</br> Red ' + this.mHeadingAnswerLabel3.getText() + ' = ' +  this.getAnswerThree()  + ' ' + this.mHeadingAnswerLabel4.getText() + ' = ' +  this.getAnswerFour()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});












/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_7',5.0307,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__7 = new Class(
{
Extends: TextItem4,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_7';

this.mAnswerTextBox.setPosition(575,150);
this.mAnswerTextBox2.setPosition(635,150);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,105);
this.mHeadingAnswerLabel2.setPosition(640,105); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

this.mAnswerTextBox3.setPosition(575,225);
this.mAnswerTextBox4.setPosition(635,225);
this.mAnswerTextBox3.setSize(50,50);
this.mAnswerTextBox4.setSize(50,50);
 
this.mHeadingAnswerLabel3.setText('X');
this.mHeadingAnswerLabel4.setText('Y'); 
this.mHeadingAnswerLabel3.setPosition(580,180);
this.mHeadingAnswerLabel4.setPosition(640,180); 
this.mHeadingAnswerLabel3.setSize(25,25);
this.mHeadingAnswerLabel4.setSize(25,25); 

this.mAnswerLabel = new Shape(100,50,500,150,this.mSheet.mGame,"","","");
this.addShape(this.mAnswerLabel);
this.mAnswerLabel.mCollidable = false;
this.mAnswerLabel.mCollisionOn = false;
this.mAnswerLabel.setText('Blue Line');
this.mAnswerLabel.setVisibility(false);

this.mAnswerLabel2 = new Shape(100,50,500,225,this.mSheet.mGame,"","","");
this.addShape(this.mAnswerLabel2);
this.mAnswerLabel2.mCollidable = false;
this.mAnswerLabel2.mCollisionOn = false;
this.mAnswerLabel2.setText('Red Line');
this.mAnswerLabel2.setVisibility(false);


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
var pointsX2 = [];
var pointsY2 = [];
var slopeX = Math.floor(Math.random()*3)+1;
var slopeY = -(Math.floor(Math.random()*3)+1);
var r = 0;
var n = 0;
this.limit = 0;

r = Math.floor(Math.random()*4);

if(r == 0)
{
  pointsX[0] = Math.floor(Math.random()*9);
  pointsY[0] = Math.floor(Math.random()*9);

  if(pointsX[0] < 2)
    this.limit = 0;
  else if(pointsX[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = this.getSlope();

  if(pointsY[0] < 2)
    this.limit = 0;
  else if(pointsY[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = this.getSlope();
}

if(r == 1)
{
  pointsX[0] = Math.floor((Math.random()*8)+3);
  pointsY[0] = Math.floor((Math.random()*9));

  if(pointsX[0] > 8)
    this.limit = 0;
  else if(pointsX[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = -this.getSlope();

  if(pointsY[0] < 2)
    this.limit = 0;
  else if(pointsY[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeY = this.getSlope();
}

if(r == 2)
{
  pointsX[0] = Math.floor(Math.random()*9);
  pointsY[0] = Math.floor((Math.random()*8)+3);

   if(pointsX[0] < 2)
    this.limit = 0;
  else if(pointsX[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = this.getSlope();

  if(pointsY[0] > 8)
    this.limit = 0;
  else if(pointsY[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

if(r == 3)
{
  pointsX[0] = Math.floor((Math.random()*8)+3);
  pointsY[0] = Math.floor((Math.random()*8)+3);

   if(pointsX[0] > 8)
    this.limit = 0;
  else if(pointsX[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = -this.getSlope();

  if(pointsY[0] > 8)
    this.limit = 0;
  else if(pointsY[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

pointsX[1] = pointsX[0] + slopeX;
pointsY[1] = pointsY[0] + slopeY;

pointsX[2] = pointsX[1] + slopeX;
pointsY[2] = pointsY[1] + slopeY;

var x = pointsX[2] + slopeX;
var y = pointsY[2] + slopeY;

var sX = slopeX;
var sY = slopeY;

slopeX = 66;

// so x slope is the same for each
while (sX != slopeX)
{

n = Math.floor(Math.random()*4);

if(n == 0)
{
  pointsX2[0] = Math.floor(Math.random()*9);
  pointsY2[0] = Math.floor(Math.random()*9);

  if(pointsX2[0] < 2)
    this.limit = 0;
  else if(pointsX2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = this.getSlope();

  if(pointsY2[0] < 2)
    this.limit = 0;
  else if(pointsY2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = this.getSlope();
}

if(n == 1)
{
  pointsX2[0] = Math.floor((Math.random()*8)+3);
  pointsY2[0] = Math.floor((Math.random()*9));

  if(pointsX2[0] > 8)
    this.limit = 0;
  else if(pointsX2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeX = -this.getSlope();

  if(pointsY2[0] < 2)
    this.limit = 0;
  else if(pointsY2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeY = this.getSlope();
}

if(n == 2)
{
  pointsX2[0] = Math.floor(Math.random()*9);
  pointsY2[0] = Math.floor((Math.random()*8)+3);

   if(pointsX2[0] < 2)
    this.limit = 0;
  else if(pointsX2[0] < 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = this.getSlope();

  if(pointsY2[0] > 8)
    this.limit = 0;
  else if(pointsY2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}

if(n == 3)
{
  pointsX2[0] = Math.floor((Math.random()*8)+3);
  pointsY2[0] = Math.floor((Math.random()*8)+3);

   if(pointsX2[0] > 8)
    this.limit = 0;
  else if(pointsX2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;
    

  slopeX = -this.getSlope();

  if(pointsY2[0] > 8)
    this.limit = 0;
  else if(pointsY2[0] > 5)
    this.limit = 1;
  else
    this.limit = 2;

  slopeY = -this.getSlope();
}
pointsX2[1] = pointsX2[0] + slopeX;
pointsY2[1] = pointsY2[0] + slopeY;

pointsX2[2] = pointsX2[1] + slopeX;
pointsY2[2] = pointsY2[1] + slopeY;

var x2 = pointsX2[2] + slopeX;
var y2 = pointsY2[2] + slopeY;

}


this.setQuestion('Look at the coordinate plane. Based on the pattern, what are the next coordinates for each line?');
this.setAnswer('' + x,0);
this.setAnswer('' + y,1);
this.setAnswer('' + x2,2);
this.setAnswer('' + y2,3);    

var chart = new LineChartTwo (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,pointsX2,pointsY2,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(320,50);
this.mQuestionLabel.setPosition(525,60);

},


getSlope: function()
{
    //return Math.floor(Math.random()*(3-this.limit)+1);
    return 3-this.limit;
},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(500,325);
			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> Blue ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo() + '</br> Red ' + this.mHeadingAnswerLabel3.getText() + ' = ' +  this.getAnswerThree()  + ' ' + this.mHeadingAnswerLabel4.getText() + ' = ' +  this.getAnswerFour()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
		  }
    },


});



