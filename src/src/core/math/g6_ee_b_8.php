
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.8_1',6.3401,'6.ee.b.8_1','Locate points with rational coordinates'); update item_types set progression = 6.3401 where id = '6.ee.b.8_1';
*/
var i_6_ee_b_8__1 = new Class(
{
Extends: ThreeButtonItem,

initialize: function(sheet)
{
        //this.parent(sheet,200,50,225,95,100,50,425,100);

         this.parent(sheet);
                this.mType = '6.ns.c.7.c_4';
        	this.mStripCommas = false;
                this.mChopWhiteSpace = false;

        this.mType = '6.ee.b.8_1';

clickflag = true;

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
var rX2 = 350;
var rY2 = 350;

//var rX1 = 10;
//var rY1 = 250;
//var rX2 = 350;
//var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX;
var pointsY;

pointsX = [];
pointsY = [];

var answer;

// pick starting number for line plot
var start = -5;

// pick missing number for line plot
var missing = Math.floor(Math.random()*11);

for (var i = 0; i < 11; i++)
{
  pointsX[i] = start + i;
  
  if(i == missing)
  {
  //  pointsX[i] = '';
    answer = i;
  }
}

var answer2 = (answer + start)*(-1); //'('+x+','+y+')';

var pointsY = [];

var dots = [-9,-9];

for (var j = 0; j < 2; j++) {

var m = -9;

if(j == 0)
  m = Math.floor(Math.random()*3 - 5);
if(j == 1)
  m = Math.floor(Math.random()*3 - 2);
if(j == 2)
  m = Math.floor(Math.random()*3 + 1);
if(j == 3)
  m = Math.floor(Math.random()*2 + 4);


  var n = Math.floor(Math.random()*2);

  if (n == 0 && m != 5)
    m = m + .5;
//}

  //dots[j] = m;
}

dots[0] = Math.floor(Math.random()*5 + -5);
dots[1] = Math.floor(Math.random()*5 + 1);

var letters = [' ',' ',' ',' ','E','F','G'];

  //this.setAnswer('' + answer,0);

var r = Math.floor(Math.random()*dots.length);

var x = Math.floor(Math.random()*10);
var y = 0; //Math.floor(Math.random()*10);

//var answer = '' + answer + ' ' + y;

var answer = '' + dots[r];

var letter = letters[r];
 
this.setAnswer('n&gt;' + dots[0] + ', with the constraint n&lt;' + dots[1],0);

this.mButtonA.setAnswer('n>' + dots[0] + ', with the constraint n<' + dots[1]);
this.mButtonB.setAnswer('n<4, with the constraint n<8');
this.mButtonC.setAnswer('n>2, with the constraint n<8');

//console.log(this.mButtonArray[0].getAnswer());

//this.mButtonArray[i].getAnswer() == this.mUserAnswer

this.mButtonA.setPosition(530,220);
this.mButtonB.setPosition(530,280);
this.mButtonC.setPosition(530,340);


 this.chart = new LineChartTest4 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,dots,"#000000",false);

this.addQuestionShape(this.chart);
   
this.setQuestion('Choose the inequality that matches the graph');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(125,80);

}

});
