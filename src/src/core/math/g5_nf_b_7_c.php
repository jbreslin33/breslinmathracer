
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

	var r = Math.floor(Math.random()*900+100);
	var m = parseFloat(r / 100); 
	var decimalPerBatch = new Decimal(m);  

	fractionC = fractionB.divide(fractionA_bogus);

        this.setQuestion('' + this.ns.mNameOne + ' is putting down stripes on an art project. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to draw ' + fractionA.getString() + ' equally spaced stripes. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants the first and last strip to be ' + fractionB.getString() + ' yards apart. How far apart will each stripe be?');

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


