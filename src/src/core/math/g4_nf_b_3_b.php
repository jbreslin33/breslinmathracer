/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.b_2',4.1502,'4.nf.b.3.b','find missing numerator');
*/

var i_4_nf_b_3_b__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{

        this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3_b_2';

        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var e = 0;

        a = Math.floor(Math.random()*4)+1;
        b = Math.floor(Math.random()*4)+1;
        c = Math.floor(Math.random()*4)+1;
        d = parseInt(a + b + c);
        e = Math.floor(Math.random()*10)+5;

        var fractionA = new Fraction(a,e,false);
        var fractionB = new Fraction(b,e,false);
        var fractionC = new Fraction(c,e);
        var fractionD = new Fraction(d,e,false);

        this.setQuestion('' + fractionA.getString() + ' + ' + fractionB.getString() + ' ? = ' + fractionD.getString());
        this.setAnswer('' + fractionC.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.b_1',4.1501,'4.nf.b.3.b','find missing numerator');
*/

var i_4_nf_b_3_b__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{

        this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.3_b_1';

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;

	a = Math.floor(Math.random()*4)+1;
	b = Math.floor(Math.random()*4)+1;
	c = parseInt(a + b);
	d = Math.floor(Math.random()*10)+5;

	var fractionA = new Fraction(a,d,false);
	var fractionB = new Fraction(b,d);
	var fractionC = new Fraction(c,d,false);

	this.setQuestion('' + fractionA.getString() + ' + ? = ' + fractionC.getString()); 
      	this.setAnswer('' + fractionB.getString(),0);
}
});
