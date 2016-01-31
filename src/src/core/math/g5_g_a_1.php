
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
	
	this.mRaphael = Raphael(320, 10, 440,170);

	this.ns = new NameSampler();
	this.a = 'Height in mm of ' + this.ns.mVegetableOne 
	this.b = 'Height in mm of ' + this.ns.mVegetableTwo 

	this.xArray = new Array();
	this.yArray = new Array();
	this.xStart= Math.floor(Math.random()*2);
	this.yStart= Math.floor(Math.random()*3);
	this.xStep = Math.floor(Math.random()*3)+1;
	this.yStep = Math.floor(Math.random()*4)+1;

	this.xArray.push(parseInt(this.xStart));
	this.xArray.push(parseInt(this.xStart + this.xStep));
	this.xArray.push(parseInt(this.xStart + this.xStep + this.xStep ));
	this.xArray.push(parseInt(this.xStart + this.xStep + this.xStep + this.xStep));
	this.xArray.push(parseInt(this.xStart + this.xStep + this.xStep + this.xStep + this.xStep));
	
	this.yArray.push(parseInt(this.yStart));
	this.yArray.push(parseInt(this.yStart + this.yStep));
	this.yArray.push(parseInt(this.yStart + this.yStep + this.yStep));
	this.yArray.push(parseInt(this.yStart + this.yStep + this.yStep + this.yStep));
	this.yArray.push(parseInt(this.yStart + this.yStep + this.yStep + this.yStep + this.yStep));
	
	//col 1
	this.WriteTableRow(10,50,25,20,this.mRaphael,"year");
	this.WriteTableRow(10,70,25,20,this.mRaphael,"1");
	this.WriteTableRow(10,90,25,20,this.mRaphael,"2");
	this.WriteTableRow(10,110,25,20,this.mRaphael,"3");
	this.WriteTableRow(10,130,25,20,this.mRaphael,"4");
	this.WriteTableRow(10,150,25,20,this.mRaphael,"5");

	//col 2	
	this.WriteTableRow(35,50,170,20,this.mRaphael,this.a);
	this.WriteTableRow(35,70,170,20,this.mRaphael,this.xArray[0]);
	this.WriteTableRow(35,90,170,20,this.mRaphael,this.xArray[1]);

	//col 3	
	this.WriteTableRow(205,50,170,20,this.mRaphael,this.b);
	this.WriteTableRow(205,70,170,20,this.mRaphael,this.yArray[0]);
	this.WriteTableRow(205,90,170,20,this.mRaphael,this.yArray[1]);
	
	//col 4	
	this.WriteTableRow(375,50,60,20,this.mRaphael,"Ordered Pair");
	this.WriteTableRow(375,70,60,20,this.mRaphael,"(6,7)");
	this.WriteTableRow(375,90,60,20,this.mRaphael,"(8,9)");

	//---graph
	clickflag = true;

	var x = Math.floor(Math.random()*10);
	var y = Math.floor(Math.random()*10);
	var answer = '' + x + ' ' + y;
	this.setAnswer(answer,0);
	var answer2 = '('+x+','+y+')';
   
	this.setQuestion('Graph the point ' + answer2 + ' by clicking the correct coordinate.');

	this.mQuestionLabel.setSize(220,100);
	this.mQuestionLabel.setPosition(670,225);
	this.mButton.setPosition(650,400);

	this.mAnswerTextBoxArray = new Array();

 	//answer Input
	for (var i = 0; i < 9; i++)
	{
        	var tb = new Shape(170,20,437,300,this.mSheet.mGame,"INPUT","","");
        	tb.mMesh.value = '';
        	tb.mCollidable = false;
        	tb.mCollisionOn = false;
        	if (navigator.appName == "Microsoft Internet Explorer")
        	{
                	tb.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
        	}
        	else
        	{
                	tb.mMesh.addEvent('keypress',this.inputKeyHit);
        	}
		this.mAnswerTextBoxArray.push(tb);
        	this.addShape(tb);
	}
	//col1
	this.mAnswerTextBoxArray[0].setPosition(440,130);
	this.mAnswerTextBoxArray[1].setPosition(440,150);
	this.mAnswerTextBoxArray[2].setPosition(440,170);
	
	//col2
	this.mAnswerTextBoxArray[3].setPosition(610,130);
	this.mAnswerTextBoxArray[4].setPosition(610,150);
	this.mAnswerTextBoxArray[5].setPosition(610,170);
	
	//col3
	this.mAnswerTextBoxArray[6].setPosition(725,130);
	this.mAnswerTextBoxArray[7].setPosition(725,150);
	this.mAnswerTextBoxArray[8].setPosition(725,170);
	
	this.mAnswerTextBoxArray[6].setSize(60,20);
	this.mAnswerTextBoxArray[7].setSize(60,20);
	this.mAnswerTextBoxArray[8].setSize(60,20);

},

