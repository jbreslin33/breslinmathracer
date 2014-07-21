/* GAME: */

var k_cc_b_4_a = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_b_4_a(this);	
                this.mSheet.createItems();
                this.mSheet.createShapes();
	}
});

/* SHEET: */ 

var sk_cc_b_4_a = new Class(
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

		this.addItem(new i_301(this));
		this.addItem(new i_301(this));
		this.addItem(new i_301(this));
		this.addItem(new i_301(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

/* TYPE_DESCRIPTION: Count the objects up to 20. */

var i_301 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 301;

		var a = Math.floor(Math.random()*5)+5;
		var b = 0;
		var c = 0;
		this.mTotal = a;

		var aText = ''
		var bText = ''
		var cText = ''
		var bArray = 0;
		var cArray = 0;

		this.setQuestion('What numbers would you say while couting the kids?');
	
		while (aText == bText || aText == cText || bText == cText)
		{
			aText = '';
			bText = '';
			cText = '';

			for (i = a; i > 0; i--)
			{
				aText = aText + '' + parseInt(a-i+1); 
				if (i > 1)
				{
					aText = aText + ',';
				}	 
			}
			bText = aText;
			cText = aText;

			bText = bText.replace("" + Math.floor(Math.random()*bText.length),"" + Math.floor(Math.random()*bText.length)); 
			cText = cText.replace("" + Math.floor(Math.random()*cText.length),"" + Math.floor(Math.random()*cText.length)); 
		}
		

                this.setAnswer('' + aText,0);
                this.mButtonA.setAnswer(this.getAnswer());
                this.mButtonB.setAnswer(bText);
                this.mButtonC.setAnswer(cText);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 0;
		var y = 300;

		for (var i = 0; i < this.mTotal; i++)
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

/* TYPE_DESCRIPTION: Count the objects up to 20. Make answer zero. */

var i_302 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 302;

                var a = 0;
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
        }
});
/ * ITEMS: */

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 11-15 */

var i_303 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 303;

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

var i_304 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 304;

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
