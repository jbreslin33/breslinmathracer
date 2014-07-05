/* GAME: */

var k_cc_a_3 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_a_3(this);	
	},

	destructor: function()
	{
		this.parent();
		this.mSheet.destructor();
	},

	update: function()
	{
		this.parent();
	
		if (this.mSheet)
		{	
			this.mSheet.update();
		}
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
              
		this.setScoreNeeded(APPLICATION.mLevel); 

		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		this.addItem(new i_k_cc_a_3_t_1(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

/* TYPE_DESCRIPTION: i_k_cc_a_3_t_1: Count the objects up to 20. */

var i_k_cc_a_3_t_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.3';
                this.mType = 1;

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
