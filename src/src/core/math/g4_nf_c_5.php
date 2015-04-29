//add 19
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

