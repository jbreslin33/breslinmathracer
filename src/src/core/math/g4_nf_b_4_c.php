
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_9',4.1809,'4.nf.b.4.c','fraction');
*/
var i_4_nf_b_4_c__9 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_9';
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

        this.setQuestion('' + this.ns.mNameOne + ' made strawberry jam and raspberry jam. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' made enough strawberry jam to fill ' + ab.getString() + ' of a jar. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' made ' + c + ' times as much raspberry jam as strawberry jam than how many jars will the raspberry jam fill?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_8',4.1808,'4.nf.b.4.c','fraction');
*/
var i_4_nf_b_4_c__8 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_8';
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

        this.setQuestion('' + this.ns.mNameOne + ' owns a doughnut shop. Yesterday ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sold ' + c + ' times as many chocolate doughnuts as cinnamon dougnuts. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sold ' + ab.getString() + ' of a tray of cinnamon doughnuts than how many trays of chocolate doughnuts did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell?');
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_7',4.1807,'4.nf.b.4.c','fraction');
*/
var i_4_nf_b_4_c__7 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_7';
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
        this.setQuestion('' + this.ns.mNameOne + ' had ' + c + ' pounds of ' + this.ns.mFruitOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' let ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend ' + this.ns.mNameTwo + ' eat ' + ab.getString() + ' of the ' + this.ns.mFruitOne + '. How many pounds of ' + this.ns.mFruitOne + ' did ' + this.ns.mNameTwo + ' eat?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.c_6',4.1806,'4.nf.b.4.c','mixed number');
*/

var i_4_nf_b_4_c__6 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.c_6';
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
        this.setQuestion('' + '' + this.ns.mNameOne + ' operates an orange juice stand. On Monday ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' used ' + c + ' oranges. On Tuesday ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' used ' + ab.getMixedNumber() + ' times as many oranges as on Monday. How many bags of oranges did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use on Tuesday?');
}
});

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
        this.setQuestion('' + '' + this.ns.mNameOne + ' owns ' + c + ' acres of farmland. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' grows '  + this.ns.mVegetableOne + ' on ' + ab.getString() + ' of the land. On how many acres of land does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' grow ' + this.ns.mVegetableOne + '?');
}
});
