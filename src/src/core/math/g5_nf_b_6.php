/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_5',5.2005,'5.nf.b.6','');
*/
var i_5_nf_b_6__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,575,50,320,75,100,50,380,150);

	this.mType = '5.nf.b.6_5';
        this.ns = new NameSampler();

        var a = 0;
        var nb = 0;
        var db = 0;
        var n = 0;

        while (n % db != 0 || n == 0 || nb >= db || a == db || a == nb)
        {
                a = Math.floor((Math.random()*18)+2);
                nb = Math.floor((Math.random()*18)+2);
                db = Math.floor((Math.random()*18)+2);
                n = parseInt(a * nb);
        }

        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(a*nb),db,true);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' bought ' + a + ' ' + this.ns.mVegetableOne + '. ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' ' + this.ns.mFamilyOne +  ' ate ' +  fractionb.getString() + ' of them. How many ' + this.ns.mVegetableOne + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + ' eat?');

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_4',5.2004,'5.nf.b.6','');
*/
var i_5_nf_b_6__4 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
     		this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_4';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
			answer.reduce();
                }

                this.setQuestion(this.ns.mNameOne + ' controls a character in a video game that is ' + fractionA.getMixedNumber() + ' ' + this.ns.mDistanceIncrementSmall + ' tall. ' + this.ns.mNameTwo + ' has a character that is ' + fractionB.getMixedNumber() + ' times as tall as the character of ' + this.ns.mNameOne + '. How tall is the character controlled by ' + this.ns.mNameTwo + '?');
				
		var answer = fractionA.multiply(fractionB);

                this.setAnswer('' + answer.getMixedNumber(),0);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementSmall,1);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementSmall),2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_3',5.2003,'5.nf.b.6','');
*/
var i_5_nf_b_6__3 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
     		this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_3';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var fractionC = new Fraction(Math.floor(Math.random()*8+2),1,false);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
			answer.reduce();
                }

                this.setQuestion('Three kids built castles in a video game. ' + this.ns.mNameOne + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' castle ' + fractionA.getString() + ' as tall as ' + this.ns.mNameTwo + '. ' + this.ns.mNameThree + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameThree,0,1) + ' casltle ' + fractionB.getMixedNumber() + ' as tall as ' + this.ns.mNameOne + '. ' + this.ns.mNameTwo + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' castle ' + fractionC.mNumerator + ' ' + this.ns.mDistanceIncrementMedium + ' tall. What is the height of the castle ' + this.ns.mNameThree + ' built?');
				
		var tempFraction = fractionA.multiply(fractionB);
		var answer = tempFraction.multiply(fractionC);

                this.setAnswer('' + answer.getMixedNumber(),0);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium,1);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementMedium),2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_2',5.2002,'5.nf.b.6','');
*/
var i_5_nf_b_6__2 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
     		this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
			answer.reduce();
                }

                this.setQuestion('' + this.ns.mNameOne + ' is playing in a rectangular sandbox that has a length of ' + fractionA.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + ' and a width of ' + fractionB.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + '. What is the area in ' + this.ns.mDistanceIncrementMedium + ' squared?');
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium,0);
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

