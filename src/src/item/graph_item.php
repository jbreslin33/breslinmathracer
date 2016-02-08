
/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItem2 = new Class(
{
Extends: Item,
initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
{
	this.parent(sheet);

    	this.mTempUserAnswer = '';

	if (qw == '')
	{
		this.mQuestionLabel.setSize(100,50);
		this.mQuestionLabel.setPosition(325,95);
	}
	else
	{
		this.mQuestionLabel.setSize(qw,qh);
		this.mQuestionLabel.setPosition(qx,qy);
	}
},
	
createShapes: function()
{
	this.parent();
	
        //question Label
        this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
        this.addShape(this.mQuestionLabel);
        this.mQuestionLabel.mCollidable = false;
        this.mQuestionLabel.mCollisionOn = false;
	this.mQuestionLabel.setText(this.mQuestion);
	
	//user Answer label
        this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

        this.addShape(this.mUserAnswerLabel);
        this.mUserAnswerLabel.mCollidable = false;
        this.mUserAnswerLabel.mCollisionOn = false;
        this.mUserAnswerLabel.setText(this.mQuestion);
	this.mUserAnswerLabel.setVisibility(false);

	//correctAnswer Label
 	this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
        this.addShape(this.mCorrectAnswerLabel);
       	this.mCorrectAnswerLabel.mCollidable = false;
        this.mCorrectAnswerLabel.mCollisionOn = false;
        this.mCorrectAnswerLabel.setText(this.mQuestion);
	this.mCorrectAnswerLabel.setVisibility(false);

    	this.mButton = new ItemButton(150,50,650,250,this.mSheet.mGame,"BUTTON","","Test");
    	this.addShape(this.mButton);
    	this.mButton.mMesh.addEvent('click',this.buttonHit);
    	this.mButton.setAnswer("Submit");
},

addButton: function(button)
{
	this.addShape(button);
},

buttonHit: function()
{
	APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
},

inputKeyHit: function(e)
{
	if (e.key == 'enter')
        {
		if (APPLICATION.mGame)
		{
			if (APPLICATION.mGame.mSheet)
			{
				if (APPLICATION.mGame.mSheet.getItem())
				{
					APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
				}
			}
		}
        }
},
 
inputKeyHitEnter: function(e)
{
	if (e.keyCode == 13)
        {
		if (APPLICATION.mGame)
		{
			if (APPLICATION.mGame.mSheet)
			{
				if (APPLICATION.mGame.mSheet.getItem())
				{
					APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
				}
			}
		}
        }
},
	
showQuestion: function()
{
	this.parent();
	if (this.mQuestionLabel)
	{
		this.mQuestionLabel.setText(this.mQuestion);
		this.mQuestionLabel.setVisibility(true);
	}
}, 

hideQuestion: function()
{
	this.parent();
	if (this.mQuestionLabel)
	{
		this.mQuestionLabel.setVisibility(false);
	}
}, 

//virtual functions that can show and hide buttons??	
showAnswerInputs: function()
{
	this.mButton.setVisibility(true);
},
hideAnswerInputs: function()
{
	this.mButton.setVisibility(false);
},

showUserAnswer: function()
{
	if (this.mUserAnswerLabel)
	{
               	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
               	this.mUserAnswerLabel.setVisibility(true);
	}
}, 
	
hideUserAnswer: function()
{
	if (this.mUserAnswerLabel)
	{
               	this.mUserAnswerLabel.setVisibility(false);
	}
}, 

showCorrectAnswer: function()
{
	this.parent();
	if (this.mCorrectAnswerLabel)
	{
		var answer = '';
		for (i=0; i < this.mAnswerArray.length; i++)	
		{
			if (i == 0)
			{
				answer = answer + '' + this.getAnswer();		
			}
			else
			{
				answer = answer + ' OR ' + this.getAnswer(i);		
			}
		}
		this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
		this.mCorrectAnswerLabel.setVisibility(true);
	}
	this.hideAnswerInputs();
	this.showUserAnswer();
},

hideCorrectAnswer: function()
{
	this.parent();
	if (this.mCorrectAnswerLabel)
	{
		this.mCorrectAnswerLabel.setVisibility(false);
	}
},

setTempUserAnswer: function(answer)
{
	this.mTempUserAnswer = answer;
},

setUserAnswer: function(answer)
{
	this.mUserAnswer = answer;
},
});

