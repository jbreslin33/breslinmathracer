
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_2',0.0102,'k.cc.a.1','What comes next when counting by ten from numbers that end in zero from 10 to 100.');
*/
var i_k_cc_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_2';

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
                this.setAnswer('' + parseInt(a),0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
                this.shuffle(10);
        }
});

/* 
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',0.0101,'k.cc.a.1','Count to 100 by ones');
*/
var i_k_cc_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,375,95,700,50,400,200);

        this.mType = 'k.cc.a.1_1';
	this.mStripCommas = false;

        this.setQuestion('Count to 100 starting at 1 and seperating each number by a comma.');
        this.setAnswer('' + '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100',0);
}
});

