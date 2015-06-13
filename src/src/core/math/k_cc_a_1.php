
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_2',0.0102,'k.cc.a.1','This type will ask what 3 numbers come next after a number from 0-99.');
*/

var i_k_cc_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.1_2';
		this.mStripCommas = false;

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
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',0.0101,'k.cc.a.1','This type will ask what 2 numbers come next after a number from 0-99.');
*/

var i_k_cc_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.1_1';
		this.mStripCommas = false;

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

