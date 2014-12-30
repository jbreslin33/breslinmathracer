/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4_1',5.1501,'5.nf.b.4','whole number times fraction');
*/
var i_5_nf_b_4__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4_1';

        a = Math.floor((Math.random()*8)+2);
        nb = Math.floor((Math.random()*8)+2);
        db = Math.floor((Math.random()*8)+2);

        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(a*nb),db,true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Write the quotient as a fraction: ' + a + ' &times ' + fractionb.getString());
}
});

