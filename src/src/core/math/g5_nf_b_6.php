/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_1',5.2001,'5.nf.b.6','');
*/
var i_5_nf_b_6__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.6_1';
   		this.ns = new NameSampler();

                var na = 0;
                var da = 0;
                var b = 0;

                while (na >= da)
                {
                        na = Math.floor(Math.random()*8+2);
                        da = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);
                }

                var fractionA = new Fraction(na,da,false);
                var fractionB = new Fraction(b,1,false);
		var answer = fractionA.multiply(fractionB);

                this.setQuestion('' + this.ns.mNameOne + ' sold ' + b + ' pieces of fruit today. ' + fractionA.getString() + ' were ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sell today?');

                this.setAnswer('' + answer.getString(),0);
        }
});

