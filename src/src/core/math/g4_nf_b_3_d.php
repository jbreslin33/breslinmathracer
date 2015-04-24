
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_5',4.1705,'4.nf.b.3.d','');
*/

var i_4_nf_b_3_d__5 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.d_5';
        this.ns = new NameSampler();

	var a = 0;
	var b = 1;
 	var c = Math.floor((Math.random()*10)+10);

	while (a <= b)
	{	
        	a = Math.floor((Math.random()*5)+1);
        	b = Math.floor((Math.random()*5)+1);
	}

        var n = parseInt(a - b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);
			//question = 'At the market, Vicky bought ' + varA + '/' +  varB + ' of a pound of red apples and ' + varC + '/' +  varD + ' of a pound of green apples. How many more pounds of red apples did Vicky purchase?';

	this.setQuestion('' + 'At the market ' this.ns.mNameOne + ' bought ' + ac.getString() + ' pounds ' + ' of ' + this.ns.mFruitOne + ' and ' + bc.getString() + ' pounds of ' + this.ns.mFruitTwo + '. How many more pounds of ' + this.ns.mFruitOne + ' than ' + this.ns.mFruitTwo + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) ' purchase?');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_4',4.1704,'4.nf.b.3.d','');
*/

var i_4_nf_b_3_d__4 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.d_4';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*10)+10);

        var n = parseInt(a + b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

			//'Katie went to the salon and had ' + varA + '/' +  varB + ' of an inch of hair cut off. The next day she went back and asked for another ' + varC + '/' +  varD + ' of an inch to be cut off. How many inches of hair did she have cut off in all?';

        this.setQuestion('' + this.ns.mNameOne + ' went to the salon and had ' + ac.getString() + ' ' + this.ns.mDistanceIncrementSmall + ' of hair cut off. The next day ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' went back and asked for another ' + bc.getString() + ' ' + this.ns.mDistanceIncrementSmall + ' of hair to be cut off. How many ' + this.ns.mDistanceIncrementSmall + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have cut off ' + this.ns.mSum + '?');
        this.setAnswer('' + answer.getString(),0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_3',4.1703,'4.nf.b.3.d','word problems - subtract 2 fractions with like denominators');
*/

var i_4_nf_b_3_d__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.d_3';
        this.ns = new NameSampler();

	var a = 0;
	var b = 1;
 	var c = Math.floor((Math.random()*10)+10);

	while (a <= b)
	{	
        	a = Math.floor((Math.random()*5)+1);
        	b = Math.floor((Math.random()*5)+1);
	}

        var n = parseInt(a - b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

	this.setQuestion('' + this.ns.mNameOne + ' filled a bucket with ' + ac.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. Later ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' poured out ' + bc.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. How many ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + ' are in the bucket now?');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_1',4.1701,'4.nf.b.3.d','word problems - add 2 fractions with like denominators');
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_2',4.1702,'4.nf.b.3.d','word problems - subtract 2 fractions with like denominators');
*/

var i_4_nf_b_3_d__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3.d_2';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*10)+10);

        var n = parseInt(a + b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

	this.setQuestion('' + this.ns.mNameOne + ' drove ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' car ' + ac.getString() + ' of a ' + this.ns.mDistanceIncrementLarge + ' and stopped at a gas station. Then ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' drove ' + bc.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' house. How many miles did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' drive ' + this.ns.mSum + '?');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.d_1',4.1701,'4.nf.b.3.d','word problems - add 2 fractions with like denominators');
*/

var i_4_nf_b_3_d__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
      	this.mType = '4.nf.b.3.d_1';
        this.ns = new NameSampler();

 	var a = Math.floor((Math.random()*5)+1);
        var b = Math.floor((Math.random()*5)+1);
        var c = Math.floor((Math.random()*10)+10);

        var n = parseInt(a + b);

        var ac = new Fraction(a,c,false);
        var bc = new Fraction(b,c,false);
        var answer = new Fraction(n,c);

	this.setQuestion('' + this.ns.mNameOne + ' filled a bucket with ' + ac.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkOne + '. Later ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' poured ' + bc.getString() + ' ' + this.ns.mLiquidVolumeOne + ' of ' + this.ns.mDrinkTwo + ' into the bucket. How many ' + this.ns.mLiquidVolumeOne + ' of liquid are in the bucket now?');
	this.setAnswer('' + answer.getString(),0);
}
});

//addition
/*
			}
			if(rand == 3)
			{			
			question = 'Of the pies that Mom and Pops Pie Shop sold last month, ' + varA + '/' +  varB + ' were blueberry pies and ' + varC + '/' +  varD + ' were blackberry pies. What fraction of the pies sold were either blueberry or blackberry?';
			}
*/

//subtraction
/*
			if(rand == 0)
			{			

			}
			if(rand == 1)
			{			
			}
			if(rand == 2)
			{			
			question = 'Planet X is ' + varA + '/' +  varB + ' of a light-year away from Earth. Planet Y is ' + varC + '/' +  varD + ' of a light-year away from Earth. How many light years farther away from earth is Planet X than Planet Y?';
			}
			if(rand == 3)
			{			
			question = 'Judy bought ' + varA + '/' +  varB + ' pounds of grapes. She gave ' + varC + '/' +  varD + ' of a pound to her sister. How many pounds of grapes did she have left?';
			}
*/

		
		
