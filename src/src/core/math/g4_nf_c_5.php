
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.5_2',4.1902,'4.nf.c.5','fraction');
*/
var i_4_nf_c_5__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.c.5_2';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*8)+2);
        var b = 10;
        var c = Math.floor((Math.random()*8)+2);
	c = parseInt(c * 10);
        var d = 100;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

	var answer = ab.add(cd); 

        this.setAnswer('' + answer.getString(),0);

        this.setQuestion('' + ab.getString() + ' + ' + cd.getString());
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.5_1',4.1901,'4.nf.c.5','fraction');
*/
var i_4_nf_c_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mType = '4.nf.c.5_1';
        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*8)+2);
	var b = 10;
	var c = parseInt(a * 10);
	var d = 100;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        this.setAnswer('' + c,0);

        this.setQuestion('' + 'If you want to convert ' + ab.getString() + ' to an equivalent fraction with a denominator of 100 than what would you make the numerator?');
}
});

