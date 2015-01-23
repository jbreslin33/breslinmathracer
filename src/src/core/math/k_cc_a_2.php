/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_1',0.0201,'k.cc.a.2','This type will ask what 2 numbers come next after a number from 0-99.');
*/

var i_k_cc_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_1';

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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_2',0.0202,'k.cc.a.2','This type will ask what 3 numbers come next after a number from 0-99.');
*/

var i_k_cc_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_2';

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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_3',0.0203,'k.cc.a.2','This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100.');
*/

var i_k_cc_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_3';

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

                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
        insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_4',0.0204,'k.cc.a.2','What comes next after a number from 0-10 that does not end in 0 or 9.');
*/

var i_k_cc_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_4';

		var x = Math.floor((Math.random()*8)+1);
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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
        insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_5',0.0205,'k.cc.a.2','What comes next after a number from 11-99 that does not end in 0 or 9.');
*/

var i_k_cc_a_2__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_5';

		var endNumber = Math.floor((Math.random()*8)+1);
		var booster = Math.floor((Math.random()*9)+1);
		booster = booster * 10; //should be 0,10,20,30,etc..
		var x = booster + endNumber;	
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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_6',0.0206,'k.cc.a.2','What comes next after 9.');
*/

var i_k_cc_a_2__6 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_6';

		var x = 9;
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

                this.setQuestion('What comes after 9?');
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_7',0.0207,'k.cc.a.2','What comes next after a number ending in 9 from 11-99.');
*/

var i_k_cc_a_2__7 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_7';

                var factorOfTen = Math.floor((Math.random()*9)+1);
		factorOfTen = factorOfTen * 10;
                x = parseInt(factorOfTen + 9);
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
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_8',0.0208,'k.cc.a.2','What comes next after zero.');
*/

var i_k_cc_a_2__8 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_8';

                var x = 0;
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

                this.setQuestion('What comes after 0?');
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_9',0.0209,'k.cc.a.2','What comes next after 10.');
*/

var i_k_cc_a_2__9 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_9';

                var x = 10;
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

                this.setQuestion('What comes after 10?');
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_10',0.0210,'k.cc.a.2','What comes next after number ending in zero from 11-99.');
*/

var i_k_cc_a_2__10 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.2_10';

                var x = Math.floor((Math.random()*7)+2);
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
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

