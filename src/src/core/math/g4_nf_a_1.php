
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_5',4.1205,'4.nf.a.1','1h');
*/

var i_4_nf_a_1__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_5';
        this.mChopWhiteSpace = false;

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 3);
        var d = parseInt(b * 3);

        fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('equal',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_4',4.1204,'4.nf.a.1','1h');
*/

var i_4_nf_a_1__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_4';
        this.mChopWhiteSpace = false;

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 3);
        var d = parseInt(b * 2);

        fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionB.getString() + ' and ' + fractionA.getString() + '. Write equal or not equal.');
        this.setAnswer('not equal',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_3',4.1203,'4.nf.a.1','1h');
*/

var i_4_nf_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_3';
        this.mChopWhiteSpace = false;

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 2);
        var d = parseInt(b * 2);

        fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionB.getString() + ' and ' + fractionA.getString() + '. Write equal or not equal.');
        this.setAnswer('equal',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_2',4.1202,'4.nf.a.1','2x numerator 1x denominator');
*/

var i_4_nf_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

      	this.mType = '4.nf.a.1_2';
	this.mChopWhiteSpace = false;

	var a = 0;
	var b = 0;

	while (a == b)
	{
		a = Math.floor(Math.random()*9)+1;
		b = Math.floor(Math.random()*9)+1;
	}

	fractionA = new Fraction(a,b,false);

	var c = parseInt(a * 2);
	var d = parseInt(b * 3);
	
	fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('not equal',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_1',4.1201,'4.nf.a.1','2x');
*/

var i_4_nf_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

      	this.mType = '4.nf.a.1_1';
	this.mChopWhiteSpace = false;

	var a = 0;
	var b = 0;

	while (a == b)
	{
		a = Math.floor(Math.random()*9)+1;
		b = Math.floor(Math.random()*9)+1;
	}

	fractionA = new Fraction(a,b,false);

	var c = parseInt(a * 2);
	var d = parseInt(b * 2);
	
	fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('equal',0);
}
});

