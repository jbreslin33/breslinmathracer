/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_22',4.2522,'4.md.a.2','');
*/
var i_4_md_a_2__22 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
       		this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.md.a.2_22';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*30+30);

                var c = parseInt(a * b);
                var d = parseInt(c / 60); // low end hours 
                var e = parseInt(d + 1); // goal hours 
		var f = parseInt(e * 60);
		var g = parseInt(f - c);

                this.setQuestion('' + this.ns.mNameOne + ' is a youtuber. This week ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' made ' + a + ' videos so far each with a length of ' + b + ' minutes. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' goal each week is make ' + e + ' hours of videos then how many more minutes of video does need to make this week?');

                this.setAnswer('' + g,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_21',4.2521,'4.md.a.2','');
*/
var i_4_md_a_2__21 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_21';
                this.ns = new NameSampler();

                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var r = 1;
                while (r != 0)
                {
                        a = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);
			c = parseInt(b + 1); 
			d = parseInt(a * 1000); 
			e = parseInt(d / c);
			r = parseInt(d % c);
                }

                this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' kilograms of ' + this.ns.mFruitOne + ' and wants to share them equally with ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,2) + ' and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + b +  ' friends. How many grams will each share of ' + this.ns.mFruitOne + ' be?');
                this.setAnswer('' + e,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_20',4.2520,'4.md.a.2','');
*/
var i_4_md_a_2__20 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_20';
                this.ns = new NameSampler();

                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var d = 0;
                var r = 1;
                while (r != 0)
                {
                        a = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);
			c = parseInt(a * b); 
			d = parseInt(a + c); 
			e = parseInt(d / 3);
			r = parseInt(d % 3);
                }

                this.setQuestion('' + this.ns.mNameOne + ' is doing a project for ' + this.ns.mSubjectOne + ' class. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ' + ' is using ' + a + ' feet of ' + this.ns.mColorOne + ' ' + this.ns.mRopeOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' is using ' + b + ' times as much ' + this.ns.mColorTwo + ' ' + this.ns.mRopeOne + '. What is the total amount of yards of ' + this.ns.mRopeOne + ' ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' uses?');
                this.setAnswer('' + e,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_19',4.2519,'4.md.a.2','');
*/
var i_4_md_a_2__19 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.md.a.2_19';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*2+2);
        var b = Math.floor(Math.random()*2+2);
        var c = Math.floor(Math.random()*2+2);
	var n = 0;
	var d = 0;
	var answer        = new Fraction(1,3); 
	var fractionOne   = new Fraction(3,2);
	var fractionTwo   = new Fraction(3,2);
	var fractionThree = new Fraction(3,2);
	var fractionFour  = new Fraction(1000,1);

	while (n >= d || answer.mDenominator != 1 || fractionThree.mDenominator != 1)
	{
		//part of run
               	n = Math.floor(Math.random()*8+2);
               	d = Math.floor(Math.random()*8+2);

		nRun = parseInt(d - n);	
	
		fractionOne = new Fraction(n,d); 
		fractionRun = new Fraction(nRun,d); 

		//kilometers
		var k = parseInt(a + b + c);
		fractionTwo = new Fraction(k,1);		

		//run x kilometers
		fractionThree = fractionRun.multiply(fractionTwo);
        	
		answer = fractionThree.multiply(fractionFour);

        	this.setQuestion('' + this.ns.mNameOne + ' traveled ' + a + ' kilometers ' + ' to see ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend ' + this.ns.mNameTwo + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' then traveled ' + b + ' kilometers to ' + this.ns.mPlayedActivityOne + ' practice. After practice ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' traveled ' + c + ' kilometers to get back home. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' walked ' + ' ' + fractionOne.getString() + ' of the total distance and ran the rest. How many meters did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' run?');
                this.setAnswer('' + answer.getString(),0);
	}
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_18',4.2518,'4.md.a.2','');
*/
var i_4_md_a_2__18 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
       		this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.md.a.2_18';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = Math.floor(Math.random()*3+2);
                var b = Math.floor(Math.random()*30+30);
                var c = Math.floor(Math.random()*3+2);

                var a_hour = Math.floor(Math.random()*2+13);
                var a_minute = Math.floor(Math.random()*60);

                var till = new Time(a_hour,a_minute);

		//during
		var one = parseInt(b + c);
		var two = parseInt(a - 1);
		var three = parseInt(one * two); 
		var h = parseInt(three / 60);
		var m = parseInt(three % 60);  	
                var during = new Time(h,m);

                var from = till.subtract(during);

                this.setQuestion('' + this.ns.mNameOne + ' plays in a ' + this.ns.mPlayedActivityOne + ' league. On ' + this.ns.mDayOfWeekOne + ' the league plays ' + a + ' matches. They play the matches one at a time. The ' + this.ns.mNameMachine.getPlace(a) + ' match starts at ' + till.getString() + ' Each match lasts ' + b + ' minutes and there is a ' + c + ' minute ' + ' break in between each match. What time did the first match start?');

                this.setAnswer('' + from.getString(),0);
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_17',4.2517,'4.md.a.2','');
*/
var i_4_md_a_2__17 = new Class(
{
Extends: TextItemMixedNumber,
        initialize: function(sheet)
        {
                this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

                this.mType = '4.md.a.2_17';
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

                this.setQuestion('' + this.ns.mNameOne + ' is making ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' world famous fruit dessert. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + fractionA.getMixedNumber() + ' cups of ' + this.ns.mFruitOne + ' for every gallon of ' + this.ns.mDrinkOne + '. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' plans to use ' + fractionB.mNumerator + ' gallons of ' + this.ns.mDrinkOne + ' then how many cups of ' + this.ns.mFruitOne + ' does ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need?');
                this.setAnswer('' + answer.getMixedNumber(),0);
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_16',4.2516,'4.md.a.2','');
*/
var i_4_md_a_2__16 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,65,100,50,425,100);

        this.mType = '4.md.a.2_16';
        this.ns = new NameSampler();

      	var k = Math.floor(Math.random()*8+2);

        var g = parseInt(k * 1000);
	var c = parseInt(g * 7); 

     	this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' family eat ' + k + ' kilograms of ' + this.ns.mFruitOne + ' a day. How many grams of ' + this.ns.mFruitOne + ' do they eat in a week?');
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_15',4.2515,'4.md.a.2','');
*/
var i_4_md_a_2__15 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_15';
                this.ns = new NameSampler();

		var a = 0;
                var b = 0;
                var r = 1;
                while (r != 0)
                {
                        a = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);
			
			var f = parseInt(a * 3);	
                        r = parseInt(f % b);
                	answer = parseInt(f / b);
                }

                this.setQuestion('' + this.ns.mNameOne + ' built a ' + a + ' yards long garden in a video game. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' split it into ' + b + ' sections to plant different vegetables. One of the sections will be for ' + this.ns.mVegetableOne + '. How many feet long is the section for ' + this.ns.mVegetableOne + '?');
                this.setAnswer('' + answer,0);
                this.setAnswer('' + answer + ' ft',1);
                this.setAnswer('' + answer + ' feet',2);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_14',4.2514,'4.md.a.2','');
*/
var i_4_md_a_2__14 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_14';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a_hour = Math.floor(Math.random()*12+1);
                var a_minute = Math.floor(Math.random()*60);

                var b_hour = 0;
                var b_minute = 45;

                var till = new Time(a_hour,a_minute);
                var during = new Time(b_hour,b_minute);

                var from = till.subtract(during);

                this.setQuestion('' + this.ns.mNameOne + ' stopped playing ' + this.ns.mPlayedActivityOne + ' with ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend at ' + till.getString() + '  They played for three quarters of an hour. What time did they start playing?');

                this.setAnswer('' + from.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_13',4.2513,'4.md.a.2','');
*/
var i_4_md_a_2__13 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_13';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a_hour = Math.floor(Math.random()*12+1);
                var a_minute = Math.floor(Math.random()*60);

                var b_hour = 0;
                var b_minute = 15;

                var till = new Time(a_hour,a_minute);
                var during = new Time(b_hour,b_minute);

                var from = till.subtract(during);

                this.setQuestion('' + this.ns.mNameOne + ' stopped playing ' + this.ns.mPlayedActivityOne + ' with ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend at ' + till.getString() + '  They played for one quarter of an hour. What time did they start playing?');

                this.setAnswer('' + from.getString(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_12',4.2512,'4.md.a.2','');
*/
var i_4_md_a_2__12 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_12';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a_hour = Math.floor(Math.random()*12+1);
                var a_minute = Math.floor(Math.random()*60);

                var b_hour = 0;
                var b_minute = 30;

                var from = new Time(a_hour,a_minute);
                var during = new Time(b_hour,b_minute);

                var till = from.add(during);

                this.setQuestion('' + this.ns.mNameOne + ' started playing ' + this.ns.mPlayedActivityOne + ' with ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend at ' + from.getString() + '  They stopped playing a half hour later. What time did they stop?');

                this.setAnswer('' + till.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_11',4.2511,'4.md.a.2','');
*/
var i_4_md_a_2__11 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_11';
                this.ns = new NameSampler();
		this.mChopWhiteSpace = false;

                var a_hour = Math.floor(Math.random()*12+1);
                var a_minute = Math.floor(Math.random()*60);

                var b_hour = Math.floor(Math.random()*3+2);
                var b_minute = Math.floor(Math.random()*60);

		var from = new Time(a_hour,a_minute);
		var during = new Time(b_hour,b_minute);

		var till = from.add(during);

                this.setQuestion('' + this.ns.mNameOne + ' went to ' + this.ns.mPlayedActivityOne + ' practice at ' + from.getString() + ' ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' practice lasts for ' + during.mHour + ' hours and ' + parseInt(during.mMinute) + ' minutes. What time does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' practice end?');

                this.setAnswer('' + till.getString(),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_10',4.2510,'4.md.a.2','');
*/
var i_4_md_a_2__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_10';
                this.ns = new NameSampler();

                var a = 0;
                var b = 0;
                var r = 1;
                while (r != 0)
                {
                        a = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);

                        var grams = parseInt(a * 1000);
                        answer = parseInt(grams / b);
                        r = parseInt(grams % b);
                }
                this.setQuestion('' + this.ns.mNameOne + ' has some ' + this.ns.mFruitOne + ' that have a total mass of ' + a + ' kilograms. Each of the individual ' + this.ns.mFruitOne + ' has the same mass. There are ' + b + ' individual ' + ' ' + this.ns.mFruitOne + '. What is the mass of one of the ' + this.ns.mFruitOne + ' in grams?');

                this.setAnswer('' + answer,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_9',4.2509,'4.md.a.2','');
*/
var i_4_md_a_2__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_9';
                this.ns = new NameSampler();

                var a = 0;
                var b = 0;
                var r = 1;
                while (r != 0)
                {
                        a = Math.floor(Math.random()*8+2);
                        b = Math.floor(Math.random()*8+2);

                        var grams = parseInt(a * 1000);
                        answer = parseInt(grams / b);
                        r = parseInt(grams % b);
                }
                this.setQuestion('' + this.ns.mNameOne + ' buys some ' + this.ns.mFruitOne + ' that have a total mass of ' + a + ' kilograms. Each of the individual ' + this.ns.mFruitOne + ' has the same mass. There are ' + b + ' individual ' + ' ' + this.ns.mFruitOne + '. What is the mass of one of the ' + this.ns.mFruitOne + ' in grams?');

                this.setAnswer('' + answer,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_8',4.2508,'4.md.a.2','');
*/
var i_4_md_a_2__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_8';
                this.ns = new NameSampler();

		this.mChopWhiteSpace = false;
		var a = 0;
		var b = 0;
		var c = 0;

		while (c == b) 
		{ 
                	a = Math.floor(Math.random()*8+2);
			c = parseInt(a*1000); 
			var mod = parseInt(c - 1000);
                	b = Math.floor(Math.random()*2000+mod);
                	
			answer = parseInt(b);

                	this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' liters of ' + this.ns.mDrinkOne + '. ' + this.ns.mNameTwo + ' has ' + b + ' milliliters of ' + this.ns.mDrinkTwo + '. Who has the largest volume of liquid?');
	
			if (c > b)
			{
                		this.setAnswer('' + this.ns.mNameOne,0);
			}
			if (b > c)
			{
                		this.setAnswer('' + this.ns.mNameTwo,0);
			}
		}
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_7',4.2507,'4.md.a.2','');
*/
var i_4_md_a_2__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_7';
                this.ns = new NameSampler();

                var a = 1;
                var b = Math.floor(Math.random()*8+2);

                answer = parseInt(b);
                
		this.setQuestion('A mililiter of ' + this.ns.mDrinkOne + ' has a mass of ' + a + ' gram. ' + this.ns.mNameOne + ' goes to the store for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1)  + ' ' + this.ns.mFamilyOne + ' to purchase ' + b + ' liters of ' + this.ns.mDrinkOne + '. What is the mass in kilograms of the ' + this.ns.mDrinkOne + ' ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will carry back to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + '.');
                this.setAnswer('' + answer,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_6',4.2506,'4.md.a.2','');
*/
var i_4_md_a_2__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,65,100,50,425,100);

                this.mType = '4.md.a.2_6';
                this.ns = new NameSampler();
	
		var a = 0;
		var b = 0;
		var r = 1;
		while (r != 0)	
		{
                	a = Math.floor(Math.random()*8+2);
			a = 1; 	
                	b = Math.floor(Math.random()*8+2);

                	var grams = parseInt(a * 1000);
			var tb = parseInt(b + 1); 	
                	answer = parseInt(grams * tb);
			r = parseInt(grams % a);
		}
                this.setQuestion('' + this.ns.mNameOne + ' has a textbook for ' + this.ns.mSubjectOne + ' that has a mass of ' + a + ' kilogram. All of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1)  + ' other ' + b + ' textbooks have the same mass. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' takes home all ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' textbooks what will be the total mass of them all in grams?');

                this.setAnswer('' + answer,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_5',4.2505,'4.md.a.2','');
*/
var i_4_md_a_2__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '4.md.a.2_5';
                this.ns = new NameSampler();
	
		var a = 0;
		var b = 0;
		var r = 1;
		while (r != 0)	
		{
                	a = Math.floor(Math.random()*8+2);
                	b = Math.floor(Math.random()*8+2);

                	var grams = parseInt(b * 1000);
                	answer = parseInt(grams / a);
			r = parseInt(grams % a);
		}
                this.setQuestion('' + this.ns.mNameOne + ' has some ' + this.ns.mThingOne + ' that each have a mass of ' + a + ' grams. If all the ' + this.ns.mThingOne + ' together have a total mass of ' + b + ' kilograms then how many ' + this.ns.mThingOne + ' does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have?');

                this.setAnswer('' + answer,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_4',4.2504,'4.md.a.2','');
*/
var i_4_md_a_2__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '4.md.a.2_4';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);
                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);

                var meters = parseInt(fractionA.mNumerator * 1000);

                answer = parseInt(meters / 2);

                this.setQuestion('' + this.ns.mNameOne + ' is half way done running in a ' + fractionA.mNumerator + ' kilometer race. How many meters does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have to go to get to the finish line?');

                this.setAnswer('' + answer,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_3',4.2503,'4.md.a.2','');
*/
var i_4_md_a_2__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.2_3';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                var fractionB = new Fraction(1,1,false);
                var r = 1;
                while (r != 0)
                {
                        fractionA.mNumerator = Math.floor(Math.random()*8+2);

                        fractionB.mNumerator = Math.floor(Math.random()*8+2);

                        var seconds = parseInt(fractionB.mNumerator * 60);
                        r = parseInt(seconds % fractionA.mNumerator);
                }

                answer = parseInt(seconds / fractionA.mNumerator);

                this.setQuestion('In a video game ' + this.ns.mNameOne + ' can stack one block every ' + fractionA.mNumerator + ' seconds. How many blocks can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' stack in ' + fractionB.mNumerator + ' minutes?');
                this.setAnswer('' + answer,0);
                this.setAnswer('' + answer + ' blocks',1);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_2',4.2502,'4.md.a.2','');
*/
var i_4_md_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.2_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(16,1,false);

                answer = fractionA.multiply(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.mNumerator + ' gallons of ' + this.ns.mDrinkOne + '. How many cups of ' + this.ns.mDrinkOne + ' can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' pour for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1)  + ' friends?');
                this.setAnswer('' + answer.getString(),0);
                this.setAnswer('' + answer.getString() + ' cups',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.2_1',4.2501,'4.md.a.2','');
*/
var i_4_md_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.2_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(4,1,false);

                answer = fractionA.multiply(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' goes to the store for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + ' to buy ' + fractionA.mNumerator + ' gallons of ' + this.ns.mDrinkOne + '. While there, ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' notices they only sell ' + this.ns.mDrinkOne + ' by the quart. How many quarts should ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' buy?');
                this.setAnswer('' + answer.getString(),0);
                this.setAnswer('' + answer.getString() + ' quarts',1);
        }
});


