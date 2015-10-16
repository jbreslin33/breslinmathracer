/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.c_3',6.1403,'6.ns.c.6.c','positive and negative numbers');
*/
var i_6_ns_c_6_c__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.c_3';

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

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX;
var pointsY;

pointsX = [];
pointsY = [];

var answer;

//var pointsX = [];

// pick starting number for line plot
//var start = Math.floor(Math.random()*3 - 7);
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

var dots = [-9,-9.-9,-9,-9];

for (var j = 0; j < 4; j++) {

var m = -9;

//while(m == dots[0] || m == dots[1] || m == dots[2] || m == dots[3])
//while(m >  || m == dots[1] || m == dots[2] || m == dots[3])
//{
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

  dots[j] = m;
}

var letters = ['A','B','C','D','E','F','G'];
var letters2 = ['a','b','c','d','e','f','g'];

  //this.setAnswer('' + answer,0);

var r = Math.floor(Math.random()*dots.length);

var x = Math.floor(Math.random()*10);
var y = 0; //Math.floor(Math.random()*10);

//var answer = '' + answer + ' ' + y;

var answer = '' + dots[r];

var letter = letters[r];
var letter2 = letters2[r];
 
this.setAnswer(letter,0);
this.setAnswer(letter2,1);

 this.chart = new LineChartTest3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,dots,"#000000",false);

this.addQuestionShape(this.chart);
   
this.setQuestion('What point is located at ' + answer + '?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(125,80);

},

/*
 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);

			  this.mCorrectAnswerLabel.setText('correct answer = red dot'); 
			  this.mCorrectAnswerLabel.setVisibility(true);

        var x = this.getAnswer().charAt(0);
        var y = this.getAnswer().charAt(2);
    
        if (this.chart.circles[x].data("click") == '0')
        {
          this.chart.circles[x].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
          this.chart.circles[x].data("click", 1);
        }
        clickflag = false;
        this.mButton.setVisibility(false);

        
		  }
    }
*/
});




/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.c_4',6.1404,'6.ns.c.6.c','positive and negative numbers');
*/
var i_6_ns_c_6_c__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.c_4';

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

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX;
var pointsY;

pointsX = [];
pointsY = [];

var answer;

//var pointsX = [];

// pick starting number for line plot
//var start = Math.floor(Math.random()*3 - 7);
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

var dots = [-9,-9.-9,-9,-9];

for (var j = 0; j < 4; j++) {

var m = -9;

//while(m == dots[0] || m == dots[1] || m == dots[2] || m == dots[3])
//while(m >  || m == dots[1] || m == dots[2] || m == dots[3])
//{
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

  dots[j] = m;
}

var letters = ['A','B','C','D','E','F','G'];

  //this.setAnswer('' + answer,0);

var r = Math.floor(Math.random()*dots.length);

var x = Math.floor(Math.random()*10);
var y = 0; //Math.floor(Math.random()*10);

//var answer = '' + answer + ' ' + y;

var answer = '' + dots[r];

var letter = letters[r];
 
this.setAnswer(answer,0);

 this.chart = new LineChartTest3 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,dots,"#000000",false);

this.addQuestionShape(this.chart);
   
this.setQuestion('What number is represented by point ' + letter + '?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(125,80);

},

/*
 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);

			  this.mCorrectAnswerLabel.setText('correct answer = red dot'); 
			  this.mCorrectAnswerLabel.setVisibility(true);

        var x = this.getAnswer().charAt(0);
        var y = this.getAnswer().charAt(2);
    
        if (this.chart.circles[x].data("click") == '0')
        {
          this.chart.circles[x].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
          this.chart.circles[x].data("click", 1);
        }
        clickflag = false;
        this.mButton.setVisibility(false);

        
		  }
    }
*/
});

