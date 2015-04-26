
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_4',4.1604,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '4.nf.b.4.a_4';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;

        while(a >= b)
        {
                a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
        }

        var c = a;
        var d = 1;

        var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + c,0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + ef.getString() + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_3',4.1603,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_3';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;

        while(a >= b)
        {
                a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
        }

        var c = a;
        var d = 1;

        var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + ef.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + c + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_3',4.1603,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_3';
        this.ns = new NameSampler();

	var a = 1;
	var b = 0;

	while(a >= b)
	{
		a = Math.floor((Math.random()*8)+2);
		b = Math.floor((Math.random()*8)+2);
	}
	
	var c = a;
        var d = 1;
	
	var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + ef.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + c + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_2',4.1602,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_2';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c)
        {
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + c + ' &times ' + ab.getString() + ' = ');
}

});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_1',4.1601,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.4.a_1';
        this.ns = new NameSampler();

	var a = 1;
	var b = 0;
	var c = 0;
	var d = 1;
	
	while (b == c)
	{
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