/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItem = new Class(
{
Extends: Item,
initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
{
	this.parent(sheet);

    	this.mTempUserAnswer = '';

	if (qw == '')
	{
		this.mQuestionLabel.setSize(100,50);
		this.mQuestionLabel.setPosition(325,95);
	}
	else
	{
		this.mQuestionLabel.setSize(qw,qh);
		this.mQuestionLabel.setPosition(qx,qy);
	}

	this.raphael = Raphael(10, 50, 520, 350);
	
	this.chart = 0;
	this.createChart();
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
	var range = [0,10];

	//var r = Raphael('graph');
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

    	this.chart = new LineChartTest (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);
	this.addQuestionShape(this.chart);
},

createShapes: function()
{
	this.parent();

        //question Label
        this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
        this.addShape(this.mQuestionLabel);
	this.mQuestionLabel.mCollidable = false;
        this.mQuestionLabel.mCollisionOn = false;
	this.mQuestionLabel.setText(this.mQuestion);
	
	//user Answer label
        this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

        this.addShape(this.mUserAnswerLabel);
        this.mUserAnswerLabel.mCollidable = false;
        this.mUserAnswerLabel.mCollisionOn = false;
        this.mUserAnswerLabel.setText(this.mQuestion);
	this.mUserAnswerLabel.setVisibility(false);

	//correctAnswer Label
 	this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
        this.addShape(this.mCorrectAnswerLabel);
        this.mCorrectAnswerLabel.mCollidable = false;
        this.mCorrectAnswerLabel.mCollisionOn = false;
        this.mCorrectAnswerLabel.setText(this.mQuestion);
	this.mCorrectAnswerLabel.setVisibility(false);

    	this.mButton = new ItemButton(150,50,600,250,this.mSheet.mGame,"BUTTON","","Test");
        this.addShape(this.mButton);
    	this.mButton.mMesh.addEvent('click',this.buttonHit);
	this.mButton.setAnswer("Submit");
},

buttonHit: function()
{
        APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
},

showQuestion: function()
{
	this.parent();
	if (this.mQuestionLabel)
	{
		this.mQuestionLabel.setText(this.mQuestion);
		this.mQuestionLabel.setVisibility(true);
	}
	if (this.mButton)
	{
		this.mButton.setVisibility(true);
	}
}, 
hideQuestion: function()
{
	this.parent();
	if (this.mQuestionLabel)
	{
		this.mQuestionLabel.setVisibility(false);
	}
}, 

//virtual functions that can show and hide buttons??	
showAnswerInputs: function()
{
	
},
hideAnswerInputs: function()
{
	
},

showUserAnswer: function()
{
	if (this.mUserAnswerLabel)
	{
               	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
               	this.mUserAnswerLabel.setVisibility(true);
	}
}, 
	
hideUserAnswer: function()
{
	if (this.mUserAnswerLabel)
	{
               	this.mUserAnswerLabel.setVisibility(false);
	}
}, 

showCorrectAnswer: function()
{
	this.parent();
	if (this.mCorrectAnswerLabel)
	{
		var answer = '';
		for (i=0; i < this.mAnswerArray.length; i++)	
		{
			if (i == 0)
			{
				answer = answer + '' + this.getAnswer();		
			}
			else
			{
				answer = answer + ' OR ' + this.getAnswer(i);		
			}
		}
		this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
		this.mCorrectAnswerLabel.setVisibility(true);
	}
	this.hideAnswerInputs();
	this.showUserAnswer();
},

hideCorrectAnswer: function()
{
	this.parent();
	if (this.mCorrectAnswerLabel)
	{
		this.mCorrectAnswerLabel.setVisibility(false);
	}
},

setTempUserAnswer: function(answer)
{
	this.mTempUserAnswer = answer;
}

});


