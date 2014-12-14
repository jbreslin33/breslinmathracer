/* 
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',0.0101,'k.cc.a.1','What comes next when counting by ten from numbers that end in zero from 10 to 100.');
*/
var i_k_cc_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_1';

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
