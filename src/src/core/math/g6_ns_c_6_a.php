
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.a_3',6.1403,'6.ns.c.6.a','Understanding positive and negative numbers and opposites'); update item_types set progression = 6.1403 where id = '6.ns.c.6.a_3';
*/
var i_6_ns_c_6_a__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        //this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.c.6.a_3';

      //  this.parent(sheet,200,50,225,95,100,50,425,100);

    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);

var a = Math.floor(Math.random()*14 - 7);

var answer = a * -1;

  this.setAnswer('' + answer,0);

 this.setQuestion('What is the opposite of ' + a + '?');

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,150);

}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.a_2',6.1402,'6.ns.c.6.a','Understanding positive and negative numbers and opposites'); update item_types set progression = 6.1402 where id = '6.ns.c.6.a_2';
*/
var i_6_ns_c_6_a__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.mType = '6.ns.c.6.a_2';    

    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var answer;

var pointsX = [];

// pick starting number for line plot
var start = Math.floor(Math.random()*3 - 7);

// pick missing number for line plot
var missing = Math.floor(Math.random()*11);

for (var i = 0; i < 11; i++)
{
  pointsX[i] = start + i;
  
  if(i == missing)
  {
    pointsX[i] = '';
    answer = start + i;
  }
}

var pointsY = [];

  this.setAnswer('' + answer,0);

 this.setQuestion('What is the number that is missing from the number line?');

//create line plot
var chart = new LineChartPlot (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.a_1',6.1401,'6.ns.c.6.a','Understanding positive and negative numbers and opposites'); update item_types set progression = 6.1401 where id = '6.ns.c.6.a_1';
*/
var i_6_ns_c_6_a__1 = new Class(
{
Extends: GraphItem2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.a_1';

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
var rX2 = 520;
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
var start = Math.floor(Math.random()*3 - 7);

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

  //this.setAnswer('' + answer,0);



var x = Math.floor(Math.random()*10);
var y = 0; //Math.floor(Math.random()*10);

var answer = '' + answer + ' ' + y;
 
this.setAnswer(answer,0);

 this.chart = new LineChartTest2 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(this.chart);
   
this.setQuestion('What is the opposite of ' + answer2 + '? <br><br> Show your answer by clicking the correct point on the number line.');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(125,80);

},


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

});






