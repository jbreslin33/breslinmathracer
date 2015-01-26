
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.b_1',5.2201,'5.nf.b.7.b','');
*/
var i_5_nf_b_7_b__1 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.b_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mDenominator = Math.floor(Math.random()*8+2);

                answer = fractionA.multiply(fractionB);
                answer.reduce();

		this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + parseInt(fractionA.mDenominator - 1)  + ' friends had ' + fractionB.getString() + ' of a whole pizza to share equally among them. What fraction of the pizza will each get?');    
                this.setAnswer('' + answer.getString(),0);
        }
});
