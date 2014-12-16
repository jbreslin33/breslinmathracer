/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_1',5.1201,'5.nf.a.1','');
*/
var i_5_nf_a_1__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nf.a.1_1';

        var an = Math.floor((Math.random()*9)+1);
        var ad = Math.floor((Math.random()*9)+1);
        var bn = Math.floor((Math.random()*9)+1);
        var bd = Math.floor((Math.random()*9)+1);

        var fractionA = new Fraction(an,ad);
        var fractionB = new Fraction(bn,bd);
        //var answer = new Fraction(n,ad);

        this.setAnswer(fractionA.getString(),0);
        this.setQuestion('Evaluate and simplify:' + fractionA.getString() + ' + ' + fractionB.getString());
	
	fractionA.add(fractionB);
	
}
});

