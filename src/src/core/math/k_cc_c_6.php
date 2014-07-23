/* GAME: */

var k_cc_c_6 = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_c_6(this);	
                this.mSheet.createItems();
                this.mSheet.createShapes();
	}
});

/* SHEET: */ 

var sk_cc_c_6 = new Class(
{
Extends: Sheet,
	initialize: function(game)
        {
                this.parent(game);
        },

        createItems: function()
        {
                this.parent();
              
                if (APPLICATION.mLevel > APPLICATION.mLevels)
                {
                        this.setScoreNeeded(APPLICATION.mLevels);
                }
                else
                {
                        this.setScoreNeeded(APPLICATION.mLevel); 
                }

		this.addItem(new i_701(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

var i_701 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 701;
    
		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*20+1);
		this.b = Math.floor(Math.random()*20+1);

		this.setQuestion('Compare.');
		if (this.a > this.b)
		{
                	this.setAnswer('Is greater than.',0);
		}
		if (this.a == this.b)
		{
                	this.setAnswer('Is equal to.',0);
 		}
		if (this.a < this.b)
		{
                	this.setAnswer('Is less than.',0);
		}

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var x = 40;
		var y = 100;
		for (var i = 0; i < this.a; i++)
		{
			if (i == 5) 
			{
				x = 40;
				var y = 150;
			}
			if (i == 10) 
			{
				x = 40;
				var y = 200;
			}
			if (i == 15) 
			{
				x = 40;
				var y = 250;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
			x = x + 50;
		}
		var x = 500;
		var y = 100;
		for (var i = 0; i < this.b; i++)
		{
			if (i == 5) 
			{
				x = 500;
				var y = 150;
			}
			if (i == 10) 
			{
				x = 500;
				var y = 200;
			}
			if (i == 15) 
			{
				x = 500; 
				var y = 250;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
			x = x + 50;
		}
	}
});
