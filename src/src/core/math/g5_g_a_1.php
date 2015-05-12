/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_5',5.3105,'5.g.a.1','graphs');
*/
var i_5_g_a_1__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.g.a.1_5';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);
 
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

var pointsX;
var pointsY;

var r = Math.floor(Math.random()*4);

// L
if(r == 0)
{
   pointsX = [3,3,6];
   pointsY = [8,3,3];
   this.setAnswer('L',0);
   this.setAnswer('l',1);
}
// V
if(r == 1)
{
   pointsX = [2,5,8];
   pointsY = [8,3,8];
   this.setAnswer('V',0);
   this.setAnswer('v',1);
}
// Z
if(r == 2)
{
   pointsX = [3,7,3,7];
   pointsY = [8,8,2,2];
   this.setAnswer('Z',0);
   this.setAnswer('z',1);
}
// W
if(r == 3)
{
   pointsX = [2,3,5,7,8];
   pointsY = [8,3,6,3,8];
   this.setAnswer('W',0);
   this.setAnswer('w',1);
}

this.setQuestion('If you connect the points on the graph in alphabetical order, what letter is formed?');

var chart = new LineChartTest (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + ' = ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }

});




/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_4',5.3104,'5.g.a.1','graphs');
*/
var i_5_g_a_1__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.g.a.1_4';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);
 
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

var pointsX;
var pointsY;

var r = Math.floor(Math.random()*6 + 2);

   pointsX = [r];
   pointsY = [0];
   this.setAnswer('0',0);

this.setQuestion('When a point is located on the x-axis on the coordinate plane what is the y-coordinate of the point?');

var chart = new LineChartFour (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + ' = ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_3',5.3103,'5.g.a.1','graphs');
*/
var i_5_g_a_1__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.g.a.1_3';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);
 
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

var pointsX;
var pointsY;

var r = Math.floor(Math.random()*6 + 2);

   pointsX = [0];
   pointsY = [r];
   this.setAnswer('0',0);

this.setQuestion('When a point is located on the y-axis on the coordinate plane what is the x-coordinate of the point?');

var chart = new LineChartFour (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + ' = ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }

});






/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_2',5.3102,'5.g.a.1','graphs');
*/
var i_5_g_a_1__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.g.a.1_2';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);
 
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

var pointsX;
var pointsY;

var r = Math.floor(Math.random()*6 + 2);

   pointsX = [0];
   pointsY = [r];
   this.setAnswer('0',0);

this.setQuestion('When a point is located on the y-axis on the coordinate plane what is the x-coordinate of the point?');

var chart = new LineChartFour (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + ' = ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }

});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_1',5.3101,'5.g.a.1','graphs');
*/
var i_5_g_a_1__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.g.a.1_1';

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);
 
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

var pointsX;
var pointsY;

var r = Math.floor(Math.random()*4);

// L
if(r == 0)
{
   pointsX = [3,3,6];
   pointsY = [8,3,3];
   this.setAnswer('L',0);
   this.setAnswer('l',1);
}
// V
if(r == 1)
{
   pointsX = [2,5,8];
   pointsY = [8,3,8];
   this.setAnswer('V',0);
   this.setAnswer('v',1);
}
// Z
if(r == 2)
{
   pointsX = [3,7,3,7];
   pointsY = [8,8,2,2];
   this.setAnswer('Z',0);
   this.setAnswer('z',1);
}
// W
if(r == 3)
{
   pointsX = [2,3,5,7,8];
   pointsY = [8,3,6,3,8];
   this.setAnswer('W',0);
   this.setAnswer('w',1);
}

this.setQuestion('If you connect the points on the graph in alphabetical order, what letter is formed?');

var chart = new LineChartTest (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + ' = ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }

});
