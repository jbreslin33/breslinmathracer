
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_5',4.1805,'4.nf.b.4.c','improper fraction');
*/

var i_4_nf_b_4_c__5 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_5';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a <= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);
	//		question = 'Pedro has a lemon cookie recipe that calls for ' + varA + '/' +  varB + ' of a cup of sugar. How much sugar would Pedro use to make ' + varC + ' batches of cookies?';

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' has a lemon cookie recipe that calls for ' + ab.getString() + ' of a cup of sugar. How many cups of sugar would ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use to make ' + c + ' batches of cookies?');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_4',4.1804,'4.nf.b.4.c','fraction');
*/

var i_4_nf_b_4_c__4 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_4';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a >= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
//	question = 'Tina is making calzones to sell at her restaurant. She starts with ' + varC + ' cans of tomato sauce and then uses ' + varA + '/' + varB + ' of the cans for the first batch of calzones. How many cans of tomato sauce does Tina use for the first batch of calzones?';

        this.setQuestion('' + '' + this.ns.mNameOne + ' is making calzones to sell at ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' restaurant. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' starts with ' + c + ' cans of tomato sauce and then uses ' + ab.getString() + ' of the cans for the first batch of calzones. How many cans of tomato sauce does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use for the first batch of calzones?');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_3',4.1803,'4.nf.b.4.c','mixed number');
*/

var i_4_nf_b_4_c__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_3';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a <= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);
			//question = 'A factory makes sheets of metal that are ' + varA + '/' +  varB + ' of an inch thick. If a worker at the factory makes a stack of ' + varC + ' of the sheets, how many inches thick will the stack be?';

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + this.ns.mNameOne + ' works in a factory where ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes sheets of metal that are ' + ab.getMixedNumber() + ' of an inch thick. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes ' + c + ' sheets than how many inches thick will the stack be?');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_2',4.1802,'4.nf.b.4.c','improper fraction');
*/

var i_4_nf_b_4_c__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_2';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a <= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' uses ' + ab.getString() + ' of a cup of vinegar in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' salad dressing recipe. How many cups of vinegar would ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use to make ' + c + ' cups?');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_1',4.1801,'4.nf.b.4.c','fraction');
*/

var i_4_nf_b_4_c__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_1';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a >= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
			//question = 'Peter owns ' + varC + ' acres of farmland. He grows corn on ' + varA + '/' + varB + ' of the land. On how many acres of land does Peter grow corn?';
        this.setQuestion('' + '' + this.ns.mNameOne + ' owns ' + c + ' acres of farmland. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' grows '  + this.ns.mVegetableOne + ' on ' + ab.getString() + ' of the land. On how many acres of land does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' grow ' + this.ns.mVegetableOne + '?');
}

});
/*
			question = 'Jenny had ' + varC + ' pounds of strawberries. Jenny let her friend Doris eat ' + varA + '/' + varB + ' of the strawberries. How many pounds of strawberries did Doris eat?';
	
	6		question = 'Kwan operates an orange juice stand. On Monday he used ' + varC + ' bags of oranges. On Tuesday he used ' + varA + '/' + varB + ' as many oranges as on Monday. How many bags of oranges did Kwan use on Tuesday?';
			
			question = 'Yesterday, a doughnut shop sold ' + varC + ' times as many chocolate doughnuts as cinnamon doughnuts. If they sold ' + varA + '/' + varB + ' of a tray of cinnamon doughnuts, how many trays of chocolate doughnuts did they sell?';
			
			question = 'Tracy made strawberry jam and raspberry jam. She made enough strawberry jam to fill ' + varA + '/' +  varB + ' of a jar. If she made ' + varC + ' times as much raspberry jam as strawberry jam, how many jars will the raspberry jam fill?';
*/
