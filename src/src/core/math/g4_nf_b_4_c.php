
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

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + ab.getMixedNumber() + ' &times ' + c + ' = ');
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
        this.setQuestion('' + '' + ab.getString() + ' &times ' + c + ' = ');
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
			if(rand == 0)
			{			
			}
			if(rand == 1)
			{			
			question = 'Jenny had ' + varC + ' pounds of strawberries. Jenny let her friend Doris eat ' + varA + '/' + varB + ' of the strawberries. How many pounds of strawberries did Doris eat?';
			}
			if(rand == 2)
			{			
			question = 'Kwan operates an orange juice stand. On Monday he used ' + varC + ' bags of oranges. On Tuesday he used ' + varA + '/' + varB + ' as many oranges as on Monday. How many bags of oranges did Kwan use on Tuesday?';
			}
			if(rand == 3)
			{			
			question = 'Pedro has a lemon cookie recipe that calls for ' + varA + '/' +  varB + ' of a cup of sugar. How much sugar would Pedro use to make ' + varC + ' batches of cookies?';
			}
			if(rand == 4)
			{			
			question = 'Tina is making calzones to sell at her restaurant. She starts with ' + varC + ' cans of tomato sauce and then uses ' + varA + '/' + varB + ' of the cans for the first batch of calzones. How many cans of tomato sauce does Tina use for the first batch of calzones?';
			}
			if(rand == 5)
			{			
			question = 'A factory makes sheets of metal that are ' + varA + '/' +  varB + ' of an inch thick. If a worker at the factory makes a stack of ' + varC + ' of the sheets, how many inches thick will the stack be?';
			}
			if(rand == 6)
			{			
			question = 'Yesterday, a doughnut shop sold ' + varC + ' times as many chocolate doughnuts as cinnamon doughnuts. If they sold ' + varA + '/' + varB + ' of a tray of cinnamon doughnuts, how many trays of chocolate doughnuts did they sell?';
			}
			if(rand == 7)
			{			
			question = 'Tracy made strawberry jam and raspberry jam. She made enough strawberry jam to fill ' + varA + '/' +  varB + ' of a jar. If she made ' + varC + ' times as much raspberry jam as strawberry jam, how many jars will the raspberry jam fill?';
			}
			if(rand == 8)
			{			
			question = 'Carey uses ' + varA + '/' +  varB + ' of a cup of vinegar in her salad dressing recipe. How many cups of vinegar would Carey use to make ' + varC + ' recipes?';
			}
*/
