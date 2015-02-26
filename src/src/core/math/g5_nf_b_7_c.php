
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_9',5.2309,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_9';
        this.ns = new NameSampler();

	var a = Math.floor(Math.random()*8+2);
        var fractionA = new Fraction(1,a,true);
        
	var b = Math.floor(Math.random()*8+2);
        var fractionB = new Fraction(1,b,true);
	
	var c = Math.floor(Math.random()*8+2);
        var fractionC = new Fraction(c,1,true);

        fractionD = fractionC.divide(fractionA);

        this.setQuestion('' + this.ns.mNameOne + ' uses ' + fractionA.getString() + ' of a pound of ' + this.ns.mFruitOne + ' and ' + fractionB.getString() + ' of a pound of ' + this.ns.mDrinkOne + ' to make one of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' smoothies. How many smoothies can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' make with ' + fractionC.getString() + ' pounds of ' + this.ns.mFruitOne + '?');   

        this.setAnswer('' + fractionD.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_8',5.2308,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_8';
        this.ns = new NameSampler();

	var a = Math.floor(Math.random()*8+2);
        var fractionA = new Fraction(1,a,true);
        
	var b = Math.floor(Math.random()*8+2);
        var fractionB = new Fraction(1,b,true);
	
	var c = Math.floor(Math.random()*8+2);
        var fractionC = new Fraction(c,1,true);

        fractionD = fractionC.divide(fractionA);

        this.setQuestion('' + this.ns.mNameOne + ' uses ' + fractionA.getString() + ' of a pound of ' + this.ns.mFruitOne + ' and ' + fractionB.getString() + ' of a pound of ' + this.ns.mDrinkOne + ' to make one of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' smoothies. How many smoothies can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' make with ' + fractionC.getString() + ' pounds of ' + this.ns.mFruitOne + '?');   

        this.setAnswer('' + fractionD.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_7',5.2307,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_7';
        this.ns = new NameSampler();

	var a = Math.floor(Math.random()*8+2);
        var fractionA = new Fraction(1,a,true);
        
	var x = Math.floor(Math.random()*8+2);
	var y = Math.floor(Math.random()*8+2);

	var b = Math.floor(Math.random()*8+2);
        var fractionB = new Fraction(b,1,true);

        fractionC = fractionB.divide(fractionA);

        this.setQuestion('' + this.ns.mNameOne + ' is making bottles for Angry Baby. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + fractionA.getString() + ' centiliters of formula for every bottle. Angry Baby screams at ' + this.ns.mNameOne + ' ' + x + ' times and punches ' + this.ns.mNameOne + ' ' +  y + ' times while ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes the bottles. If ' + this.ns.mNameOne + ' has ' + fractionB.getString() + ' centiliters of formula then how many bottles can ' + this.ns.mNameOne + ' make for Angry Baby?');   


        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_6',5.2306,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_6';
        this.ns = new NameSampler();

        var fractionA = new Fraction(1,2,true);
        
	var x = Math.floor(Math.random()*8+2);
        var fractionB = new Fraction(x,1,true);

        fractionC = fractionA.divide(fractionB);

        this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' build a house together in a video game. They decide that each of them  will get half the house. ' + this.ns.mNameOne + ' then splits ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' half into ' + fractionB.getString() + ' equal sections. One of the sections will be a sweet room for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' pet parakeet ' + this.ns.mNameThree + '. What fraction of the whole house is the section for ' + this.ns.mNameThree + '?');   

        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_5',5.2305,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_5';
        this.ns = new NameSampler();

	//fake info
        var x = Math.floor(Math.random()*8+2);
        var y = Math.floor(Math.random()*99+1);
        var z = Math.floor(Math.random()*9+1);
	
	var m = '' + x + '.' + y; 
	var money = new Decimal(m);

        var fractionA = new Fraction(1,1,true);
        fractionA.mNumerator = Math.floor(Math.random()*8+2);

        var fractionB = new Fraction(1,1,true);
        fractionB.mDenominator = Math.floor(Math.random()*8+2);

        fractionC = fractionB.divide(fractionA);

        this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' had a party for themselves and their ' + z + ' ' + this.ns.mPlayedActivityOne + ' teammates. They spent $' + money.getMoney() + ' on the party. At the end of the party they have  ' + fractionB.getString() + ' gallon of ' + this.ns.mDrinkOne + ' left. They want to pour an equal amount of it into ' + fractionA.getString() + ' glasses. What fraction of a gallon should they pour into each glass?');

        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_4',5.2304,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_4';
        this.ns = new NameSampler();

        var fractionA = new Fraction(1,1,true);
        fractionA.mNumerator = Math.floor(Math.random()*8+2);

        var fractionB = new Fraction(1,1,true);
        fractionB.mDenominator = Math.floor(Math.random()*8+2);

        fractionC = fractionB.divide(fractionA);

        this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' played ' + this.ns.mPlayedActivityOne + ' for ' + fractionB.getString() + ' hours. This is ' + fractionA.getString() + ' times as long as they played ' + this.ns.mPlayedActivityTwo + '. How many hours did they play ' + this.ns.mPlayedActivityTwo + '?');

        this.setAnswer('' + fractionC.getString(),0);
        this.setAnswer('' + fractionC.getString() + ' hours',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_3',5.2303,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_3';
        this.ns = new NameSampler();

        var fractionA = new Fraction(1,1,true);
        fractionA.mNumerator = Math.floor(Math.random()*8+2);

        var fractionB = new Fraction(1,1,true);
        fractionB.mDenominator = Math.floor(Math.random()*8+2);

        fractionC = fractionA.divide(fractionB);

        this.setQuestion('' + this.ns.mNameOne + ' completed ' + fractionA.getString() + ' levels of ' + this.ns.mVideoGameOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' completed ' + fractionB.getString() + ' as many levels as ' + this.ns.mNameTwo + '. How many levels did ' + this.ns.mNameTwo + ' complete?');

        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_2',5.2302,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

	this.mType = '5.nf.b.7.c_2';
	this.ns = new NameSampler();

        var fractionA = new Fraction(1,1,true);
        fractionA.mNumerator = Math.floor(Math.random()*8+2);
        
	var fractionA_bogus = new Fraction(1,1,true);
        fractionA_bogus.mNumerator = parseInt(fractionA.mNumerator - 1);
               
	var fractionB = new Fraction(1,1,true);
        fractionB.mDenominator = Math.floor(Math.random()*8+2);

	fractionC = fractionB.divide(fractionA_bogus);

        this.setQuestion('' + this.ns.mNameOne + ' is doing an art project. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants it to look boss so ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' plans to put ' + fractionA.getString() + ' equally spaced stripes on it. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants the first and last strip to be ' + fractionB.getString() + ' yards apart. How far apart in yards will each stripe be?');

        this.setAnswer('' + fractionC.getString(),0);
        this.setAnswer('' + fractionC.getString() + ' yards',1);
        this.setAnswer('' + fractionC.getString() + ' yds',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_1',5.2301,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
this.parent(sheet,575,50,320,75,100,50,670,100);

        this.mType = '5.nf.b.7.c_1';
        this.ns = new NameSampler();

        var fractionA = new Fraction(1,1,true);
        fractionA.mDenominator = Math.floor(Math.random()*8+2);

        var fractionB = new Fraction(1,1,true);
        fractionB.mNumerator= Math.floor(Math.random()*8+2);

        var r = Math.floor(Math.random()*900+100);
        var m = parseFloat(r / 100);
        var decimalPerBatch = new Decimal(m);

        fractionC = fractionB.divide(fractionA);

        var decimalBatches = new Decimal(fractionC.mNumerator);

        var answer = decimalBatches.multiply(decimalPerBatch);

        this.setQuestion('' + this.ns.mNameOne + ' is making smoothies for a fund raiser for ' + this.ns.mSchoolOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + fractionA.getString() + ' of a bag of ' + this.ns.mFruitOne + ' for each batch of smoothies. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' makes $' +  decimalPerBatch.getMoney() + ' for each batch of smoothies ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sells. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' used ' + fractionB.mNumerator + ' bags of ' + this.ns.mFruitOne + '. How much money did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' raise so far?');

        this.setAnswer('$' + answer.getMoney(),0);
        this.setAnswer('' + answer.getMoney(),1);
}
});


