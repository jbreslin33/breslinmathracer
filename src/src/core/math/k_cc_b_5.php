/* GAME: */

var k_cc_b_5 = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_b_5(this);	
                this.mSheet.createItems();
                this.mSheet.createShapes();
	}
});

/* SHEET: */ 

var sk_cc_b_5 = new Class(
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

		this.addItem(new i_601(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

/* TYPE_DESCRIPTION: Count the objects up to 20. */

var i_601 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 601;

		var a = Math.floor(Math.random()*21);
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
		var x = 0;
		var y = 300;

		var answer = this.getAnswer(); 
		answer = parseInt(answer);	

		for (var i = 0; i < answer; i++)
		{
			if (i == 10) 
			{
				x = 0;
				y = 375;
			}
                	x = parseInt(x + 70);	
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
		}
	}
});
