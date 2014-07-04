/*************
GAME:
***********/
var k_cc_a_2 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_a_2(this);	
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
SHEET: should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.
******************/
var sk_cc_a_2 = new Class(
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

		this.addItem(new i_k_cc_a_2_t_1(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		this.addItem(new i_k_cc_a_2_t_2(this));
		
		this.randomize(10);
        }
});

/******************
ITEMS: 
*******************/

/*****************
i_k_cc_a_2_t_1: This type will ask what comes next after a number from 0-99.
****************/
var i_k_cc_a_2_t_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
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

		this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/*****************
i_k_cc_a_2_t_2: This type will ask what comes next after a number from 0-99.
****************/
var i_k_cc_a_2_t_2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 2;

                var x = Math.floor(Math.random()*98);
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

                a = a + ',' + parseInt(a+1) + ',' + parseInt(a+2);
                b = b + ',' + parseInt(b+1) + ',' + parseInt(b+2);
                c = c + ',' + parseInt(c+1) + ',' + parseInt(c+2);
                
		this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

