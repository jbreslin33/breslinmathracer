/* GAME: */

var g4_nbt_a_2 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new s4_nbt_a_1(this);	
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

var s4_nbt_a_1 = new Class(
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

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			rand = 1 + Math.floor(Math.random()*1);

			if(rand == 1)
				this.addItem(new i_4_nbt_a_1_t_1(this));

			if(rand == 2)
				this.addItem(new i_4_nbt_a_1_t_2(this));

			if(rand == 3)
				this.addItem(new i_4_nbt_a_1_t_3(this));

			if(rand == 4)
				this.addItem(new i_4_nbt_a_1_t_4(this));

			if(rand == 5)
				this.addItem(new i_4_nbt_a_1_t_5(this));

			if(rand == 6)
				this.addItem(new i_4_nbt_a_1_t_6(this));

			if(rand == 7)
				this.addItem(new i_4_nbt_a_1_t_7(this));

			if(rand == 8)
				this.addItem(new i_4_nbt_a_1_t_8(this));

			if(rand == 9)
				this.addItem(new i_4_nbt_a_1_t_9(this));

			if(rand == 10)
				this.addItem(new i_4_nbt_a_1_t_10(this));

		
		}
        }
});

/* ITEMS: */ 

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_1: This type will ask which digit is in the ones column. */

var i_4_nbt_a_1_t_1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 1;

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'ones';
		answer = ones;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

                //this.mButtonA.setAnswer(a);
                //this.mButtonB.setAnswer(b);
                //this.mButtonC.setAnswer(c);
                //this.shuffle(10);
        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_2: This type will ask which digit is in the tens column. */

var i_4_nbt_a_1_t_2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 2;

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'tens';
		answer = tens;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_3: This type will ask which digit is in the hundreds column. */

var i_4_nbt_a_1_t_3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 3;

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'hundreds';
		answer = hundreds;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_4: This type will ask which digit is in the thousands column. */

var i_4_nbt_a_1_t_4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 4;

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'thousands';
		answer = thousands;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_5: This type will give thousands and ask for hundreds. */

var i_4_nbt_a_1_t_5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 5;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'hundreds';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_6: This type will give thousands and ask for tens. */

var i_4_nbt_a_1_t_6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 6;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'tens';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});


/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_7: This type will give thousands and ask for ones. */

var i_4_nbt_a_1_t_7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 7;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'ones';

		answer = varA * 1000;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_8: This type will give hundreds and ask for tens. */

var i_4_nbt_a_1_t_8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 8;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'tens';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_9: This type will give hundreds and ask for ones. */

var i_4_nbt_a_1_t_9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 9;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'ones';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});

/* TYPE_DESCRIPTION: i_4_nbt_a_1_t_10: This type will give tens and ask for ones. */

var i_4_nbt_a_1_t_10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mStandard = '4.nbt.a.1';
                this.mType = 10;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'tens';
		varC = 'ones';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer(answer,0);

        }
});
