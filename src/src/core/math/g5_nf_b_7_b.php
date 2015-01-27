
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.b_5',5.2205,'5.nf.b.7.b','');
*/
var i_5_nf_b_7_b__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
             	this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '5.nf.b.7.b_5';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionB.divide(fractionA);
                answer.reduce();
	
		this.setQuestion('How many one ' + this.ns.mNameMachine.getDenominatorName(fractionA.mDenominator) + ' are there in ' + fractionB.mNumerator + '?');   
                this.setAnswer('' + answer.getString(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.b_4',5.2204,'5.nf.b.7.b','');
*/
var i_5_nf_b_7_b__4 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.b_4';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mDenominator = Math.floor(Math.random()*8+2);

                answer = fractionA.divide(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.mNumerator + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes ' + fractionB.getString() + ' ' + this.ns.mLiquidVolumeOne + ' size servings of ' + this.ns.mDrinkOne + ' then how many can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' make total?'       );
                this.setAnswer('' + answer.getString(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.b_3',5.2203,'5.nf.b.7.b','');
*/
var i_5_nf_b_7_b__3 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.b_3';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,4,true);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionB.divide(fractionA);
                answer.reduce();

                this.setQuestion('One quart of ' + this.ns.mDrinkOne + ' is equivalent to ' + fractionA.getString() + ' gallon. How many quarts are in ' + fractionB.mNumerator + ' gallons?');
                this.setAnswer('' + answer.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.b_2',5.2202,'5.nf.b.7.b','');
*/
var i_5_nf_b_7_b__2 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.b_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                answer = fractionB.divide(fractionA);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' uses ' + fractionA.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' of ' + this.ns.mRopeOne + ' to put around the perimeter of each of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' drawings. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' has ' + fractionB.mNumerator + ' ' + this.ns.mDistanceIncrementMedium + ' of ' + this.ns.mRopeOne + ' then how many drawings can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' put ' + this.ns.mRopeOne + ' around the perimeter on?');
                this.setAnswer('' + answer.getString(),0);
                this.setAnswer('' + answer.getString() + ' drawings',1);
        }
});

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
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mDenominator = Math.floor(Math.random()*8+2);

                answer = fractionA.divide(fractionB);
                answer.reduce();

		this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.mNumerator + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' cuts each of the ' + this.ns.mVegetableOne + ' into ' + this.ns.mNameMachine.getDenominatorName(fractionB.mDenominator) + '. How many pieces of ' + this.ns.mVegetableOne + ' does ' + this.ns.mNameOne + ' have now?');    
                this.setAnswer('' + answer.getString(),0);
        }
});
