
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_9',5.1309,'5.nf.a.2','Terra Nova 39');
*/
var i_5_nf_a_2__9 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
 	this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);
        this.mType = '5.nf.a.2_9';
        this.mChopWhiteSpace = false;
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mQuestionLabel.setSize(200,200);
        this.mQuestionLabel.setPosition(650,150);

        this.mUserAnswerLabel.setPosition(150,300);

     	var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;
        while (ad == bd)
        {
                an = Math.floor((Math.random()*9)+1);
                ad = Math.floor((Math.random()*8)+2);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*8)+2);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.add(fractionB);
        answer.reduce();

        //this.setQuestion('' + fractionA.getString() + ' + ' + fractionB.getString() );
        this.setQuestion('' + 'What is the weight in pounds of the 2 fruit items?');
        this.setAnswer('' + answer.getString(),0);

        this.mHeading = new Shape(200,50,30,50,this,"","","");
        this.mShapeArray.push(this.mHeading);
        this.mHeading.setText('Shopping List');

        this.mTable = new Shape(200,50,30,100,this,"TABLE","","");
        this.mShapeArray.push(this.mTable);

        //row 0
        var r0 = this.mTable.mMesh.insertRow(0);

        var c0a = r0.insertCell(0);
        var c0b = r0.insertCell(1);

        c0a.innerHTML = parseInt(Math.floor(Math.random()*10)+1) + ' pounds';
        c0b.innerHTML = '' + this.ns.mVegetableOne;

        //row1
        var r1 = this.mTable.mMesh.insertRow(1);

        var c1a = r1.insertCell(0);
        var c1b = r1.insertCell(1);

        c1a.innerHTML = parseInt(Math.floor(Math.random()*10)+1) + ' pounds';
        c1b.innerHTML = '' + this.ns.mVegetableTwo;

        //row2
        var r2 = this.mTable.mMesh.insertRow(2);

        var c2a = r2.insertCell(0);
        var c2b = r2.insertCell(1);

        c2a.innerHTML = parseInt(Math.floor(Math.random()*10)+1) + ' pounds';
        c2b.innerHTML = '' + this.ns.mVegetableThree;

        //row3
        var r3 = this.mTable.mMesh.insertRow(3);

        var c3a = r3.insertCell(0);
        var c3b = r3.insertCell(1);

        //c3a.innerHTML = parseInt(Math.floor(Math.random()*10)+1) + ' pounds';
        c3a.innerHTML = fractionA.getString() + ' pounds';
        c3b.innerHTML = '' + this.ns.mFruitOne;

        //row4
        var r4 = this.mTable.mMesh.insertRow(4);

        var c4a = r4.insertCell(0);
        var c4b = r4.insertCell(1);

        c4a.innerHTML = fractionB.getString() + ' pounds';
        c4b.innerHTML = '' + this.ns.mFruitTwo;

        //row5
        var r5 = this.mTable.mMesh.insertRow(5);

        var c5a = r5.insertCell(0);
        var c5b = r5.insertCell(1);

        c5a.innerHTML = parseInt(Math.floor(Math.random()*10)+1) + ' pounds';
        c5b.innerHTML = '' + this.ns.mPurchaseOne;

        //table specs
        this.mTable.mMesh.style.width = '100%';
        this.mTable.mMesh.setAttribute('border', '1');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_8',5.1308,'5.nf.a.2','subtract mixed number and mixed number');
*/
var i_5_nf_a_2__8 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_8';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;
        while (an < ad || an % ad == 0 || bn < bd || bn % bd == 0 || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+10);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('In a race ' + this.ns.mNameOne + ' has run ' + fractionA.getMixedNumber() + ' laps. ' + this.ns.mNameTwo + ' has run ' + fractionB.getMixedNumber() + ' laps. How much further ahead is ' + this.ns.mNameOne + '?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_7',5.1307,'5.nf.a.2','subtract mixed number and fraction');
