
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_9',0.1609,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__9 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_9';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 9;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_8',0.1608,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__8 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_8';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 8;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_7',0.1607,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__7 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_7';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 7;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_6',0.1606,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__6 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_6';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 6;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_5',0.1605,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_5';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 5;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_4',0.1604,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_4';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 4;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
                
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_3',0.1603,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_3';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 3;
                this.y = 0;
        
		this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_2',0.1602,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_2';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 2;
                this.y = 0;

        	this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
			
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_1',0.1601,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_1';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 1;
                this.y = 0;

        	this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;


                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
                
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_11',0.1611,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__11 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_11';
		this.mChopWhiteSpace = false;
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		this.xa = Math.floor((Math.random()*10)+1);
		this.ya = Math.floor((Math.random()*10)+1);
		this.xb = Math.floor((Math.random()*10)+1);
		this.yb = Math.floor((Math.random()*10)+1);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5 || this.x > 10 || this.a < 0 || this.b < 0 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
		{
			//variables
                	this.x = Math.floor((Math.random()*9)+1);
                	this.y = 10; 
			this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;  
	
			//wrong answers 
			this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;  
			this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;  
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
