/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.1_1',4.2401,'4.md.a.1','');
*/
var i_4_md_a_1__1 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '4.md.a.1_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mDenominator = Math.floor(Math.random()*8+2);

                answer = fractionA.divide(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.mNumerator + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' cuts each of the ' + this.ns.mVegetableOne + ' into ' + this.ns.mNameMachine.getDenominatorName(fractionB.mDenominator) + '. How many pieces of ' + this.ns.mVegetableOne + ' does ' + this.ns.mNameOne + ' have now?');
                this.setAnswer('' + answer.getString(),0);
        }
});

