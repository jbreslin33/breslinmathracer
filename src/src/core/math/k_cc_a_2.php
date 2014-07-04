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

                this.setScoreNeeded(2);
        },

        createItems: function()
        {
                this.parent();
               
		if (APPLICATION.mLevel == 1)
		{ 
			this.addItem(new i_k_cc_a_2_t_1(this));
		}
		if (APPLICATION.mLevel == 2)
		{ 
			this.addItem(new i_k_cc_a_2_t_2(this));
			this.addItem(new i_k_cc_a_2_t_3(this));
		}
        }
});

/******************
ITEMS:
*******************/

var i_k_cc_a_2_t_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 1;

                this.setQuestion('What comes after 0?');
                this.setAnswer(1,0);

                this.mButtonA.setAnswer('0');
                this.mButtonB.setAnswer('1');
                this.mButtonC.setAnswer('2');
                this.shuffle(10);
        }
});

var i_k_cc_a_2_t_2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 2;

                this.setQuestion('What comes after 1?');
                this.setAnswer(2,0);

                this.mButtonA.setAnswer('1');
                this.mButtonB.setAnswer('2');
                this.mButtonC.setAnswer('3');
                this.shuffle(10);
        }
});

var i_k_cc_a_2_t_3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 2;

                this.setQuestion('What comes after 2?');
                this.setAnswer(2,0);

                this.mButtonA.setAnswer('1');
                this.mButtonB.setAnswer('2');
                this.mButtonC.setAnswer('3');
                this.shuffle(10);
        }
});
