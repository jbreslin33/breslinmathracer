/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4_1',5.1501,'5.nf.b.4','');
*/
var i_5_nf_b_4__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4_1';

        var n = 1;
        var d = 0;
        while (n >= d)
        {
                n = Math.floor((Math.random()*18)+2);
                d = Math.floor((Math.random()*18)+2);
        }

        var answer = new Fraction(n,d);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Write the quotient as a fraction: ' + n + ' &divide ' + d);
}
});

