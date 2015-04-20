/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.2_1',5.3201,'5.g.a.2','graphs');
*/
var i_5_g_a_2__1 = new Class(
{
Extends: TextItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);
        this.mType = '5.g.a.2_1';

//this.mAnswerTextBox.setPosition(575,110);
//this.mAnswerTextBox.setSize(50,50);

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

var x = Math.floor(Math.random()*3 + 1);
var y = Math.floor(Math.random()*3 + 1);

pointsX[0] = [x];
pointsY[0] = [y];

x = Math.floor(Math.random()*3 + 7);
y = Math.floor(Math.random()*3 + 7);

pointsX[1] = [x];
pointsY[1] = [y];

x = Math.floor(Math.random()*3 + 1);
y = Math.floor(Math.random()*3 + 7);

pointsX[2] = [x];
pointsY[2] = [y];

x = Math.floor(Math.random()*3 + 7);
y = Math.floor(Math.random()*3 + 1);

pointsX[3] = [x];
pointsY[3] = [y];

var labels = [];

this.ns = new NameSampler();
labels[0] = this.ns.mNameOne;
labels[1] = this.ns.mNameTwo; 
labels[2] = this.ns.mNameThree; 
labels[3] = 'Dignan';  

var r = Math.floor(Math.random()*4);

this.setAnswer(pointsX[r],0);
this.setAnswer(pointsY[r],1);

this.setQuestion('The coordinate plane shows where Dignan and his friends live? Write the ordered pair that identifies where ' + labels[r] + ' lives.');

var chart = new LineChartFive (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,labels,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,180);

this.mCorrectAnswerLabel.setPosition(630,300);

},

/*
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
*/
});
