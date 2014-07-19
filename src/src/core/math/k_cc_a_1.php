/* GAME: */

var k_cc_a_1 = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_a_1(this);	
		this.mSheet.createItems();
		this.mSheet.createShapes();
	}
});

/* SHEET: */

var sk_cc_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
                this.parent(game);
		this.mStandardDescription = 'Use the four operations to solve word problems involving distances, intervals of time, liquid volumes, masses of objects, and money, including problems involving simple fractions or decimals, and problems that require expressing measurements given in a larger unit in terms of a smaller unit. Represent measurement quantities using diagrams such as number line diagrams that feature a measurement scale.';
        },

        createItems: function()
        {
                this.parent();
 
		this.addItem(new i_k_cc_a_1_t_1(this));
		this.addItem(new i_k_cc_a_1_t_2(this));
		this.addItem(new i_k_cc_a_1_t_3(this));
		this.addItem(new i_k_cc_a_1_t_4(this));
		
		this.randomize(10);
        }
});

/* ITEMS: */

/* TYPE_DESCRIPTION: i_k_cc_a_1_t_1: This type will ask what comes next after a number from 0-99. */

var i_k_cc_a_1_t_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.1';
                this.mType = 1;
		this.mInfo = 'This type will ask what comes next after a number from 0-99.';

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

/* TYPE_DESCRIPTION: i_k_cc_a_1_t_2: This type will ask what comes next after a number ending in 9 from 0-99. */

var i_k_cc_a_1_t_2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.1';
                this.mType = 2;
		this.mInfo = 'This type will ask what comes next after a number ending in 9 from 0-99.';

                var x = Math.floor((Math.random()*10)+1);
		x = parseInt(x * 10);
		x = parseInt(x-1);
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
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: i_k_cc_a_1_t_3: This type will ask what comes next after a number ending in 0 from 0-99. */

var i_k_cc_a_1_t_3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.1';
                this.mType = 3;
		this.mInfo = 'This type will ask what comes next after a number ending in 0 from 0-99.';

                var x = Math.floor((Math.random()*9)+1);
                x = parseInt(x * 10);
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
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: i_k_cc_a_1_t_4:  When couning by ten from numbers that end in zero. What comes next. Numbers range from 0-100. */

var i_k_cc_a_1_t_4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = 'k.cc.a.1';
                this.mType = 4;
		this.mInfo = 'When couning by ten from numbers that end in zero. What comes next. Numbers range from 0-100.';	

                var x = Math.floor((Math.random()*9)+1);
                x = parseInt(x * 10);
                var a = parseInt(x+10);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('When couning by tens what comes after ' + x + '?');
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});