/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItemQuad = new Class(
{
Extends: Item,
        initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
        {
		this.parent(sheet);

    this.mUserAnswer = '';
    this.mTempUserAnswer = '';

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,95);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		}





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

// graph coords
//var startX = 10;
//var endX = 310;
//var startY = 10;
//var endY = 310;
//var width = endX - startX;
//var height = endY - startY;
//var range = [0,10];

// graph coords
var startX = 10;
var endX = 160;
var startY = 10;
var endY = 160;
var width = endX - startX;
var height = endY - startY;
var range = [0,9];

var axis = "0 0 1 0";

/*
//var r = Raphael('graph');
//var rX1 = 10;
//var rY1 = 50;
//var rX2 = 520;
//var rY2 = 350;

var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;


this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

axis = "0 0 1 1";
*/

var iMax = 20;
    var jMax = 20;
    this.circles = new Array();

    for (i=0;i<iMax;i++) {
      this.circles[i]=new Array();
      for (j=0;j<jMax;j++) {
        this.circles[i][j]=0;
      }
    }

this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 160, 160,pointsX,pointsY,range,0,10,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,165, 10, 160, 160,pointsX,pointsY,range,10,10,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,165, 170, 160, 160,pointsX,pointsY,range,10,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 170, 160, 160,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);


/*
this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 180, 180,pointsX,pointsY,range,0,11,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 10, 180, 180,pointsX,pointsY,range,11,11,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 166, 180, 180,pointsX,pointsY,range,11,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 166, 180, 180,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);
*/

this.addQuestionShape(this.chart1);
this.addQuestionShape(this.chart2);
this.addQuestionShape(this.chart3);
this.addQuestionShape(this.chart4);

	},

	setTheFocus: function()
	{
		
	},
 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);
	
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

    this.mButton = new ItemButton(150,50,500,150,this.mSheet.mGame,"BUTTON","","Test");
    this.mButton.mMesh.addEvent('click',this.buttonHit);
    this.mButton.setAnswer("Submit");
        },

  buttonHit: function()
        {
                APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
        },

	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 

	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		
	},
	hideAnswerInputs: function()
	{
		
	},

	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
  },


setTempUserAnswer: function(answer)
	{
    this.mTempUserAnswer = answer;
	},

setUserAnswer: function(answer)
	{
		this.mUserAnswer = answer;
	},

});






/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItemQuad2 = new Class(
{
Extends: TextItem2,
        initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
        {


 // initialize: function(sheet)
 // {
        
    this.parent(sheet,200,50,225,95,100,50,425,100);

		//this.parent(sheet);

    this.mUserAnswer = '';
    this.mTempUserAnswer = '';

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,395);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		}






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

// graph coords
//var startX = 10;
//var endX = 310;
//var startY = 10;
//var endY = 310;
//var width = endX - startX;
//var height = endY - startY;
//var range = [0,10];

// graph coords
var startX = 10;
var endX = 160;
var startY = 10;
var endY = 160;
var width = endX - startX;
var height = endY - startY;
var range = [0,9];

var axis = "0 0 1 0";

/*
//var r = Raphael('graph');
//var rX1 = 10;
//var rY1 = 50;
//var rX2 = 520;
//var rY2 = 350;

var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;


this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

axis = "0 0 1 1";
*/

var iMax = 20;
    var jMax = 20;
    this.circles = new Array();

    for (i=0;i<iMax;i++) {
      this.circles[i]=new Array();
      for (j=0;j<jMax;j++) {
        this.circles[i][j]=0;
      }
    }

this.chart1 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 10, 160, 160,pointsX,pointsY,range,0,10,'1',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart2 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 10, 160, 160,pointsX,pointsY,range,10,10,'2',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

    this.chart3 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 170, 160, 160,pointsX,pointsY,range,10,0,'3',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart4 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 170, 160, 160,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);


/*
this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 180, 180,pointsX,pointsY,range,0,11,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 10, 180, 180,pointsX,pointsY,range,11,11,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 166, 180, 180,pointsX,pointsY,range,11,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 166, 180, 180,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);
*/

this.addQuestionShape(this.chart1);
this.addQuestionShape(this.chart2);
this.addQuestionShape(this.chart3);
this.addQuestionShape(this.chart4);

	},



/*


	setTheFocus: function()
	{
		
	},


 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);
	
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

    this.mButton = new ItemButton(150,50,500,150,this.mSheet.mGame,"BUTTON","","Test");
    this.mButton.mMesh.addEvent('click',this.buttonHit);
    this.mButton.setAnswer("Submit");
        },



  buttonHit: function()
        {
                APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
        },



	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 


	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		
	},
	hideAnswerInputs: function()
	{
		
	},


	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
  },


setTempUserAnswer: function(answer)
	{
    this.mTempUserAnswer = answer;
	},

setUserAnswer: function(answer)
	{
		this.mUserAnswer = answer;
	},



*/



});












