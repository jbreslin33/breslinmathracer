/* GAME: */

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

/* SHEET */

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
		this.addItem(new i_k_cc_a_2_t_3(this));
		this.addItem(new i_k_cc_a_2_t_4(this));
		
		this.randomize(10);
        }
});

/* ITEMS: */ 

/* TYPE_DESCRIPTION: i_k_cc_a_2_t_1: This type will ask what comes next after a number from 0-99. */

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

/* TYPE_DESCRIPTION: i_k_cc_a_2_t_2: This type will ask what 2 numbers come next after a number from 0-99. */

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

                a = a + ',' + parseInt(a+1);
                b = b + ',' + parseInt(b+1);
                c = c + ',' + parseInt(c+1);

                this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: i_k_cc_a_2_t_3: This type will ask what 3 numbers come next after a number from 0-99. */

var i_k_cc_a_2_t_3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 3;

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

/ *TYPE_DESCRIPTION: i_k_cc_a_2_t_4: This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100. */

var i_k_cc_a_2_t_4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.2';
                this.mType = 4;

                var a = Math.floor(Math.random()*98);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('What is the missing number? ' + parseInt(a-3) + ',' + parseInt(a-2) + ',' + parseInt(a-1) + ',_,' + parseInt(a+1) + ',' + parseInt(a+2) + ',' + parseInt(a+3));

                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