createChart: function()
{
        // graph coords
        var startX = 10;
        var endX = 310;
        var startY = 10;
        var endY = 310;
        var width = endX - startX;
        var height = endY - startY;
        var range = [0,30];

        var rX1 = 10;
        var rY1 = 50;
        var rX2 = 520;
        var rY2 = 350;

        this.raphaelSizeX = rX2;
        this.raphaelSizeY = rY2;

        var pointsX;
        var pointsY;

        pointsX = [];
        pointsY = [];

        this.chart = new LineChartTestMultiple (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);
        this.addQuestionShape(this.chart);
},


WriteTableRow: function(x,y,width,height,r,TD)
{
	var rect = new Rectangle(width,height,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.6,false);
	this.addShape(rect);
	var t = new RaphaelText(x+width/2,y+height/2,this,0,0,1,"#000000",.5,false,"" + TD,12);
	this.addShape(t);
        x = x + width;
},

checkUserAnswer: function()
{
	var cArray = new Array();
	cArray.push(2);
	cArray.push(2);
	cArray.push(2);
	cArray.push(2);
	cArray.push(2);
	
	for (var j = 0; j < this.chart.circles.length; j++)
	{
		for (var k = 0; k < this.chart.circles.length; k++)
		{
 			if (this.chart.circles[j][k].data("click") == '1')
			{
				//APPLICATION.log('j:' + j + ' k:' + k);
				for (var v = 0; v < this.xArray.length; v++)
				{
					if (this.xArray[v] == j && this.yArray[v] == k)
					{
						cArray[v] = 1;
					}
				}
			}
		}
	}

	var c = 1;
	for (var e = 0; e < cArray.length; e++)
	{
		if (cArray[e] == 2)
		{
			c = 2;
		}
	}

	if (c == 1)
	{
		return true;
	}
	else
	{
		return false;
	}

/*
	correctAnswerFound = false;
        for (i = 0; i <  this.mAnswerArray.length; i++)
        {
        	//ignorecase
                if (this.mIgnoreCase == true)
               	{ 
                	if (this.mUserAnswer == this.mAnswerArray[i].toLowerCase())
                        {
                                correctAnswerFound = true;
                        }
                }
                else
                {
               	        if (this.mUserAnswer == this.mAnswerArray[i])
                        {
                                correctAnswerFound = true;
                        }
                }
        }
        if (correctAnswerFound == false)
        {
                this.mSheet.setTypeWrong(this.mType);
        }
*/
        return correctAnswerFound;
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
			
		APPLICATION.log(' x:' + this.xArray[0] + ' y:' + this.yArray[0]);
		APPLICATION.log(' x:' + this.xArray[1] + ' y:' + this.yArray[1]);
		APPLICATION.log(' x:' + this.xArray[2] + ' y:' + this.yArray[2]);
		APPLICATION.log(' x:' + this.xArray[3] + ' y:' + this.yArray[3]);
		APPLICATION.log(' x:' + this.xArray[4] + ' y:' + this.yArray[4]);
		
          	this.chart.circles[this.xArray[0]][this.yArray[0]].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
		this.chart.circles[this.xArray[0]][this.yArray[0]].data("click", 1);
          	
		this.chart.circles[this.xArray[1]][this.yArray[1]].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
		this.chart.circles[this.xArray[1]][this.yArray[1]].data("click", 1);
		
		this.chart.circles[this.xArray[2]][this.yArray[2]].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
		this.chart.circles[this.xArray[2]][this.yArray[2]].data("click", 1);
		
		this.chart.circles[this.xArray[3]][this.yArray[3]].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
		this.chart.circles[this.xArray[3]][this.yArray[3]].data("click", 1);
		
		this.chart.circles[this.xArray[4]][this.yArray[4]].attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: 1}).scale(.5,.5);
		this.chart.circles[this.xArray[4]][this.yArray[4]].data("click", 1);

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

var chart = new LineChartTestMultiple (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

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
