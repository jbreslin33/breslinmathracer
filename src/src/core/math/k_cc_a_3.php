/* GAME: */

var k_cc_a_3 = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_a_3(this);	
                this.mSheet.createItems();
                this.mSheet.createShapes();
	}
});

/* SHEET: */ 

var sk_cc_a_3 = new Class(
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

		this.addItem(new i_201(this));
		this.addItem(new i_202(this));
		this.addItem(new i_203(this));
		this.addItem(new i_204(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

/* TYPE_DESCRIPTION: Determine what numbers to say when counting a group of objects. */

var i_201 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 201;

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

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 11-15 */

var i_202 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 202;

		this.mNumberNameArray = new Array();
		this.mNumberNameArray[0] = "zero";
		this.mNumberNameArray[1] = "one";
		this.mNumberNameArray[2] = "one, two";
		this.mNumberNameArray[3] = "one, two, three";
		this.mNumberNameArray[4] = "one, two, three, four";
		this.mNumberNameArray[5] = "one, two, three, four, five";
		this.mNumberNameArray[6] = "one, two, three, four, five, six";
		this.mNumberNameArray[7] = "one, two, three, four, five, six, seven";
		this.mNumberNameArray[8] = "one, two, three, four, five, six, seven, eight";
		this.mNumberNameArray[9] = "one, two, three, four, five, six, seven, eight, nine";
		this.mNumberNameArray[10] = "one, two, three, four, five, six, seven, eight, nine, ten";

                var a = Math.floor(Math.random()*5)+11;
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

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 16-20 */

var i_204 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 204;

                var a = Math.floor(Math.random()*5)+16;
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
