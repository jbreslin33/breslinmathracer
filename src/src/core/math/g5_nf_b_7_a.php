/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.a_1',5.2101,'5.nf.b.7.a','1/3');
*/
var i_5_nf_b_7_a__1 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.7.a_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                fractionA.mDenominator = Math.floor(Math.random()*8+2);
		fractionC = fractionB.subtract(fractionA); 
                answer = fractionA.multiply(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' has his own bedroom closet. He uses ' + fractionA.getString() + ' of it to store his sports equipment. He uses the other ' + fractionC.getString() + ' to store ' + this.ns.mThingOne + '. ');
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});

                //this.setQuestion('' + this.ns.mNameOne + ' has his own bedroom. ' +  + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' need for ' + fractionB.mNumerator + ' servings?');

