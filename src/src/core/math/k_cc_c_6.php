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
		this.addItem(new i_701(this));
		this.addItem(new i_701(this));
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

		var a = Math.floor(Math.random()*2);
		var b = Math.floor(Math.random()*2);
		if (a == 0)
		{
			a = 8;
		}
		if (a == 1)
		{
			a = 12;
		}
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('How many kids?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 400;
		var y = 260;

		var answer = this.getAnswer(); 
		answer = parseInt(answer);	

		for (var i = 0; i < answer; i++)
		{
			if (answer == 8) 
			{
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-85),this.mSheet.mGame,"/images/bus/kid.png","",""));
			}
		}
	}
});
