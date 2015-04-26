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
        var b = 2;
        var c = 0;
        var d = 1;

	var ab = new Fraction(a,b,false);
	var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' &times ' + c + ' = ');
}

});