/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItemQuad3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
        {


 // initialize: function(sheet)
 // {
        
    this.parent(sheet,200,50,225,95,100,50,425,100);

		//this.parent(sheet);

    this.mUserAnswer = '';
    this.mTempUserAnswer = '';

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,395);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		}






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

// graph coords
//var startX = 10;
//var endX = 310;
//var startY = 10;
//var endY = 310;
//var width = endX - startX;
//var height = endY - startY;
//var range = [0,10];

// graph coords
var startX = 10;
var endX = 160;
var startY = 10;
var endY = 160;
var width = endX - startX;
var height = endY - startY;
var range = [0,9];

var axis = "0 0 1 0";

/*
//var r = Raphael('graph');
//var rX1 = 10;
//var rY1 = 50;
//var rX2 = 520;
//var rY2 = 350;

var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;


this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

axis = "0 0 1 1";
*/

var iMax = 20;
    var jMax = 20;
    this.circles = new Array();

    for (i=0;i<iMax;i++) {
      this.circles[i]=new Array();
      for (j=0;j<jMax;j++) {
        this.circles[i][j]=0;
      }
    }

this.chart1 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 10, 160, 160,pointsX,pointsY,range,0,10,'1',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart2 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 10, 160, 160,pointsX,pointsY,range,10,10,'2',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

    this.chart3 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 170, 160, 160,pointsX,pointsY,range,10,0,'3',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart4 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 170, 160, 160,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);


/*
this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 180, 180,pointsX,pointsY,range,0,11,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 10, 180, 180,pointsX,pointsY,range,11,11,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 166, 180, 180,pointsX,pointsY,range,11,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 166, 180, 180,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);
*/

this.addQuestionShape(this.chart1);
this.addQuestionShape(this.chart2);
this.addQuestionShape(this.chart3);
this.addQuestionShape(this.chart4);

	},



/*


	setTheFocus: function()
	{
		
	},


 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);
	
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

    this.mButton = new ItemButton(150,50,500,150,this.mSheet.mGame,"BUTTON","","Test");
    this.mButton.mMesh.addEvent('click',this.buttonHit);
    this.mButton.setAnswer("Submit");
        },



  buttonHit: function()
        {
                APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
        },



	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 


	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		
	},
	hideAnswerInputs: function()
	{
		
	},


	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
  },


setTempUserAnswer: function(answer)
	{
    this.mTempUserAnswer = answer;
	},

setUserAnswer: function(answer)
	{
		this.mUserAnswer = answer;
	},



*/



});









/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItemQuad4 = new Class(
{
Extends: TextItem2,
        initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
        {


 // initialize: function(sheet)
 // {
        
    this.parent(sheet,200,50,225,95,100,50,425,100);

		//this.parent(sheet);

    this.mUserAnswer = '';
    this.mTempUserAnswer = '';

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,395);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		}






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

// graph coords
//var startX = 10;
//var endX = 310;
//var startY = 10;
//var endY = 310;
//var width = endX - startX;
//var height = endY - startY;
//var range = [0,10];

// graph coords
var startX = 10;
var endX = 160;
var startY = 10;
var endY = 160;
var width = endX - startX;
var height = endY - startY;
var range = [0,9];

var axis = "0 0 1 0";

/*
//var r = Raphael('graph');
//var rX1 = 10;
//var rY1 = 50;
//var rX2 = 520;
//var rY2 = 350;

var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;


this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

axis = "0 0 1 1";
*/

var iMax = 20;
    var jMax = 20;
    this.circles = new Array();

    for (i=0;i<iMax;i++) {
      this.circles[i]=new Array();
      for (j=0;j<jMax;j++) {
        this.circles[i][j]=0;
      }
    }

this.chart1 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 10, 160, 160,pointsX,pointsY,range,0,10,'1',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart2 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 10, 160, 160,pointsX,pointsY,range,10,10,'2',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

    this.chart3 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 170, 160, 160,pointsX,pointsY,range,10,0,'3',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart4 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 170, 160, 160,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);


