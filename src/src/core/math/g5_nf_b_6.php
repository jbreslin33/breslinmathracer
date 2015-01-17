/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_2',5.2002,'5.nf.b.6','');
*/
var i_5_nf_b_6__2 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
     		this.parent(sheet, 250,50,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator >= fractionA.mDenominator || fractionA.mDenominator == fractionB.mNumerator || parseInt(answer.mNumerator % answer.mDenominator) != 0 )
                {
                        fractionA.mNumerator = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                }

                this.setQuestion('' + this.ns.mNameOne + ' sold ' + fractionB.mNumerator + ' pieces of fruit today. ' + fractionA.getString() + ' were ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sell today?');

                this.setAnswer('' + answer.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_1',5.2001,'5.nf.b.6','');
*/
var i_5_nf_b_6__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
 		this.parent(sheet,300,50,175,95,100,50,425,100);
                this.mType = '5.nf.b.6_1';
   		this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
		var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator >= fractionA.mDenominator || fractionA.mDenominator == fractionB.mNumerator || parseInt(answer.mNumerator % answer.mDenominator) != 0 )
                {
                        fractionA.mNumerator = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator = Math.floor(Math.random()*8+2);
			answer = fractionA.multiply(fractionB);
                }

                this.setQuestion('' + this.ns.mNameOne + ' sold ' + fractionB.mNumerator + ' pieces of fruit today. ' + fractionA.getString() + ' were ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sell today?');

                this.setAnswer('' + answer.getString(),0);
        }
});

