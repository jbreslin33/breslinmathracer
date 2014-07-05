/*************
GAME:
***********/
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

/***************
SHEET: 
******************/
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

/******************
ITEMS: 
*******************/

/*****************
i_k_cc_a_3_t_1: This type will ask what comes next after a number from 0-99.
****************/
var i_k_cc_a_3_t_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.3';
                this.mType = 1;

		var x = Math.floor(Math.random()*100);
		var a = parseInt(x+1);
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('What new comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },
    	
	createShapes: function()
	{	
		this.parent();

		this.addQuestionShape(new Shape(50,50,25,50,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,25,100,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,25,150,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,25,200,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,25,250,this.mSheet.mGame,"/images/bus/kid.png","",""));

                this.addQuestionShape(new Shape(50,50,75,50,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,75,100,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,75,150,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,75,200,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,75,250,this.mSheet.mGame,"/images/bus/kid.png","",""));

                this.addQuestionShape(new Shape(50,50,125,50,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,125,100,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,125,150,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,125,200,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,125,250,this.mSheet.mGame,"/images/bus/kid.png","",""));

                this.addQuestionShape(new Shape(50,50,175,50,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,175,100,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,175,150,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,175,200,this.mSheet.mGame,"/images/bus/kid.png","",""));
                this.addQuestionShape(new Shape(50,50,175,250,this.mSheet.mGame,"/images/bus/kid.png","",""));

		//move the buttons and label to make room for shapes
		this.mQuestionLabel.setPosition(425,95);
		this.mButtonA.setPosition(100,350);
		this.mButtonB.setPosition(380,350);
		this.mButtonC.setPosition(675,350);
	}
});
