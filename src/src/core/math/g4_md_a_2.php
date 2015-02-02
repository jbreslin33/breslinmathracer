
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
		this.ac = new AnalogClock(10,13,27);

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
                this.setQuestion('' + this.ns.mNameOne + ' is ' + this.ns.mFruitOne + ' that have a total mass of ' + a + ' kilograms. Each of the individual ' + this.ns.mFruitOne + ' has the same mass. There are ' + b + ' individual ' + ' ' + this.ns.mFruitOne + '. What is the mass of one of the ' + this.ns.mFruitOne + ' in grams?');

                this.setAnswer('' + answer,0);
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
                this.setQuestion('' + this.ns.mNameOne + ' is ' + this.ns.mFruitOne + ' that have a total mass of ' + a + ' kilograms. Each of the individual ' + this.ns.mFruitOne + ' has the same mass. There are ' + b + ' individual ' + ' ' + this.ns.mFruitOne + '. What is the mass of one of the ' + this.ns.mFruitOne + ' in grams?');

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


