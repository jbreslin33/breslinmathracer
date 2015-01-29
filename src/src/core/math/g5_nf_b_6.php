
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_12',5.2012,'5.nf.b.6','');
*/
var i_5_nf_b_6__12 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_12';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                        answer.reduce();
                }

                this.setQuestion('' + this.ns.mNameOne + ' works ' + fractionA.getMixedNumber() + ' hours per week. tablespoons of sugar per serving. How many tablespoons would ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' need for ' + fractionB.mNumerator + ' servings?');
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_11',5.2011,'5.nf.b.6','');
*/
var i_5_nf_b_6__11 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_11';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                        answer.reduce();
                }

                this.setQuestion('' + this.ns.mNameOne + ' is making a dessert. The recipe calls for ' + fractionA.getMixedNumber() + ' tablespoons of sugar per serving. How many tablespoons would ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' need for ' + fractionB.mNumerator + ' servings?');
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_10',5.2010,'5.nf.b.6','');
*/
var i_5_nf_b_6__10 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_10';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var fractionC = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*28+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        fractionC.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionC.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionB.add(fractionC);
                        answer = fractionA.multiply(answer);
                        answer.reduce();
                }

                this.setQuestion('Find the Product: ' + fractionA.getMixedNumber() + '(' + fractionB.getString() + ' + ' + fractionC.getString() + ')');
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_9',5.2009,'5.nf.b.6','');
*/
var i_5_nf_b_6__9 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_9';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var fractionC = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*28+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        fractionC.mNumerator   = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                        answer = fractionC.multiply(answer);
                        answer.reduce();
                }

                this.setQuestion('Find the Product: ' + fractionA.getString() + ' &times ' + fractionB.getString() + ' &times ' + fractionC.mNumerator);
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_8',5.2008,'5.nf.b.6','');
*/
var i_5_nf_b_6__8 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_8';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var fractionC = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*28+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        fractionC.mNumerator   = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
			answer = fractionC.multiply(answer);
                        answer.reduce();
                }

                this.setQuestion('Find the Product: ' + fractionA.getString() + ' &times ' + fractionC.mNumerator + ' &times ' + fractionB.getMixedNumber());
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_7',5.2007,'5.nf.b.6','');
*/
var i_5_nf_b_6__7 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_7';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);
                var answer = fractionA.multiply(fractionB);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                        answer.reduce();
                }

                this.setQuestion('Find the Product: ' + fractionA.getMixedNumber() + ' &times ' + fractionB.getMixedNumber());
                this.setAnswer('' + answer.getMixedNumber(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_6',5.2006,'5.nf.b.6','');
*/
var i_5_nf_b_6__6 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '5.nf.b.6_6';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,false);
                var fractionB = new Fraction(1,1,false);

		var answer = new Fraction(1,1,true);

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1 )
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*18+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
                        answer.reduce();

			var weekday = new Fraction(5,1,false);
                	var fraction = fractionA.multiply(fractionB);
			answer = fraction.multiply(weekday);
			answer.reduce();
                }
                
		this.setQuestion('Every weekday ' + this.ns.mNameOne + ' runs ' + fractionA.getMixedNumber() + ' laps around her block which is ' + fractionB.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' long. How many ' + this.ns.mDistanceIncrementLarge + ' does ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' run per week?');

                this.setAnswer('' + answer.getMixedNumber(),0);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementLarge,1);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementLarge),2);
        }
});

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
        var nc = 0;
        var dc = 0;
        var numb = 0;
        var numc = 0;
	var answer = 0;

        while (numb % db != 0 || numb == 0 || numc % dc != 0 || numc == 0 || nb >= db || a == db || a == nb || nc >= dc || a == dc || a == nc || answer < 1)
        {
                a = Math.floor((Math.random()*18)+2);
                nb = Math.floor((Math.random()*18)+2);
                db = Math.floor((Math.random()*18)+2);
                nc = Math.floor((Math.random()*18)+2);
                dc = Math.floor((Math.random()*18)+2);
                numb = parseInt(a * nb);
                numc = parseInt(a * nc);

        	var fractiona = new Fraction(a,1);
        	var fractionb = new Fraction(nb,db);
        	var fractionc = new Fraction(nc,dc);

        	var answerb = fractionb.multiply(fractiona); 
        	var answerc = fractionc.multiply(fractiona); 
		answerb.reduce();
		answerc.reduce();

		var answer = parseInt( a - (answerb.mNumerator + answerc.mNumerator) ); 	
        }
	
        this.setAnswer('' + answer,0);
        this.setQuestion('' + this.ns.mNameOne + ' bought ' + a + ' pieces of fruit. ' + fractionb.getString() + ' of them were ' + this.ns.mFruitOne + '. ' + fractionc.getString() + ' of them were ' + this.ns.mFruitTwo + '. The rest were ' + this.ns.mFruitThree + '. How many were ' + this.ns.mFruitThree + '?'  );

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

                this.setQuestion('Three kids built castles in a video game. ' + this.ns.mNameOne + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' castle ' + fractionA.getString() + ' as tall as ' + this.ns.mNameTwo + '. ' + this.ns.mNameThree + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameThree,0,1) + ' castle ' + fractionB.getMixedNumber() + ' as tall as ' + this.ns.mNameOne + '. ' + this.ns.mNameTwo + ' built ' + this.ns.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' castle ' + fractionC.mNumerator + ' ' + this.ns.mDistanceIncrementMedium + ' tall. What is the height of the castle ' + this.ns.mNameThree + ' built?');
				
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

                while (fractionA.mNumerator % fractionA.mDenominator == 0 || fractionB.mNumerator % fractionB.mDenominator == 0 || fractionA.mNumerator <= fractionA.mDenominator || fractionB.mNumerator <= fractionB.mDenominator || fractionA.mDenominator == fractionB.mNumerator || answer.mDenominator == 1)
                {
                        fractionA.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionA.mDenominator = Math.floor(Math.random()*8+2);
                        fractionB.mNumerator   = Math.floor(Math.random()*8+2);
                        fractionB.mDenominator = Math.floor(Math.random()*8+2);
                        answer = fractionA.multiply(fractionB);
			answer.reduce();
                }

                this.setQuestion('' + this.ns.mNameOne + ' is playing in a rectangular sandbox that has a length of ' + fractionA.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + ' and a width of ' + fractionB.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + '. What is the area in ' + this.ns.mDistanceIncrementMedium + ' squared?');
                this.setAnswer('' + answer.getMixedNumber(),0);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium,1);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementMedium),2);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + ' squared',3);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementMedium) + ' squared',4);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mDistanceIncrementMedium + ' sq',5);
                this.setAnswer('' + answer.getMixedNumber() + ' ' + this.ns.mNameMachine.getDistanceAbbreviation(this.ns.mDistanceIncrementMedium) + ' sq',6);
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

