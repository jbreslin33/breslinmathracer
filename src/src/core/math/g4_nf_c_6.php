
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

        var a = Math.floor((Math.random()*8)+2);
        var b = 10;
        var c = Math.floor((Math.random()*8)+2);
        var d = 100;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.add(cd);

        this.setAnswer('' + answer.getString(),0);

        this.setQuestion('' + ab.getString() + ' + ' + cd.getString());
}
});