*/
var i_5_nf_a_2__7 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_7';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 0;
        var bd = 0;
        while (an < ad || an % ad == 0 || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractionA.getMixedNumber() + ' pounds of ' + this.ns.mVegetableOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ate ' + fractionB.getString() + ' pounds of ' + this.ns.mVegetableOne + '. How many pounds does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have left?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_6',5.1306,'5.nf.a.2','');
*/
var i_5_nf_a_2__6 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_6';
	this.ns = new NameSampler();

        var an = 0;
        var ad = 0;
        var bn = 0;
        var bd = 0;
        while (bn == bd || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd )
        {
                an = Math.floor((Math.random()*8)+2);
                ad = 1;
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.subtract(fractionB);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' bought ' + fractionA.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + ' for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' party. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' guests drank ' + fractionB.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. How many ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + ' does ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have left over?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_5',5.1305,'5.nf.a.2','subtract no whole numbers');
*/
var i_5_nf_a_2__5 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_5';
	this.ns = new NameSampler();

        var an = 0;
        var ad = 0;
        var bn = 0;
        var bd = 0;
        while (an == ad || bn == bd || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+1);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);

        var answer = fractionA.subtract(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' was carrying ' + fractionA.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of water back from a well to ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' house. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' spilled ' + fractionB.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of the water while carrying it. How many ' + this.ns.mLiquidVolumeOne + ' were left after the spilling?'    );
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_4',5.1304,'5.nf.a.2','add mixed number and mixed number');
*/
var i_5_nf_a_2__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_4';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;
        while (an < ad || an % ad == 0 || bn < bd || bn % bd == 0 || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+10);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('Yesterday the ' + this.ns.mAnimalOne + ' in the Zoo drank ' + fractionA.getMixedNumber() + ' liters of water in the morning. Then they drank ' + fractionB.getMixedNumber() + ' liters more liters the rest of the day. How many liters of water did the ' + this.ns.mAnimalOne + ' drink yesterday?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_3',5.1303,'5.nf.a.2','add mixed number and fraction');
*/
var i_5_nf_a_2__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_3';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 0;
        var bd = 0;
        while (an < ad || an % ad == 0 || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractionA.getMixedNumber() + ' gallons of gas in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' car. ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' bought ' + fractionB.getString() + ' more gallons at the gas station. How many gallons of gas are in the car now?');
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_2',5.1302,'5.nf.a.2','');
*/
var i_5_nf_a_2__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_2';
	this.ns = new NameSampler();

	var an = 0;
	var ad = 0;
	var bn = 0;
	var bd = 0;
	while (bn == bd || ad == bd)
	{
        	an = Math.floor((Math.random()*8)+2);
        	ad = 1;
        	bn = Math.floor((Math.random()*9)+1);
        	bd = Math.floor((Math.random()*9)+1);
	}

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd,false);

        //fraction class will simplyfy
        var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' prepared ' + fractionA.getString() + ' servings of ' + this.ns.mFruitOne + ' and ' + fractionB.getString() + ' servings of ' + this.ns.mVegetableOne + '. What is the sum total of servings ' + this.ns.mNameOne + ' prepared?'  );
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.2_1',5.1301,'5.nf.a.2','no whole numbers');
*/
var i_5_nf_a_2__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.a.2_1';

	this.ns = new NameSampler();

	var an = 0;
	var ad = 0;
	var bn = 0;
	var bd = 0;
	while (an == ad || bn == bd || ad == bd)
	{
        	an = Math.floor((Math.random()*9)+1);
        	ad = Math.floor((Math.random()*9)+1);
        	bn = Math.floor((Math.random()*9)+1);
        	bd = Math.floor((Math.random()*9)+1);
	}

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);

	var answer = fractionA.add(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had ' + fractionA.getString() + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameTwo + ' had ' + fractionB.getString() + ' ' + this.ns.mThingOne + '. How many ' + this.ns.mThingOne + ' did they have altogether?');
}
});

