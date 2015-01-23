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

                var whole = new Fraction(1,1,true);
                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

		var fractionB = new Fraction(3,1,false);

		fractionC = whole.subtract(fractionA); 

		answer = fractionA.divide(fractionB); 
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' shares a closet with ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' siblings. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' gets to use ' + fractionA.getString() + ' of it to store ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' play stuff. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' siblings use the other ' + fractionC.getString() + ' to store their stuff. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' equally splits ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' closet space among ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mPlayedActivityOne + ', ' + this.ns.mPlayedActivityTwo + ' and ' + this.ns.mPlayedActivityThree + ' equipment. What fraction of the entire closet does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mPlayedActivityTwo + ' equipment take up?'   );
                this.setAnswer('' + answer.getString(),0);
        }
});

                //this.setQuestion('' + this.ns.mNameOne + ' has his own bedroom. ' +  + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' need for ' + fractionB.mNumerator + ' servings?');