/*
this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 180, 180,pointsX,pointsY,range,0,11,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 10, 180, 180,pointsX,pointsY,range,11,11,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 166, 180, 180,pointsX,pointsY,range,11,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 166, 180, 180,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);
*/


this.addQuestionShape(this.chart1);
this.addQuestionShape(this.chart2);
this.addQuestionShape(this.chart3);
this.addQuestionShape(this.chart4);

	},



/*


	setTheFocus: function()
	{
		
	},


 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);
	
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

    this.mButton = new ItemButton(150,50,500,150,this.mSheet.mGame,"BUTTON","","Test");
    this.mButton.mMesh.addEvent('click',this.buttonHit);
    this.mButton.setAnswer("Submit");
        },



  buttonHit: function()
        {
                APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
        },



	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 


	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		
	},
	hideAnswerInputs: function()
	{
		
	},


	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
  },


setTempUserAnswer: function(answer)
	{
    this.mTempUserAnswer = answer;
	},

setUserAnswer: function(answer)
	{
		this.mUserAnswer = answer;
	},



*/



});








/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var GraphItemQuad5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {


 // initialize: function(sheet)
 // {
        
    this.parent(sheet);

		//this.parent(sheet);

    this.mUserAnswer = '';
    this.mTempUserAnswer = '';
/*
		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,395);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		}

*/




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

// graph coords
//var startX = 10;
//var endX = 310;
//var startY = 10;
//var endY = 310;
//var width = endX - startX;
//var height = endY - startY;
//var range = [0,10];

// graph coords
var startX = 10;
var endX = 160;
var startY = 10;
var endY = 160;
var width = endX - startX;
var height = endY - startY;
var range = [0,9];

var axis = "0 0 1 0";

/*
//var r = Raphael('graph');
//var rX1 = 10;
//var rY1 = 50;
//var rX2 = 520;
//var rY2 = 350;

var rX1 = 10;
var rY1 = 50;
var rX2 = 520;
var rY2 = 350;


this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

axis = "0 0 1 1";
*/

var iMax = 20;
    var jMax = 20;
    this.circles = new Array();

    for (i=0;i<iMax;i++) {
      this.circles[i]=new Array();
      for (j=0;j<jMax;j++) {
        this.circles[i][j]=0;
      }
    }

this.chart1 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 10, 160, 160,pointsX,pointsY,range,0,10,'1',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart2 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 10, 160, 160,pointsX,pointsY,range,10,10,'2',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

    this.chart3 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,165, 170, 160, 160,pointsX,pointsY,range,10,0,'3',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);

 this.chart4 = new LineChartQuad2 (this.mSheet.mGame,this,this.raphael,10, 170, 160, 160,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false,this.pointsX,this.pointsY);


/*
this.chart1 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 10, 180, 180,pointsX,pointsY,range,0,11,'1',rX1,rY1,"#000000",false);

 this.chart2 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 10, 180, 180,pointsX,pointsY,range,11,11,'2',rX1,rY1,"#000000",false);

    this.chart3 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,176, 166, 180, 180,pointsX,pointsY,range,11,0,'3',rX1,rY1,"#000000",false);

 this.chart4 = new LineChartQuad (this.mSheet.mGame,this,this.raphael,10, 166, 180, 180,pointsX,pointsY,range,0,0,'4',rX1,rY1,"#000000",false);
*/


this.addQuestionShape(this.chart1);
this.addQuestionShape(this.chart2);
this.addQuestionShape(this.chart3);
this.addQuestionShape(this.chart4);

	},



/*


	setTheFocus: function()
	{
		
	},


 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);
	
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

    this.mButton = new ItemButton(150,50,500,150,this.mSheet.mGame,"BUTTON","","Test");
    this.mButton.mMesh.addEvent('click',this.buttonHit);
    this.mButton.setAnswer("Submit");
        },



  buttonHit: function()
        {
                APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer);
        },



	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mTempUserAnswer); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 


	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		
	},
	hideAnswerInputs: function()
	{
		
	},


	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		this.parent();
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
  },


setTempUserAnswer: function(answer)
	{
    this.mTempUserAnswer = answer;
	},

setUserAnswer: function(answer)
	{
		this.mUserAnswer = answer;
	},



*/



});




