
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_6',5.3106,'5.g.a.1','Terra Nova 36');
*/
var i_5_g_a_1__6 = new Class(
{
Extends: GraphItem,

initialize: function(sheet)
{
	this.parent(sheet,200,50,225,95,100,50,425,100);
        this.mType = '5.g.a.1_6';
	
	//----TABLE
	
	this.raphael_table = Raphael(320, 10, 400,150);

	this.ns = new NameSampler();
	this.a = 'Height in mm of ' + this.ns.mVegetableOne 
	this.b = 'Height in mm of ' + this.ns.mVegetableTwo 
	
	//col 1
	this.WriteTableRow(10,50,25,20,this.raphael_table,"Year");
	this.WriteTableRow(10,70,25,20,this.raphael_table,"1");
	this.WriteTableRow(10,90,25,20,this.raphael_table,"2");
	this.WriteTableRow(10,110,25,20,this.raphael_table,"3");
	this.WriteTableRow(10,130,25,20,this.raphael_table,"4");
	this.WriteTableRow(10,130,25,20,this.raphael_table,"5");

	//col 2	
	this.WriteTableRow(35,50,150,20,this.raphael_table,this.a);

	//col 3	
	this.WriteTableRow(185,50,150,20,this.raphael_table,this.a);

	//---graph
	//this.raphael = Raphael(200, 50, 420,350);
	clickflag = true;

	var x = Math.floor(Math.random()*10);
	var y = Math.floor(Math.random()*10);
	var answer = '' + x + ' ' + y;
	this.setAnswer(answer,0);
	var answer2 = '('+x+','+y+')';
   
	this.setQuestion('Graph the point ' + answer2 + ' by clicking the correct coordinate.');

	this.mQuestionLabel.setSize(220,300);
	this.mQuestionLabel.setPosition(670,300);
	this.mButton.setPosition(600,400);
},

WriteTableRow: function(x,y,width,height,r,TDdata)
{
	var TD = TDdata.split(",");
    	for (j=0;j<TD.length;j++)
    	{
        	var rect = r.rect(x,y,width,height).attr({"fill":"white","stroke":"red"});
        	r.text(x+width/2, y+height/2, TD[j]);
        	x = x + width;
    	}
},

showCorrectAnswer: function()
{
	//this.parent();
	if (this.mCorrectAnswerLabel)
	{
        	this.mCorrectAnswerLabel.setSize(200, 75);
        	this.mCorrectAnswerLabel.setPosition(630,300);

	  	this.mCorrectAnswerLabel.setText('correct answer = red dot'); 
		this.mCorrectAnswerLabel.setVisibility(true);

        	var x = this.getAnswer().charAt(0);
        	var y = this.getAnswer().charAt(2);
        
        	if (this.chart.circles[x][y].data("click") == '0')
        	{
          		this.chart.circles[x][y].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
          		this.chart.circles[x][y].data("click", 1);
        	}
        	clickflag = false;
       		this.mButton.setVisibility(false);
	}		 	 
 	this.hideAnswerInputs();
        this.showUserAnswer();
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.g.a.1_5',5.3105,'5.g.a.1','graphs');
*/
var i_5_g_a_1__5 = new Class(
{
Extends: GraphItem,

initialize: function(sheet)
{
	this.parent(sheet,200,50,225,95,100,50,425,100);
        this.mType = '5.g.a.1_5';

	clickflag = true;

	var x = Math.floor(Math.random()*10);
	var y = Math.floor(Math.random()*10);
	var answer = '' + x + ' ' + y;
	this.setAnswer(answer,0);
	var answer2 = '('+x+','+y+')';
   
	this.setQuestion('Graph the point ' + answer2 + ' by clicking the correct coordinate.');

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(625,80);
},

showCorrectAnswer: function()
{
	//this.parent();
	if (this.mCorrectAnswerLabel)
	{
        	this.mCorrectAnswerLabel.setSize(200, 75);
        	this.mCorrectAnswerLabel.setPosition(630,300);

	  	this.mCorrectAnswerLabel.setText('correct answer = red dot'); 
		this.mCorrectAnswerLabel.setVisibility(true);

        	var x = this.getAnswer().charAt(0);
        	var y = this.getAnswer().charAt(2);
        
        	if (this.chart.circles[x][y].data("click") == '0')
        	{
          		this.chart.circles[x][y].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
          		this.chart.circles[x][y].data("click", 1);
        	}
        	clickflag = false;
       		this.mButton.setVisibility(false);
	}		 	 
 	this.hideAnswerInputs();
        this.showUserAnswer();
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
