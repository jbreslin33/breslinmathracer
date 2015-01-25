/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.a_3',5.2103,'5.nf.b.7.a','');
*/
var i_5_nf_b_7_a__3 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.a_3';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionA.divide(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' is given an allowance every week for doing chores. ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' divides the allowance into ' + fractionB.mNumerator + ' parts. ');
                this.setAnswer('' + answer.getString(),0);
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.a_2',5.2102,'5.nf.b.7.a','');
*/
var i_5_nf_b_7_a__2 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.a_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionA.divide(fractionB);
                answer.reduce();

		this.setQuestion('' + this.ns.mNameOne + ' had some ' + this.ns.mRopeOne + ' that was ' + fractionA.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' long. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' cut it into ' + fractionB.mNumerator + ' pieces for an art project. How many ' + this.ns.mDistanceIncrementMedium + ' long is each piece?');    
                this.setAnswer('' + answer.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.a_1',5.2101,'5.nf.b.7.a','');
*/
var i_5_nf_b_7_a__1 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
		this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

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
