
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.6_2',4.2002,'4.nf.c.6','');
*/
var i_4_nf_c_6__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
  	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '4.nf.c.6_2';
        this.ns = new NameSampler();

        var d = Math.floor((Math.random()*9)+1);
        var a = d;
        var b = 10;

	var decimal = new Decimal('0.' + a);

        var ab = new Fraction(a,b);

        this.setAnswer('' + decimal.getString(),0);

        this.setQuestion('' + 'Write ' + ab.getString() + ' as a decimal.');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.6_1',4.2001,'4.nf.c.6','');
*/
var i_4_nf_c_6__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.c.6_1';
        this.ns = new NameSampler();

        var d = Math.floor((Math.random()*9)+1);
        var a = d;
        var b = 10;

        var decimal = new Decimal('0.' + a);

        var ab = new Fraction(a,b);

        this.setAnswer('' + ab.getString(),0);

        this.setQuestion('' + 'Write ' + decimal.getString() + ' as a fraction.');
}
});



