/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.3_1',5.1401,'5.nf.b.3','');
*/
var i_5_nf_b_3__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.3_1';

        var an = 0;
        var ad = 0;
        var bn = 0;
        var bd = 0;
        while (an == ad || bn == bd || ad == bd)
        {
                an = Math.floor((Math.random()*9)+1);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+1);
                bd = Math.floor((Math.random()*9)+1);
        }

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);

        var answer = fractionA.add(fractionB);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Evaluate: ' + fractionA.getString() + ' + ' + fractionB.getString());
}
});

