/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_1',5.2301,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__1 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.c_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionB.divide(fractionA);
                answer.reduce();

                this.setQuestion('' + this.ns.mAdultOne + ' is planning for a class ' + this.ns.mSubjectOne + ' project. Each student can do the assignment with ' + fractionA.getString() + ' page of ' + this.ns.mColorOne + ' construction paper. If ' + this.ns.mAdultOne + ' has ' + fractionB.mNumerator + ' pages of ' + this.ns.mColorOne + ' construction paper then how many assignments can be done?');

                this.setAnswer('' + answer.getString(),0);
        }
});

